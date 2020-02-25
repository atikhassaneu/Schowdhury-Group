<?php

namespace App\Http\Middleware;

use App\Pageview;
use Closure;

class PageViewCounter
{

    public function handle($request, Closure $next)
    {
        if (Pageview::all()->count()==0){
            $initialPageView  =  new Pageview();
            $initialPageView->total_page_views= 1;
            $initialPageView->save();

        }else{
            $pageView = Pageview::all()->first();
            $visitor = $pageView->total_page_views;
            $visitor++;
            $pageView->total_page_views = $visitor;
            $pageView->save();
        }
        return $next($request);
    }
}
