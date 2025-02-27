<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1\Controller;

use Gear4music\JAPI\AuthSpec\Insecure;
use Gear4music\JAPI\AuthSpecInterface;
use Gear4music\JAPI\ExtendedController;
use Gear4music\JAPI\RequestValidatorSpec\NoValidation;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

class Index extends ExtendedController
{

    public function dispatch(): void
    {
        $file = fopen(__DIR__ . '/../../../public/index.html', 'r');
        while (!feof($file)) {
            $buffer = fread($file, 4096);
            echo $buffer;
            ob_flush();
            flush();
        }
        fclose($file);
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