<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

enum Status: string
{
    case OK = 'OK';
    case BAD_REQUEST = 'BAD REQUEST';
}
