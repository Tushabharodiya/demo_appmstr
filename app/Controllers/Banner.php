<?php

namespace App\Controllers;

use App\Models\AndroidBannerModel;
use App\Models\AndroidCommonJsonModel;
use App\Models\AndroidJsonModel;

class Banner extends BaseController
{
    public function bannerNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidBannerModel = new AndroidBannerModel();
            if($this->request->getMethod() === 'post'){
                
                $bannerImage = $this->request->getFile('banner_image');
                $objectName = $bannerImage->getName();
                $objectTemp = $bannerImage->getPathname();
                $objectPath = BANNER_PATH;
                $dataResponse = newBucketObject($objectName, $objectTemp, $objectPath);
                
                $newData = [
                    'banner_title' => $this->request->getPost('banner_title'),
                    'banner_description' => $this->request->getPost('banner_description'),
                    'banner_image' => $dataResponse,
                    'banner_url' => $this->request->getPost('banner_url'),
                    'banner_button' => $this->request->getPost('banner_button'),
                    'banner_type' => $this->request->getPost('banner_type'),
                    'banner_status' => $this->request->getPost('banner_status'),
                ];
                $newDataEntry = $androidBannerModel->insertData($newData);
                if($newDataEntry){
                    return redirect()->to('view-banner');
                }
            } 
            return view('header')
            . view('banner/banner_new')
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function bannerView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidBannerModel = new AndroidBannerModel();
            
            session()->set('session_android_banner_view_previous_url', current_url_with_query());
            
            if($this->request->getPost('reset_search')){
                session()->remove('session_android_banner');
            }
            if($this->request->getPost('submit_search')){
                $searchAndroidBanner = $this->request->getPost('search_android_banner');
                session()->set('session_android_banner', $searchAndroidBanner);
            }
            $sessionAndroidBanner = session()->get('session_android_banner');
            
            $searchAndroidBannerType = $this->request->getPost('search_android_banner_type');
            if(in_array($searchAndroidBannerType, ['image', 'text'], true)){
                session()->set('session_android_banner_type', $searchAndroidBannerType);
            } else if($searchAndroidBannerType === 'all'){
                session()->remove('session_android_banner_type');
            }
            $sessionAndroidBannerType = session()->get('session_android_banner_type');
            
            $searchAndroidBannerStatus = $this->request->getPost('search_android_banner_status');
            if(in_array($searchAndroidBannerStatus, ['true', 'false'], true)){
                session()->set('session_android_banner_status', $searchAndroidBannerStatus);
            } else if($searchAndroidBannerStatus === 'all'){
                session()->remove('session_android_banner_status');
            }
            $sessionAndroidBannerStatus = session()->get('session_android_banner_status');
            
            $conditions = [
                'search_android_banner' => $sessionAndroidBanner,
                'search_android_banner_type' => $sessionAndroidBannerType,
                'search_android_banner_status' => $sessionAndroidBannerStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 6;
            $data = [
                'viewBanner' => $androidBannerModel->viewBannerData($conditions, $perPage),
                'pager' => $androidBannerModel->pager,
                'bannerCount' => $androidBannerModel->countBannerData($conditions, $perPage)
            ];
            return view('header')
                . view('banner/banner_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function bannerEdit($bannerID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $bannerID = urlDecodes($bannerID);
            if(ctype_digit($bannerID)){
                $androidBannerModel = new AndroidBannerModel();
                $data['bannerData'] = $androidBannerModel->getData($bannerID);
                if($this->request->getMethod() === 'post'){
                    $s3Client = getConfig();
                    
                    $imageKey = $data['bannerData']['banner_image'];
                    $newImageKey = basename($imageKey);
                    
                    $bannerImage = $this->request->getFile('banner_image');

                    if(!empty($bannerImage->getName())){
                        $deleteResult = $s3Client->deleteObject([
                            'Bucket' => BUCKET_NAME,
                            'Key'    => BANNER_PATH . $newImageKey,
                        ]);
                        
                        $objectName = $bannerImage->getName();
                        $objectTemp = $bannerImage->getPathname();
                        $objectPath = BANNER_PATH;
                        $dataResponse = newBucketObject($objectName, $objectTemp, $objectPath);
            
                        $editData = [
                            'banner_title' => $this->request->getPost('banner_title'),
                            'banner_description' => $this->request->getPost('banner_description'),
                            'banner_image' => $dataResponse,
                            'banner_url' => $this->request->getPost('banner_url'),
                            'banner_button' => $this->request->getPost('banner_button'),
                            'banner_type' => $this->request->getPost('banner_type'),
                            'banner_status' => $this->request->getPost('banner_status'),
                        ];
                    } else {
                        $editData = [
                            'banner_title' => $this->request->getPost('banner_title'),
                            'banner_description' => $this->request->getPost('banner_description'),
                            'banner_url' => $this->request->getPost('banner_url'),
                            'banner_button' => $this->request->getPost('banner_button'),
                            'banner_type' => $this->request->getPost('banner_type'),
                            'banner_status' => $this->request->getPost('banner_status'),
                        ];
                    }
                    $editDataEntry = $androidBannerModel->editData($bannerID, $editData);
                    if($editDataEntry){
                        $sessionAndroidBannerViewPreviousUrl = session()->get('session_android_banner_view_previous_url');
                        if(!empty($sessionAndroidBannerViewPreviousUrl)){
                            return redirect()->to($sessionAndroidBannerViewPreviousUrl);
                        } else {
                            return redirect()->to('view-banner');
                        }
                    }
                }
                return view('header')
                    . view('banner/banner_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }

    public function bannerDelete($bannerID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $bannerID = urlDecodes($bannerID);
            if(ctype_digit($bannerID)){
                $androidBannerModel = new AndroidBannerModel();
                $androidCommonJsonModel = new AndroidCommonJsonModel();
                $androidJsonModel = new AndroidJsonModel();
                
                $commonJsonData = $androidCommonJsonModel->getData(null);
                $commonJsonDataFound = false;
                if($commonJsonData){
                    foreach($commonJsonData as $commonJsonRow){
                        $commonJsonBannerIDs = explode(",", $commonJsonRow['json_data']);
                        foreach($commonJsonBannerIDs as $commonJsonBannerID){
                            if($commonJsonBannerID == $bannerID){
                                $commonJsonDataFound = true;
                                break;
                            }
                        }
                    }
                }
                
                $allJsonData = $androidJsonModel->viewData();
                $allJsonDataFound = false;
                if($allJsonData){
                    foreach($allJsonData as $allJsonRow){
                        $allJsonBannerIDs = explode(",", $allJsonRow['json_data']);
                        foreach($allJsonBannerIDs as $allJsonBannerID){
                            if($allJsonBannerID == $bannerID){
                                $allJsonDataFound = true;
                                break;
                            }
                        }
                    }
                }
                
                if($commonJsonDataFound == true){
                    session()->set('session_android_banner_delete_common_json', "You can't delete the banner! Please update");
                    $sessionAndroidBannerViewPreviousUrl = session()->get('session_android_banner_view_previous_url');
                    if(!empty($sessionAndroidBannerViewPreviousUrl)){
                        return redirect()->to($sessionAndroidBannerViewPreviousUrl);
                    } else {
                        return redirect()->to('view-banner');
                    }
                } else if($allJsonDataFound == true){
                    session()->set('session_android_banner_delete_json', "You can't delete the banner! Please update");
                    $sessionAndroidBannerViewPreviousUrl = session()->get('session_android_banner_view_previous_url');
                    if(!empty($sessionAndroidBannerViewPreviousUrl)){
                        return redirect()->to($sessionAndroidBannerViewPreviousUrl);
                    } else {
                        return redirect()->to('view-banner');
                    }
                } else {
                    $data['bannerData'] = $androidBannerModel->getData($bannerID);
                    $s3Client = getConfig();
                    
                    $imageKey = $data['bannerData']['banner_image'];
                    $newImageKey = basename($imageKey);
                    
                    $deleteResult = $s3Client->deleteObject([
                        'Bucket' => BUCKET_NAME,
                        'Key'    => BANNER_PATH . $newImageKey,
                    ]);
                    $resultDataEntry = $androidBannerModel->deleteData($bannerID);
                    if($resultDataEntry){
                        $sessionAndroidBannerViewPreviousUrl = session()->get('session_android_banner_view_previous_url');
                        if(!empty($sessionAndroidBannerViewPreviousUrl)){
                            return redirect()->to($sessionAndroidBannerViewPreviousUrl);
                        } else {
                            return redirect()->to('view-banner');
                        }
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