<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

final class Application
{
    /**
     * @param list<Middleware> $middlewares
     */
    public function __construct(
        private readonly Handler $handler,
        private readonly array $middlewares,
    ) {
    }

    public function handle(Request $request): Response
    {
        return (new Pipeline($this->handler, $this->middlewares))->handle($request);
    }
}
