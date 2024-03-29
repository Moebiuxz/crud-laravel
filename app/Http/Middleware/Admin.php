<?php

namespace Cinema\Http\Middleware;
use Closure;
use Illuminate\Auth\Guard;
use Session;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
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
        if ($this->auth->user()->id != 1)
        {
            Session::flash('message-error', 'Sin privilegios');
            return redirect()->to('admin');
        }
        return $next($request);
    }
}
