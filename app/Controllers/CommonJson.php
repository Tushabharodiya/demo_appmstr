<?php

namespace App\Controllers;

use App\Models\AndroidCommonJsonModel;
use App\Models\AndroidBannerModel;

class CommonJson extends BaseController
{
    public function commonJsonNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidCommonJsonModel = new AndroidCommonJsonModel();
            $androidBannerModel = new AndroidBannerModel();
            
            $data['viewBanner'] = $androidBannerModel->viewAndroidBanner();

            if($this->request->getMethod() === 'post'){
                $jsonArray = [];
                if($this->request->getPost('data_json')){
                    foreach($this->request->getPost('data_json') as $jsonIDs){
                        $jsonArray[] = $jsonIDs;
                    }
                }
            
                $appID = $this->request->getPost('app_id');
                $jsonString = implode(',', $jsonArray);
                $newData = [
                    'json_data' => $jsonString,
                    'json_status' => "true"
                ];
            
                $dJsonData = $androidCommonJsonModel->getData(null);
            
                if(empty($dJsonData)){
                    if(!empty($jsonString)){
                        $newDataEntry = $androidCommonJsonModel->insertData($newData);
                        if($newDataEntry){
                            return redirect()->to('view-common-json');
                        }
                    } else {
                        return redirect()->to('error');
                    }
                } else {
                    session()->set('session_android_common_json_new', "Common Json already exits.");
                    return redirect()->to('new-common-json');
                }
            }
            return view('header')
            . view('commonjson/common_json_new', $data)
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function commonJsonView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidCommonJsonModel = new AndroidCommonJsonModel();
            $androidBannerModel = new AndroidBannerModel();
            
            session()->set('session_android_common_json_view_previous_url', current_url_with_query());

            $data['viewJsonBanner'] = [];
            $data['jsonData'] = $androidCommonJsonModel->viewAndroidCommonJson();

            if($data['jsonData']){
                $bannerIDs = $data['jsonData']->json_data;
                $bannerArray = explode(",", $bannerIDs);

                foreach($bannerArray as $row){
                    $bannerID = $row;
                    $getJsonBanner = $androidBannerModel->getData($bannerID);
                    $data['viewJsonBanner'][] = $getJsonBanner;
                }
            } 
            
            $data['commonJsonCount'] = !empty($bannerArray) ? count($bannerArray) : 0;

            return view('header')
                . view('commonjson/common_json_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function commonJsonEdit($jsonID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $jsonID = urlDecodes($jsonID);
            if(ctype_digit($jsonID)){
                $androidCommonJsonModel = new AndroidCommonJsonModel();
                $androidBannerModel = new AndroidBannerModel();
                
                $data['androidJsonData'] = $androidCommonJsonModel->getData($jsonID);
                $data['androidBannerData'] = $androidBannerModel->viewAndroidBanner();
                
                if($this->request->getMethod() === 'post'){
                    $jsonArray = $this->request->getPost('data_json') ?? [];
        
                    $jsonString = implode(',', $jsonArray);

                    $editData = [
                        'json_data' => $jsonString
                    ];
            
                    if($editData['json_data'] !== null){
                        $editDataEntry = $androidCommonJsonModel->editData($jsonID, $editData);
                        if($editDataEntry){
                            $sessionAndroidCommonJsonViewPreviousUrl = session()->get('session_android_common_json_view_previous_url');
                            if(!empty($sessionAndroidCommonJsonViewPreviousUrl)){
                                return redirect()->to($sessionAndroidCommonJsonViewPreviousUrl);
                            } else {
                                return redirect()->to('view-common-json');
                            }
                        }
                    }
                }
                return view('header')
                    . view('commonjson/common_json_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
}