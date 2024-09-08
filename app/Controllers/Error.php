<?php

namespace App\Controllers;

class Error extends BaseController
{
    public function index(){
        return view('header')
            . view('error')
            . view('footer');
    }
}
