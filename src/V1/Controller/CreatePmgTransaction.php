<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1\Controller;

use Gear4music\ElavonPlayground\V1\PMG\Client;
use Gear4music\EnvironmentAwareInterface;
use Gear4music\HasEnvironmentTrait;
use Gear4music\JAPI\AuthSpec\Insecure;
use Gear4music\JAPI\AuthSpecInterface;
use Gear4music\JAPI\ExtendedController;
use Gear4music\JAPI\RequestValidatorSpec\NoValidation;

class CreatePmgTransaction extends ExtendedController implements EnvironmentAwareInterface
{
    use HasEnvironmentTrait;

    public function dispatch(): void
    {
        $request = $this->getRequestJson();

        $merchantTransactionId = substr($request->order_number . '-' . time(), 0, 30);
        $requestId = $merchantTransactionId;

        $client = new Client(
            $this->getEnvironment()->getVar('PMG_HOST'),
            $this->getEnvironment()->getVar('PMG_USERNAME'),
            $this->getEnvironment()->getVar('PMG_PASSWORD')
        );
        try {
            $response = $client->createTransaction(
                $requestId,
                $this->getEnvironment()->getVar('PMG_MERCHANT_ID'),
                $merchantTransactionId,
                $request->payment_method,
                (int)round($request->amount * 100),
                $request->currency_code,
                $request->country_code,
                $request->trading_brand,
                'en',
                $request->redirect_url,
                $this->getEnvironment()->getVar('ELAVON_PROCESSOR_ID'),
                ''
            );
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