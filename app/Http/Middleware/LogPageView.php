<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Privacy-first hit counter: no cookies, no IP address, no user agent —
 * just a row per request (locale, page, path, day) for aggregate counts.
 */
class LogPageView
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($response->getStatusCode() === 200) {
            PageView::create([
                'locale' => $request->route('locale'),
                'page_key' => $request->route('page'),
                'path' => $request->path(),
                'viewed_on' => now()->toDateString(),
            ]);
        }

        return $response;
    }
}
