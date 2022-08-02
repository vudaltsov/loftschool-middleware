<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

/**
 * @psalm-immutable
 */
final class Response
{
    public function __construct(
        public readonly Status $status,
    ) {
    }
}
