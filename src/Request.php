<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

/**
 * @psalm-immutable
 */
final class Request
{
    public function __construct(
        public readonly string $requestId,
        public readonly string $title,
    ) {
    }
}
