<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1\Controller;

use Gear4music\ElavonPlayground\V1\EPG\ApiException;
use Gear4music\ElavonPlayground\V1\EPG\Client;
use Gear4music\JAPI\AuthSpec\Insecure;
use Gear4music\JAPI\AuthSpecInterface;
use Gear4music\JAPI\ExtendedController;
use Gear4music\JAPI\RequestValidatorSpec\NoValidation;

class CreateEpgTransaction extends ExtendedController
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
            $response = $client->createBlikTransaction(
                $request->amount,
                'PLN',
                $request->blik_code,
                $request->order_number,
                $request->shopper_url,
                $request->email
            );
        } catch (ApiException $e) {
            $this->setResponseJson(["errors" => $e->getResponseBody()]);
            return;
        } catch (\Exception $e) {
            $this->setResponseJson(["error" => $e->getMessage()]);
            return;
        }

        $this->setResponseJson(["transaction" => $response->jsonSerialize()]);
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