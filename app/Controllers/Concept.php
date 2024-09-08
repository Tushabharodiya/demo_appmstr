<?php

namespace App\Controllers;

use App\Models\AndroidConceptModel;
use App\Models\AndroidAppsModel;
use App\Models\AndroidRoiModel;

class Concept extends BaseController
{
    public function conceptNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidConceptModel = new AndroidConceptModel();
            if($this->request->getMethod() === 'post'){
                $newData = [
                    'concept_name' => $this->request->getPost('concept_name'),
                    'concept_status' => $this->request->getPost('concept_status'),
                ];
                $newDataEntry = $androidConceptModel->insertData($newData);
                if($newDataEntry){
                    return redirect()->to('view-concept');
                }
            } 
            return view('header')
            . view('concept/concept_new')
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function conceptView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidConceptModel = new AndroidConceptModel();
            
            session()->set('session_android_concept_view_previous_url', current_url_with_query());
            
            if($this->request->getPost('reset_search')){
                session()->remove('session_android_concept');
            }
            if($this->request->getPost('submit_search')){
                $searchAndroidConcept = $this->request->getPost('search_android_concept');
                session()->set('session_android_concept', $searchAndroidConcept);
            }
            $sessionAndroidConcept = session()->get('session_android_concept');
            
            $searchAndroidConceptStatus = $this->request->getPost('search_android_concept_status');
            if(in_array($searchAndroidConceptStatus, ['publish', 'unpublish'], true)){
                session()->set('session_android_concept_status', $searchAndroidConceptStatus);
            } 
            $sessionAndroidConceptStatus = session()->get('session_android_concept_status');
            
            $conditions = [
                'search_android_concept' => $sessionAndroidConcept,
                'search_android_concept_status' => $sessionAndroidConceptStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 10;
            $data = [
                'viewConcept' => $androidConceptModel->viewConceptData($conditions, $perPage),
                'pager' => $androidConceptModel->pager,
                'conceptCount' => $androidConceptModel->countConceptData($conditions, $perPage)
            ];
            return view('header')
                . view('concept/concept_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function conceptInfo($conceptID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $conceptID = urlDecodes($conceptID);
            if(ctype_digit($conceptID)){
                date_default_timezone_set("Asia/Kolkata");
                $todayDate = date('Y-m-d');
                $previousDate = date('Y-m-d', strtotime(' -7 day'));
                    
                $androidAppsModel = new AndroidAppsModel();
                $androidRoiModel = new AndroidRoiModel();
                
                session()->set('session_android_application_view_previous_url', current_url_with_query());
                session()->set('session_android_application_previous_url', current_url_with_query());

                if($this->request->getPost('reset_search')){
                    session()->remove('session_concept_android_apps');
                }
                if($this->request->getPost('submit_search')){
                    $searchConceptAndroidApps = $this->request->getPost('search_concept_android_apps');
                    session()->set('session_concept_android_apps', $searchConceptAndroidApps);
                }
                $sessionConceptAndroidApps = session()->get('session_concept_android_apps');
                
                $searchConceptAndroidAppsRevenueType = $this->request->getPost('search_concept_android_apps_revenue_type');
                if(in_array($searchConceptAndroidAppsRevenueType, ['Paid', 'Organic', 'Both'], true)){
                    session()->set('session_concept_android_apps_revenue_type', $searchConceptAndroidAppsRevenueType);
                } else if($searchConceptAndroidAppsRevenueType === 'all'){
                    session()->remove('session_concept_android_apps_revenue_type');
                }
                $sessionConceptAndroidAppsRevenueType = session()->get('session_concept_android_apps_revenue_type');
                
                $searchConceptAndroidAppsStatus = $this->request->getPost('search_concept_android_apps_status');
                if(in_array($searchConceptAndroidAppsStatus, ['draft', 'development', 'publish', 'unpublish', 'suspended'], true)){
                    session()->set('session_concept_android_apps_status', $searchConceptAndroidAppsStatus);
                } else if($searchConceptAndroidAppsStatus === 'all'){
                    session()->remove('session_concept_android_apps_status');
                }
                $sessionConceptAndroidAppsStatus = session()->get('session_concept_android_apps_status');
                
                $conditions = [
                    'search_concept_android_apps' => $sessionConceptAndroidApps,
                    'search_concept_android_apps_revenue_type' => $sessionConceptAndroidAppsRevenueType,
                    'search_concept_android_apps_status' => $sessionConceptAndroidAppsStatus,
                ];
                
                $data['getConceptAndroidApps'] = $androidAppsModel->getConceptAndroidAppsData($conditions, $conceptID);
                $getConceptAndroidApps = $androidAppsModel->getConceptAndroidAppsData($conditions, $conceptID);
                
                if($data['getConceptAndroidApps'] != null){
                    $data['getConceptAndroidApps'] = [];
                    
                    foreach($getConceptAndroidApps as $appRow){
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
            	       $data['getConceptAndroidApps'][] = $appData;
                    }
                }
                return view('header')
                    . view('concept/concept_info', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function conceptEdit($conceptID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $conceptID = urlDecodes($conceptID);
            if(ctype_digit($conceptID)){
                $androidConceptModel = new AndroidConceptModel();
                $data['conceptData'] = $androidConceptModel->getData($conceptID);
                if($this->request->getMethod() === 'post'){
                    $editData = [
                        'concept_name' => $this->request->getPost('concept_name'),
                        'concept_status' => $this->request->getPost('concept_status'),
                    ];
                    $editDataEntry = $androidConceptModel->editData($conceptID, $editData);
                    if($editDataEntry){
                        $sessionAndroidConceptViewPreviousUrl = session()->get('session_android_concept_view_previous_url');
                        if(!empty($sessionAndroidConceptViewPreviousUrl)){
                            return redirect()->to($sessionAndroidConceptViewPreviousUrl);
                        } else {
                            return redirect()->to('view-concept');
                        }
                    }
                }
                return view('header')
                    . view('concept/concept_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function conceptStatus($conceptID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $conceptID = urlDecodes($conceptID);
            if(ctype_digit($conceptID)){
                $androidConceptModel = new AndroidConceptModel();
                $androidAppsModel = new AndroidAppsModel();
                
                $conceptData = $androidConceptModel->getData($conceptID);
                $appsData = $androidAppsModel->viewAndroidConceptData($conceptID);

                if(empty($appsData)){
                    if($conceptData['concept_status'] == "publish"){
                        $editData = [
                            'concept_status' => "unpublish",
                        ];
                    } else {
                        $editData = [
                            'concept_status' => "publish",
                        ];
                    }
                    $editDataEntry = $androidConceptModel->editData($conceptID, $editData);
                    if($editDataEntry){
                        $sessionAndroidConceptViewPreviousUrl = session()->get('session_android_concept_view_previous_url');
                        if(!empty($sessionAndroidConceptViewPreviousUrl)){
                            return redirect()->to($sessionAndroidConceptViewPreviousUrl);
                        } else {
                            return redirect()->to('view-concept');
                        }
                    }
                } else {
                    session()->set('session_android_concept_status_update', "You can't update the concept in database! Please update publish to unpublish");
                    $sessionAndroidConceptViewPreviousUrl = session()->get('session_android_concept_view_previous_url');
                    if(!empty($sessionAndroidConceptViewPreviousUrl)){
                        return redirect()->to($sessionAndroidConceptViewPreviousUrl);
                    } else {
                        return redirect()->to('view-concept');
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