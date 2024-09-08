<?php

namespace App\Controllers;

use App\Models\AndroidDeveloperModel;
use App\Models\AndroidAppsModel;
use App\Models\AndroidRoiModel;

class Developer extends BaseController
{
    public function developerNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidDeveloperModel = new AndroidDeveloperModel();
            if($this->request->getMethod() === 'post'){
                
                $frontFile = $this->request->getFile('developer_identity_front_file');
                $objectFrontName = $frontFile->getName();
                $objectFrontTemp = $frontFile->getPathname();
                $objectFrontPath = FRONT_FILE;
                $dataFrontResponse = newBucketObject($objectFrontName, $objectFrontTemp, $objectFrontPath);
                
                $backFile = $this->request->getFile('developer_identity_back_file');
                $objectBackName = $backFile->getName();
                $objectBackTemp = $backFile->getPathname();
                $objectBackPath = BACK_FILE;
                $dataBackResponse = newBucketObject($objectBackName, $objectBackTemp, $objectBackPath);
                
                $newData = [
                    'developer_name' => $this->request->getPost('developer_name'),
                    'developer_email' => $this->request->getPost('developer_email'),
                    'developer_create_date' => $this->request->getPost('developer_create_date'),
                    'developer_device' => $this->request->getPost('developer_device'),
                    'developer_mac' => $this->request->getPost('developer_mac'),
                    'developer_mobile_number' => $this->request->getPost('developer_mobile_number'),
                    'developer_identity_name' => $this->request->getPost('developer_identity_name'),
                    'developer_identity_type' => $this->request->getPost('developer_identity_type'),
                    'developer_identity_front_file' => $dataFrontResponse,
                    'developer_identity_back_file' => $dataBackResponse,
                    'developer_payee_name' => $this->request->getPost('developer_payee_name'),
                    'developer_payee_bank' => $this->request->getPost('developer_payee_bank'),
                    'developer_payee_card' => $this->request->getPost('developer_payee_card'),
                    'developer_payee_type' => $this->request->getPost('developer_payee_type'),
                    'developer_status' => $this->request->getPost('developer_status'),
                ];
                $newDataEntry = $androidDeveloperModel->insertData($newData);
                if($newDataEntry){
                    return redirect()->to('view-developer');
                }
            } 
            return view('header')
            . view('developer/developer_new')
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function developerView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidDeveloperModel = new AndroidDeveloperModel();
            
            session()->set('session_android_developer_view_previous_url', current_url_with_query());
            
            if($this->request->getPost('reset_search')){
                session()->remove('session_android_developer');
            }
            if($this->request->getPost('submit_search')){
                $searchAndroidDeveloper = $this->request->getPost('search_android_developer');
                session()->set('session_android_developer', $searchAndroidDeveloper);
            }
            $sessionAndroidDeveloper = session()->get('session_android_developer');
            
            $searchAndroidDeveloperStatus = $this->request->getPost('search_android_developer_status');
            if(in_array($searchAndroidDeveloperStatus, ['publish', 'unpublish'], true)){
                session()->set('session_android_developer_status', $searchAndroidDeveloperStatus);
            }
            $sessionAndroidDeveloperStatus = session()->get('session_android_developer_status');
            
            $conditions = [
                'search_android_developer' => $sessionAndroidDeveloper,
                'search_android_developer_status' => $sessionAndroidDeveloperStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 10;
            $data = [
                'viewDeveloper' => $androidDeveloperModel->viewDeveloperData($conditions, $perPage),
                'pager' => $androidDeveloperModel->pager,
                'developerCount' => $androidDeveloperModel->countDeveloperData($conditions, $perPage)
            ];
            return view('header')
                . view('developer/developer_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function developerInfo($developerID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $developerID = urlDecodes($developerID);
            if(ctype_digit($developerID)){
                date_default_timezone_set("Asia/Kolkata");
                $todayDate = date('Y-m-d');
                $previousDate = date('Y-m-d', strtotime(' -7 day'));
                    
                $androidDeveloperModel = new AndroidDeveloperModel();
                $androidAppsModel = new AndroidAppsModel();
                $androidRoiModel = new AndroidRoiModel();
                
                session()->set('session_android_application_view_previous_url', current_url_with_query());
                session()->set('session_android_application_previous_url', current_url_with_query());
                
                if($this->request->getPost('reset_search')){
                    session()->remove('session_developer_android_apps');
                }
                if($this->request->getPost('submit_search')){
                    $searchDeveloperAndroidApps = $this->request->getPost('search_developer_android_apps');
                    session()->set('session_developer_android_apps', $searchDeveloperAndroidApps);
                }
                $sessionDeveloperAndroidApps = session()->get('session_developer_android_apps');
                
                $searchDeveloperAndroidAppsRevenueType = $this->request->getPost('search_developer_android_apps_revenue_type');
                if(in_array($searchDeveloperAndroidAppsRevenueType, ['Paid', 'Organic', 'Both'], true)){
                    session()->set('session_developer_android_apps_revenue_type', $searchDeveloperAndroidAppsRevenueType);
                } else if($searchDeveloperAndroidAppsRevenueType === 'all'){
                    session()->remove('session_developer_android_apps_revenue_type');
                }
                $sessionDeveloperAndroidAppsRevenueType = session()->get('session_developer_android_apps_revenue_type');
                
                $searchDeveloperAndroidAppsStatus = $this->request->getPost('search_developer_android_apps_status');
                if(in_array($searchDeveloperAndroidAppsStatus, ['draft', 'development', 'publish', 'unpublish', 'suspended'], true)){
                    session()->set('session_developer_android_apps_status', $searchDeveloperAndroidAppsStatus);
                } else if($searchDeveloperAndroidAppsStatus === 'all'){
                    session()->remove('session_developer_android_apps_status');
                }
                $sessionDeveloperAndroidAppsStatus = session()->get('session_developer_android_apps_status');
                
                $conditions = [
                    'search_developer_android_apps' => $sessionDeveloperAndroidApps,
                    'search_developer_android_apps_revenue_type' => $sessionDeveloperAndroidAppsRevenueType,
                    'search_developer_android_apps_status' => $sessionDeveloperAndroidAppsStatus,
                ];
                
                $data['infoDeveloper'] = $androidDeveloperModel->getData($developerID);
                $data['getDeveloperAndroidApps'] = $androidAppsModel->getDeveloperAndroidAppsData($conditions, $developerID);
                $getDeveloperAndroidApps = $androidAppsModel->getDeveloperAndroidAppsData($conditions, $developerID);
                
                if($data['getDeveloperAndroidApps'] != null){
                    $data['getDeveloperAndroidApps'] = [];
                    
                    foreach($getDeveloperAndroidApps as $appRow){
                        $appID = $appRow['app_id'];
                        
                        $appLastROI = $androidRoiModel->getLastRoiData($appID);
                        $appWeeklyROI = $androidRoiModel->getWeeklyRoiData($appID, $todayDate, $previousDate);
                  
            			 $appData = [
                            'app_id' => $appRow['app_id'],
                            'concept_id' => $appRow['concept_id'],
                            'developer_id' => $appRow['developer_id'],
                            'app_code' => $appRow['app_code'],
                            'app_name' => $appRow['app_name'],
                            'app_package' => $appRow['app_package'],
                            'app_logo' => $appRow['app_logo'],
                            'app_developer' => $appRow['app_developer'],
                            'app_website' => $appRow['app_website'],
                            'app_google' => $appRow['app_google'],
                            'app_facebook' => $appRow['app_facebook'],
                            'app_email' => $appRow['app_email'],
                            'app_store' => $appRow['app_store'],
                            'app_privacy' => $appRow['app_privacy'],
                            'app_terms' => $appRow['app_terms'],
                            'app_support' => $appRow['app_support'],
                            'app_download' => $appRow['app_download'],
                            'app_release' => $appRow['app_release'],
                            'app_status' => $appRow['app_status'],
                        ];

                        if($appLastROI){
                            $weeklyInvest = 0;
                            $weeklyIncome = 0;
                        
                            foreach($appWeeklyROI as $roiRow){
                                $weeklyInvest += $roiRow['app_in'];
                                $weeklyIncome += $roiRow['app_out'];
                            }
                        
                            $finalWeeklyROI = ($weeklyInvest != 0) ? round($weeklyIncome * 100 / $weeklyInvest - 100) : 0;
                            $appData['app_weekly_in'] = $weeklyInvest; 
                            $appData['app_weekly_out'] = $weeklyIncome;
                            $appData['app_today_roi'] = $appLastROI['app_roi'] ?? null;
                            $appData['app_weekly_roi'] = $finalWeeklyROI;
                        } else {
                            $appData['app_weekly_in'] = null; 
                            $appData['app_weekly_out'] = null;
                            $appData['app_today_roi'] = null;
                            $appData['app_weekly_roi'] = null;
                        }
            	       $data['getDeveloperAndroidApps'][] = $appData;
                    }
                }
                return view('header')
                    . view('developer/developer_info', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function developerEdit($developerID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $developerID = urlDecodes($developerID);
            if(ctype_digit($developerID)){
                $androidDeveloperModel = new AndroidDeveloperModel();
                $data['developerData'] = $androidDeveloperModel->getData($developerID);
                if($this->request->getMethod() === 'post'){
                    $s3Client = getConfig();
                    
                    $imageFrontKey = $data['developerData']['developer_identity_front_file'];
                    $newFrontImageKey = basename($imageFrontKey);
                    
                    $imageBackKey = $data['developerData']['developer_identity_back_file'];
                    $newBackImageKey = basename($imageBackKey);
                    
                    $frontFile = $this->request->getFile('developer_identity_front_file');
                    $backFile = $this->request->getFile('developer_identity_back_file');
                    
                    if(!empty($frontFile->getName()) and !empty($backFile->getName())){
                        $deleteFrontResult = $s3Client->deleteObject([
                            'Bucket' => BUCKET_NAME,
                            'Key'    => FRONT_FILE . $newFrontImageKey,
                        ]);
                        
                        $objectFrontName = $frontFile->getName();
                        $objectFrontTemp = $frontFile->getPathname();
                        $objectFrontPath = FRONT_FILE;
                        $dataFrontResponse = newBucketObject($objectFrontName, $objectFrontTemp, $objectFrontPath);
                        
                        $deleteBackResult = $s3Client->deleteObject([
                            'Bucket' => BUCKET_NAME,
                            'Key'    => BACK_FILE . $newBackImageKey,
                        ]);
                        
                        $objectBackName = $backFile->getName();
                        $objectBackTemp = $backFile->getPathname();
                        $objectBackPath = BACK_FILE;
                        $dataBackResponse = newBucketObject($objectBackName, $objectBackTemp, $objectBackPath);

                        $editData = [
                            'developer_name' => $this->request->getPost('developer_name'),
                            'developer_email' => $this->request->getPost('developer_email'),
                            'developer_create_date' => $this->request->getPost('developer_create_date'),
                            'developer_device' => $this->request->getPost('developer_device'),
                            'developer_mac' => $this->request->getPost('developer_mac'),
                            'developer_mobile_number' => $this->request->getPost('developer_mobile_number'),
                            'developer_identity_name' => $this->request->getPost('developer_identity_name'),
                            'developer_identity_type' => $this->request->getPost('developer_identity_type'),
                            'developer_identity_front_file' => $dataFrontResponse,
                            'developer_identity_back_file' => $dataBackResponse,
                            'developer_payee_name' => $this->request->getPost('developer_payee_name'),
                            'developer_payee_bank' => $this->request->getPost('developer_payee_bank'),
                            'developer_payee_card' => $this->request->getPost('developer_payee_card'),
                            'developer_payee_type' => $this->request->getPost('developer_payee_type'),
                            'developer_status' => $this->request->getPost('developer_status'),
                        ];
                    } else if(!empty($frontFile->getName())){
                        $deleteFrontResult = $s3Client->deleteObject([
                            'Bucket' => BUCKET_NAME,
                            'Key'    => FRONT_FILE . $newFrontImageKey,
                        ]);
                        
                        $objectFrontName = $frontFile->getName();
                        $objectFrontTemp = $frontFile->getPathname();
                        $objectFrontPath = FRONT_FILE;
                        $dataFrontResponse = newBucketObject($objectFrontName, $objectFrontTemp, $objectFrontPath);
                        
                        $editData = [
                            'developer_name' => $this->request->getPost('developer_name'),
                            'developer_email' => $this->request->getPost('developer_email'),
                            'developer_create_date' => $this->request->getPost('developer_create_date'),
                            'developer_device' => $this->request->getPost('developer_device'),
                            'developer_mac' => $this->request->getPost('developer_mac'),
                            'developer_mobile_number' => $this->request->getPost('developer_mobile_number'),
                            'developer_identity_name' => $this->request->getPost('developer_identity_name'),
                            'developer_identity_type' => $this->request->getPost('developer_identity_type'),
                            'developer_identity_front_file' => $dataFrontResponse,
                            'developer_payee_name' => $this->request->getPost('developer_payee_name'),
                            'developer_payee_bank' => $this->request->getPost('developer_payee_bank'),
                            'developer_payee_card' => $this->request->getPost('developer_payee_card'),
                            'developer_payee_type' => $this->request->getPost('developer_payee_type'),
                            'developer_status' => $this->request->getPost('developer_status'),
                        ];
                    } else if(!empty($backFile->getName())){
                        $deleteBackResult = $s3Client->deleteObject([
                            'Bucket' => BUCKET_NAME,
                            'Key'    => BACK_FILE . $newBackImageKey,
                        ]);
                        
                        $objectBackName = $backFile->getName();
                        $objectBackTemp = $backFile->getPathname();
                        $objectBackPath = BACK_FILE;
                        $dataBackResponse = newBucketObject($objectBackName, $objectBackTemp, $objectBackPath);
                        
                        $editData = [
                            'developer_name' => $this->request->getPost('developer_name'),
                            'developer_email' => $this->request->getPost('developer_email'),
                            'developer_create_date' => $this->request->getPost('developer_create_date'),
                            'developer_device' => $this->request->getPost('developer_device'),
                            'developer_mac' => $this->request->getPost('developer_mac'),
                            'developer_mobile_number' => $this->request->getPost('developer_mobile_number'),
                            'developer_identity_name' => $this->request->getPost('developer_identity_name'),
                            'developer_identity_type' => $this->request->getPost('developer_identity_type'),
                            'developer_identity_back_file' => $dataBackResponse,
                            'developer_payee_name' => $this->request->getPost('developer_payee_name'),
                            'developer_payee_bank' => $this->request->getPost('developer_payee_bank'),
                            'developer_payee_card' => $this->request->getPost('developer_payee_card'),
                            'developer_payee_type' => $this->request->getPost('developer_payee_type'),
                            'developer_status' => $this->request->getPost('developer_status'),
                        ];
                    } else {
                        $editData = [
                            'developer_name' => $this->request->getPost('developer_name'),
                            'developer_email' => $this->request->getPost('developer_email'),
                            'developer_create_date' => $this->request->getPost('developer_create_date'),
                            'developer_device' => $this->request->getPost('developer_device'),
                            'developer_mac' => $this->request->getPost('developer_mac'),
                            'developer_mobile_number' => $this->request->getPost('developer_mobile_number'),
                            'developer_identity_name' => $this->request->getPost('developer_identity_name'),
                            'developer_identity_type' => $this->request->getPost('developer_identity_type'),
                            'developer_payee_name' => $this->request->getPost('developer_payee_name'),
                            'developer_payee_bank' => $this->request->getPost('developer_payee_bank'),
                            'developer_payee_card' => $this->request->getPost('developer_payee_card'),
                            'developer_payee_type' => $this->request->getPost('developer_payee_type'),
                            'developer_status' => $this->request->getPost('developer_status'),
                        ];
                    }
                    $editDataEntry = $androidDeveloperModel->editData($developerID, $editData);
                    if($editDataEntry){
                        $sessionAndroidDeveloperViewPreviousUrl = session()->get('session_android_developer_view_previous_url');
                        if(!empty($sessionAndroidDeveloperViewPreviousUrl)){
                            return redirect()->to($sessionAndroidDeveloperViewPreviousUrl);
                        } else {
                            return redirect()->to('view-developer');
                        }
                    }
                }
                return view('header')
                    . view('developer/developer_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function developerStatus($developerID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $developerID = urlDecodes($developerID);
            if(ctype_digit($developerID)){
                $androidDeveloperModel = new AndroidDeveloperModel();
                $androidAppsModel = new AndroidAppsModel();
                
                $developerData = $androidDeveloperModel->getData($developerID);
                $appsData = $androidAppsModel->viewAndroidDeveloperData($developerID);

                if(empty($appsData)){
                    if($developerData['developer_status'] == "publish"){
                        $editData = [
                            'developer_status' => "unpublish",
                        ];
                    } else {
                        $editData = [
                            'developer_status' => "publish",
                        ];
                    }
                    $editDataEntry = $androidDeveloperModel->editData($developerID, $editData);
                    if($editDataEntry){
                        $sessionAndroidDeveloperViewPreviousUrl = session()->get('session_android_developer_view_previous_url');
                        if(!empty($sessionAndroidDeveloperViewPreviousUrl)){
                            return redirect()->to($sessionAndroidDeveloperViewPreviousUrl);
                        } else {
                            return redirect()->to('view-developer');
                        }
                    }
                } else {
                    session()->set('session_android_developer_status_update', "You can't update the developer in database! Please update publish to unpublish");
                    $sessionAndroidDeveloperViewPreviousUrl = session()->get('session_android_developer_view_previous_url');
                    if(!empty($sessionAndroidDeveloperViewPreviousUrl)){
                        return redirect()->to($sessionAndroidDeveloperViewPreviousUrl);
                    } else {
                        return redirect()->to('view-developer');
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