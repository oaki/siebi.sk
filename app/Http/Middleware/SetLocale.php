<?php

namespace App\Http\Middleware;

use App\Support\Pages;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale');

        if (! in_array($locale, Pages::LOCALES, true)) {
            abort(404);
        }

        App::setLocale($locale);

        return $next($request);
    }
}
