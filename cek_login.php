<?php
namespace App\Http\Middleware;
use Closure;
use Session;
class cek_login
{
    public function handle($request, Closure $next)
    {
        if(Session::get('login_status')!=true)
        {
            return redirect('login');
        }
        return $next($request);
    }
}
?>