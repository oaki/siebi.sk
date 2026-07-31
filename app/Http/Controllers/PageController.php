<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function show(Request $request): View
    {
        $locale = $request->route('locale');
        $key = $request->route('page');

        $view = "content.{$key}.{$locale}";

        abort_unless(view()->exists($view), 404);

        return view($view, [
            'locale' => $locale,
            'pageKey' => $key,
        ]);
    }
}
