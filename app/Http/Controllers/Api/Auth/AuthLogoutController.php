<?php

namespace App\Http\Controllers\Api\Auth;

class AuthLogoutController extends AuthBaseController
{
    public function __invoke()
    {
        // invalidate the user token
        $this->auth->invalidate($this->auth->getToken());
        
        return response(null, 200);
    }
}
