<?php
namespace App\Http\Controllers;

class WelcomeController extends Controller {

    /**
     * @return mixed
     */
    public function index() {
        return view('welcome');
    }
}