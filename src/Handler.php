<?php

declare(strict_types=1);

namespace Loftschool\Middleware;

interface Handler
{
    public function handle(Request $request): Response;
}
