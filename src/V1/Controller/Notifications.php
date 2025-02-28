<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1\Controller;

use Gear4music\JAPI\AuthSpec\Insecure;
use Gear4music\JAPI\AuthSpecInterface;
use Gear4music\JAPI\ExtendedController;
use Gear4music\JAPI\RequestValidatorSpec\NoValidation;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Notifications extends ExtendedController
{
    public function dispatch(): void
    {
        $obj_psr_logger = new Logger('log');
        $int_log_level = Logger::DEBUG;
        $obj_handler = new StreamHandler('php://stdout', $int_log_level);
        $obj_psr_logger->pushHandler($obj_handler);
        $obj_psr_logger->info('Notifications controller called');
        $obj_psr_logger->info('Request: ' . json_encode($this->getRequestJson()));
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