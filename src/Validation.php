<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

final class Validation implements Middleware
{
    public function handle(Request $request, callable $next): Response
    {
        if ($request->title === '') {
            return new Response(Status::BAD_REQUEST);
        }

        return $next($request);
    }
}
