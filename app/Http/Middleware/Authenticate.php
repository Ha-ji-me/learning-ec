<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected $userRoute = 'user.login';
    protected $ownerRoute = 'owner.login';
    protected $adminRoute = 'admin.login';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login');
        if($request->expectsJson()) {
            if(Route::is('owner.*')) {
                return route($this->ownerRoute);
            } elseif(Route::is('admin.*')) {
                return route($this->adminRoute);
            } else {
                return route($this->userRoute);
            }
        }
    }
}
