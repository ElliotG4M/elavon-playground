<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1\Controller;

use Gear4music\ElavonPlayground\V1\PMG\Client;
use Gear4music\JAPI\AuthSpec\Insecure;
use Gear4music\JAPI\AuthSpecInterface;
use Gear4music\JAPI\ExtendedController;
use Gear4music\JAPI\RequestValidatorSpec\NoValidation;

class GetPmgTransaction extends ExtendedController
{
    public function dispatch(): void
    {
        $request = $this->getRequestJson();

        $client = new Client(
            $this->getEnvironment()->getVar('PMG_HOST'),
            $this->getEnvironment()->getVar('PMG_USERNAME'),
            $this->getEnvironment()->getVar('PMG_PASSWORD')
        );

        try {
            $response = $client->getTransaction(
                $this->getEnvironment()->getVar('PMG_MERCHANT_ID'),
                $request->transaction_id
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