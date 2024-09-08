<?php

namespace App\Controllers;

use App\Models\LoginModel;

class ConfirmOTP extends BaseController
{
    public function index(){
        return view('verify');
    }
    
    public function confirmOTP(){
        $loginModel = new LoginModel();
        $confirmOTP = $this->request->getPost('confirm_otp');
        if($confirmOTP == OTP){
            $sessionData = [
                'webLog' => 'TRUE',
                'auth_key' => AUTH_KEY
            ];
            $userID = session('user_id');
            $editData = [
                'user_login' => timeZone(),
                'is_login' => 'True'
            ];
            $editDataEntry = $loginModel->update($userID, $editData);
            if($editDataEntry){
                session()->set($sessionData);
                return redirect()->to('dashboard');
            }
        } else {
            return redirect()->to('confirmOTP');
        }
    }
}
