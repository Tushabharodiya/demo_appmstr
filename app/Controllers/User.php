<?php

namespace App\Controllers;

class User extends BaseController
{
    public function userProfile(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            return view('header')
                . view('user/user_profile')
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
}
