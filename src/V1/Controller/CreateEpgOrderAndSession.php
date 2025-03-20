<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1\Controller;

use Gear4music\ElavonPlayground\V1\EPG\ApiException;
use Gear4music\ElavonPlayground\V1\EPG\Client;
use Gear4music\JAPI\AuthSpec\Insecure;
use Gear4music\JAPI\AuthSpecInterface;
use Gear4music\JAPI\ExtendedController;
use Gear4music\JAPI\RequestValidatorSpec\NoValidation;

class CreateEpgOrderAndSession extends ExtendedController
{
    public function dispatch(): void
    {
        $request = $this->getRequestJson();

        $client = new Client(
            $this->getEnvironment()->getVar('EPG_HOST'),
            $this->getEnvironment()->getVar('EPG_USERNAME'),
            $this->getEnvironment()->getVar('EPG_PASSWORD')
        );

        try {
            $order = $client->createOrder(
                $request->amount,
                'PLN',
                0.0,
                0.0,
                $request->order_number,
                'Elliot Parker',
                '1 Test Street',
                '',
                'Krakow',
                '30-003',
                'POL',
                $request->email,
                '0123456789',
                [
                    [
                        'name' => 'Guitar',
                        'quantity' => 1,
                        'price' => round($request->amount / 2, 2),
                    ],
                    [
                        'name' => 'Drumsticks',
                        'quantity' => 2,
                        'price' => round($request->amount / 4, 2),
                    ],
                ]
            );

            $response = $client->createPaymentSession(
                $order->getHref(),
                $this->getEnvironment()->getVar('ELAVON_ACCOUNT_ID'),
                'http://localhost:8080',
                'Elliot Parker',
                '1 Test Street',
                '',
                'Krakow',
                '30-003',
                'POL',
                $request->email,
                '0123456789'
            );
        } catch (ApiException $e) {
            $this->setResponseJson(["errors" => $e->getResponseBody()]);
            return;
        } catch (\Exception $e) {
            $this->setResponseJson(["error" => $e->getMessage()]);
            return;
        }

        $this->setResponseJson(["session" => $response->jsonSerialize()]);
    }

    public function buildAuthSpec(): AuthSpecInterface
    {
        return new Insecure();
    }

    #[\Override]
    public function buildRequestValidatorSpec()
    {
        return new NoValidation();
    }
}