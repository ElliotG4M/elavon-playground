<?php

declare(strict_types=1);

namespace Gear4music\ElavonPlayground\V1;

use Gear4music\JAPI\ExtendedApplication;
use Psr\Http\Message\ServerRequestInterface;

class Bootstrap extends \Gear4music\JAPI\Bootstrap
{
    /**
     * Custom DI wiring, if required - overridden in application layer
     *
     * @param ServerRequestInterface $obj_request
     * @return void
     */
    protected function prepareCustomWiring(ServerRequestInterface $obj_request): void
    {
        // e..g Redis, Memcached, DB, Data Repositories, etc.
    }

    /**
     * Custom middleware, if required - overridden in application layer
     *
     * @param ExtendedApplication $obj_app
     * @param ServerRequestInterface $obj_request
     * @return void
     */
    protected function customiseMiddleware(ExtendedApplication $obj_app, ServerRequestInterface $obj_request): void
    {
        // e.g. CORS, Pub/Sub, etc.
    }
}