<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Tymon\JWTAuth\JWTAuth;

class AuthBaseController extends Controller
{
    protected $auth;
    
    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }
}
