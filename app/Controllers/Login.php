<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index(){
        session()->set('theme_mode', 'light');
        return view('login');
    }
    
    public function login(){
        $rules = [
            'user_email' => ['label' => 'email address', 'rules' => 'required|max_length[50]|valid_email'],
            'user_password' => ['label' => 'password', 'rules' => 'required|max_length[20]'],
        ];
        if($this->validate($rules)){
            $loginModel = new LoginModel();
            $data = [
                'user_email' => $this->request->getPost('user_email'),
                'user_password' => md5($this->request->getPost('user_password')),
            ];
            $result = $loginModel->checkLogin($data);
            if($result){
                $sessionData = [
                    'user_id' => $result['user_id'],
                    'user_name' => $result['user_name'],
                    'user_email' => $result['user_email'],
                    'user_password' => $result['user_password'],
                    'user_role' => $result['user_role'],
                    'user_key' => $result['user_key'],
                    'user_login' => $result['user_login'],
                    'is_login' => $result['is_login'],
                    'user_status' => $result['user_status'],
                    'webLog' => 'FALSE',
                ];
                session()->set($sessionData);
                return redirect()->to('confirmOTP');
            } else {
                $data['errors'] = "incorrect email or password";
                return view('login', $data);
            }
        } else {
            $data['validation'] = $this->validator;
            return view('login', $data);
        }
    }
}
