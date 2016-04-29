<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Contracts\Auth\Authenticatable;

class SigninController extends Controller
{
    public function index(){
        return view('auth/login');
    }
}
