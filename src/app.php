<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once __DIR__.'/../vendor/autoload.php';

$logger = new Logger('main', [new StreamHandler('php://stdout')]);

$application = new Application(
    handler: new BusinessLogic(),
    middlewares: [
        new Logging($logger),
        new Validation(),
    ],
);
$request = new Request(uniqid(), 'awdawd');
$_response = $application->handle($request);
