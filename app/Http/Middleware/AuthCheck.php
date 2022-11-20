<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('ten_nhanvien') && ($request->path() !='admin' && $request->path() !='admin/create')){
            return redirect()->route('login')->with('fail','You must be logged in');
        }

        // if(session()->has('ten_nhanvien') && ($request->path() == 'admin' || $request->path() == 'admin/create' ) ){
        //     return back();
        // }
        // if(session()->has('ten_nhanvien') && ($request->path()==''))
        // {
        //     session()->pull("ten_nhanvien");
        // }
        $response = $next($request);
$headers = [
    'Cache-Control' => 'nocache, no-store, max-age=0, must-revalidate',
    'Pragma','no-cache',
    'Expires','Fri, 01 Jan 1990 00:00:00 GMT',
];

foreach($headers as $key => $value) {
    $response->headers->set($key, $value);
}

return $response;
    }
}
