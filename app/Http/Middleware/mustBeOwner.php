<?php

namespace App\Http\Middleware;

use Closure;
use App\Question;

class mustBeOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        $question = Question::find($request->id);

        if ($user && $user->id === $question->user_id) {
            return $next($request);
        } 

        return redirect()->back();
    }
}
