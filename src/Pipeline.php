<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

final class Pipeline
{
    /**
     * @param list<Middleware> $middlewares
     */
    public function __construct(
        private readonly Handler $handler,
        private array $middlewares,
    ) {
    }

    public function handle(Request $request): Response
    {
        $middleware = array_shift($this->middlewares);

        if ($middleware !== null) {
            return $middleware->handle($request, [$this, 'handle']);
        }

        return $this->handler->handle($request);
    }
}
