<?php

namespace App\Controllers;

use App\Models\AndroidVersionModel;
use App\Models\AndroidAppsModel;

class Version extends BaseController
{
    public function versionNew($appID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $appID = urlDecodes($appID);
            if(ctype_digit($appID)){
                $androidVersionModel = new AndroidVersionModel();
                $androidAppsModel = new AndroidAppsModel();
                
                $data['appID'] = $appID;
                
                if($this->request->getMethod() === 'post'){
                    $appID = $this->request->getPost('app_id');
                    $data['androidAppData'] = $androidAppsModel->getData($appID);
                    $updateUrl = $data['androidAppData']['app_package'];
                    
                    $versionName = $this->request->getPost('version_name');
                    $versionCode = $this->request->getPost('version_code');
                    $checkVersionByName = $androidVersionModel->checkAndroidVersionByName($appID, $versionName);
                    $checkVersionByCode = $androidVersionModel->checkAndroidVersionByCode($appID, $versionCode);

                    if(empty($checkVersionByName) && empty($checkVersionByCode)){
                        $newData = [
                            'app_id' => $this->request->getPost('app_id'),
                            'version_name' => $this->request->getPost('version_name'),
                            'version_code' => $this->request->getPost('version_code'),
                            'main_api' => $this->request->getPost('main_api'),
                            'data_api' => $this->request->getPost('data_api'),
                            'app_ads' => $this->request->getPost('app_ads'),
                            'app_open' => $this->request->getPost('app_open'),
                            'splash_ads' => $this->request->getPost('splash_ads'),
                            'screen_ads' => $this->request->getPost('screen_ads'),
                            'ads_count_one' => $this->request->getPost('ads_count_one'),
                            'ads_count_two' => $this->request->getPost('ads_count_two'),
                            'ads_count_three' => $this->request->getPost('ads_count_three'),
                            'ads_count_four' => $this->request->getPost('ads_count_four'),
                            'review_count' => $this->request->getPost('review_count'),
                            'app_banner' => $this->request->getPost('app_banner'),
                            'app_review' => $this->request->getPost('app_review'),
                            'app_update' => $this->request->getPost('app_update'),
                            'update_title' => $this->request->getPost('update_title'),
                            'update_description' => $this->request->getPost('update_description'),
                            'update_button' => $this->request->getPost('update_button'),
                            'update_url' => $updateUrl,
                            'is_vpn' => $this->request->getPost('is_vpn'),
                            'is_crawler' => $this->request->getPost('is_crawler'),
                            'is_subscription' => $this->request->getPost('is_subscription'),
                            'is_rewarded' => $this->request->getPost('is_rewarded'),
                            'version_status' => $this->request->getPost('version_status'),
                        ];
                        $newDataEntry = $androidVersionModel->insertData($newData);
                        if($newDataEntry){
                            return redirect()->to('info-app/'.urlEncodes($appID));
                        }
                    } else {
                        if(!empty($checkVersionByName)){
                            session()->set('session_android_version_new_version_name', "Version name $versionName is already exits in database!");
            	        }
            	        if(!empty($checkVersionByCode)){
            	            session()->set('session_android_version_new_version_code', "Version code $versionCode is already exits in database!");
            	        }
            	        return redirect()->to('new-version/'.urlEncodes($appID));
                    }
                } 
                return view('header')
                . view('version/version_new', $data)
                . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function versionInfo($versionID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $versionID = urlDecodes($versionID);
            if(ctype_digit($versionID)){
                $androidVersionModel = new AndroidVersionModel();
                $data['infoVersion'] = $androidVersionModel->getData($versionID);
                $data['appID'] = $data['infoVersion']['app_id'];
                return view('header')
                    . view('version/version_info', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function versionEdit($versionID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $versionID = urlDecodes($versionID);
            if(ctype_digit($versionID)){
                $androidVersionModel = new AndroidVersionModel();
                
                $data['versionData'] = $androidVersionModel->getData($versionID);
                $data['appID'] = $data['versionData']['app_id'];
                
                if($this->request->getMethod() === 'post'){
                    $editData = [
                        'version_name' => $this->request->getPost('version_name'),
                        'version_code' => $this->request->getPost('version_code'),
                        'main_api' => $this->request->getPost('main_api'),
                        'data_api' => $this->request->getPost('data_api'),
                        'app_ads' => $this->request->getPost('app_ads'),
                        'app_open' => $this->request->getPost('app_open'),
                        'splash_ads' => $this->request->getPost('splash_ads'),
                        'screen_ads' => $this->request->getPost('screen_ads'),
                        'ads_count_one' => $this->request->getPost('ads_count_one'),
                        'ads_count_two' => $this->request->getPost('ads_count_two'),
                        'ads_count_three' => $this->request->getPost('ads_count_three'),
                        'ads_count_four' => $this->request->getPost('ads_count_four'),
                        'review_count' => $this->request->getPost('review_count'),
                        'app_banner' => $this->request->getPost('app_banner'),
                        'app_review' => $this->request->getPost('app_review'),
                        'app_update' => $this->request->getPost('app_update'),
                        'update_title' => $this->request->getPost('update_title'),
                        'update_description' => $this->request->getPost('update_description'),
                        'update_button' => $this->request->getPost('update_button'),
                        'update_url' => $this->request->getPost('update_url'),
                        'is_vpn' => $this->request->getPost('is_vpn'),
                        'is_crawler' => $this->request->getPost('is_crawler'),
                        'is_subscription' => $this->request->getPost('is_subscription'),
                        'is_rewarded' => $this->request->getPost('is_rewarded'),
                        'version_status' => $this->request->getPost('version_status'),
                    ];
                    $editDataEntry = $androidVersionModel->editData($versionID, $editData);

                    if($editDataEntry){
                        return redirect()->to('info-app/'.urlEncodes($data['appID']));
                    }
                }
                return view('header')
                    . view('version/version_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }

    public function versionDelete($versionID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $versionID = urlDecodes($versionID);
            if(ctype_digit($versionID)){
                $androidVersionModel = new AndroidVersionModel();
                
                $data['versionData'] = $androidVersionModel->getData($versionID);
                $appID = $data['versionData']['app_id'];
                
                $resultDataEntry = $androidVersionModel->deleteData($versionID);
                if($resultDataEntry){
                    return redirect()->to('info-app/'.urlEncodes($appID));
                }
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
}