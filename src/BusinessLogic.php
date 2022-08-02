<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

final class BusinessLogic implements Handler
{
    public function handle(Request $request): Response
    {
        usleep(100);

        return new Response(Status::OK);
    }
}
