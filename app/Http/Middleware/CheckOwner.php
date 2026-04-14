<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $video = $request->route('video');
        
        if (!$video) {
            return $next($request); 
                }
                
        if ($video && $video->channel->creator_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
