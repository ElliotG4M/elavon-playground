<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1\Controller;

use Gear4music\ElavonPlayground\V1\EPG\Client;
use Gear4music\JAPI\AuthSpec\Insecure;
use Gear4music\JAPI\AuthSpecInterface;
use Gear4music\JAPI\ExtendedController;
use Gear4music\JAPI\RequestValidatorSpec\NoValidation;

class GetEpgTransaction extends ExtendedController
{
    public function dispatch(): void
    {
        $request = $this->getRequestJson();

        $client = new Client(
            $this->getEnvironment()->getVar('EPG_HOST'),
            $this->getEnvironment()->getVar('EPG_USERNAME'),
            $this->getEnvironment()->getVar('EPG_PASSWORD')
        );

        if (!empty($request->transaction_id)) {
            try {
                $response = $client->getTransaction(
                    $request->transaction_id
                );
            } catch (\Exception $e) {
                $this->setResponseJson(["error" => $e->getMessage()]);
                return;
            }
        } else if (!empty($request->session_id)) {
            try {
                $session = $client->getSession($request->session_id);
                $response = $client->getTransaction(substr($session->getTransaction(), strrpos($session->getTransaction(), '/') + 1));
            } catch (\Exception $e) {
                $this->setResponseJson(["error" => $e->getMessage()]);
                return;
            }
        } else {
            $this->setResponseJson(["error" => "Either transaction_id or session_id must be provided"]);
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