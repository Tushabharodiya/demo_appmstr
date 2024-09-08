<?php

namespace App\Controllers;

use App\Models\AndroidDeviceModel;

class Device extends BaseController
{
    public function deviceNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidDeviceModel = new AndroidDeviceModel();
            if($this->request->getMethod() === 'post'){
                $newData = [
                    'device_code' => $this->request->getPost('device_code'),
                    'device_name' => $this->request->getPost('device_name'),
                    'device_status' => $this->request->getPost('device_status'),
                ];
                $newDataEntry = $androidDeviceModel->insertData($newData);
                if($newDataEntry){
                    return redirect()->to('view-device');
                }
            } 
            return view('header')
            . view('device/device_new')
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function deviceView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidDeviceModel = new AndroidDeviceModel();
            
            session()->set('session_android_device_view_previous_url', current_url_with_query());

            if($this->request->getPost('reset_search')){
                session()->remove('session_android_device');
            }
            if($this->request->getPost('submit_search')){
                $searchAndroidDevice = $this->request->getPost('search_android_device');
                session()->set('session_android_device', $searchAndroidDevice);
            }
            $sessionAndroidDevice = session()->get('session_android_device');
            
            $searchAndroidDeviceStatus = $this->request->getPost('search_android_device_status');
            if(in_array($searchAndroidDeviceStatus, ['publish','unpublish'], true)){
                session()->set('session_android_device_status', $searchAndroidDeviceStatus);
            } else if($searchAndroidDeviceStatus === 'all'){
                session()->remove('session_android_device_status');
            }
            $sessionAndroidDeviceStatus = session()->get('session_android_device_status');
            
            $conditions = [
                'search_android_device' => $sessionAndroidDevice,
                'search_android_device_status' => $sessionAndroidDeviceStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 10;
            $data = [
                'viewDevice' => $androidDeviceModel->viewDeviceData($conditions, $perPage),
                'pager' => $androidDeviceModel->pager,
                'deviceCount' => $androidDeviceModel->countDeviceData($conditions, $perPage)
            ];
            return view('header')
                . view('device/device_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function deviceEdit($deviceID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $deviceID = urlDecodes($deviceID);
            if(ctype_digit($deviceID)){
                $androidDeviceModel = new AndroidDeviceModel();
                $data['deviceData'] = $androidDeviceModel->getData($deviceID);
                if($this->request->getMethod() === 'post'){
                    $editData = [
                        'device_code' => $this->request->getPost('device_code'),
                        'device_name' => $this->request->getPost('device_name'),
                        'device_status' => $this->request->getPost('device_status'),
                    ];
                    $editDataEntry = $androidDeviceModel->editData($deviceID, $editData);
                    if($editDataEntry){
                        $sessionAndroidDeviceViewPreviousUrl = session()->get('session_android_device_view_previous_url');
                        if(!empty($sessionAndroidDeviceViewPreviousUrl)){
                            return redirect()->to($sessionAndroidDeviceViewPreviousUrl);
                        } else {
                            return redirect('view-device');
                        }
                    }
                }
                return view('header')
                    . view('device/device_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function deviceDelete($deviceID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $deviceID = urlDecodes($deviceID);
            if(ctype_digit($deviceID)){
                $androidDeviceModel = new AndroidDeviceModel();
                
                $resultDataEntry = $androidDeviceModel->deleteData($deviceID);
                if($resultDataEntry){
                    $sessionAndroidDevicePreviousUrl = session()->get('session_android_device_previous_url');
                    if(!empty($sessionAndroidDevicePreviousUrl)){
                        return redirect()->to($sessionAndroidDevicePreviousUrl);
                    } else {
                        return redirect()->to('view-device');
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