<?php

namespace App\Controllers;

use App\Models\AndroidIpModel;

class Ip extends BaseController
{
    public function ipNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidIpModel = new AndroidIpModel();
            if($this->request->getMethod() === 'post'){
                $newData = [
                    'ip_address' => $this->request->getPost('ip_address'),
                    'ip_name' => $this->request->getPost('ip_name'),
                    'ip_status' => $this->request->getPost('ip_status'),
                ];
                $newDataEntry = $androidIpModel->insertData($newData);
                if($newDataEntry){
                    return redirect()->to('view-ip');
                }
            } 
            return view('header')
            . view('ip/ip_new')
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function ipView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidIpModel = new AndroidIpModel();
            
            session()->set('session_android_ip_view_previous_url', current_url_with_query());

            if($this->request->getPost('reset_search')){
                session()->remove('session_android_ip');
            }
            if($this->request->getPost('submit_search')){
                $searchAndroidIp = $this->request->getPost('search_android_ip');
                session()->set('session_android_ip', $searchAndroidIp);
            }
            $sessionAndroidIp = session()->get('session_android_ip');
            
            $searchAndroidIpStatus = $this->request->getPost('search_android_ip_status');
            if(in_array($searchAndroidIpStatus, ['publish','unpublish'], true)){
                session()->set('session_android_ip_status', $searchAndroidIpStatus);
            } else if($searchAndroidIpStatus === 'all'){
                session()->remove('session_android_ip_status');
            }
            $sessionAndroidIpStatus = session()->get('session_android_ip_status');
            
            $conditions = [
                'search_android_ip' => $sessionAndroidIp,
                'search_android_ip_status' => $sessionAndroidIpStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 10;
            $data = [
                'viewIp' => $androidIpModel->viewIpData($conditions, $perPage),
                'pager' => $androidIpModel->pager,
                'ipCount' => $androidIpModel->countIpData($conditions, $perPage)
            ];
            return view('header')
                . view('ip/ip_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function ipEdit($ipID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $ipID = urlDecodes($ipID);
            if(ctype_digit($ipID)){
                $androidIpModel = new AndroidIpModel();
                $data['ipData'] = $androidIpModel->getData($ipID);
                if($this->request->getMethod() === 'post'){
                    $editData = [
                        'ip_address' => $this->request->getPost('ip_address'),
                        'ip_name' => $this->request->getPost('ip_name'),
                        'ip_status' => $this->request->getPost('ip_status'),
                    ];
                    $editDataEntry = $androidIpModel->editData($ipID, $editData);
                    if($editDataEntry){
                        $sessionAndroidIpViewPreviousUrl = session()->get('session_android_ip_view_previous_url');
                        if(!empty($sessionAndroidIpViewPreviousUrl)){
                            return redirect()->to($sessionAndroidIpViewPreviousUrl);
                        } else {
                            return redirect('view-ip');
                        }
                    }
                }
                return view('header')
                    . view('ip/ip_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function ipDelete($ipID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $ipID = urlDecodes($ipID);
            if(ctype_digit($ipID)){
                $androidIpModel = new AndroidIpModel();
                
                $resultDataEntry = $androidIpModel->deleteData($ipID);
                if($resultDataEntry){
                    $sessionAndroidIpPreviousUrl = session()->get('session_android_ip_previous_url');
                    if(!empty($sessionAndroidIpPreviousUrl)){
                        return redirect()->to($sessionAndroidIpPreviousUrl);
                    } else {
                        return redirect()->to('view-ip');
                    }
                }
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
}