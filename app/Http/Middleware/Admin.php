<?php

namespace Cinema\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard; /** Interfaz que proporciona informacion del usuario logeado actualmente**/
use Session;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if($this->auth->user()->id != 3){
            Session::flash('message-error','Sin Privilegios');
            return redirect()->to('admin');

        }
        return $next($request);
    }
}
