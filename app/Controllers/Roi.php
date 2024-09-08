<?php

namespace App\Controllers;

use App\Models\AndroidRoiModel;
use App\Models\AndroidAppsModel;

class Roi extends BaseController
{
    public function roiNew($appID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $appID = urlDecodes($appID);
            if(ctype_digit($appID)){
                $androidRoiModel = new AndroidRoiModel();
                $androidAppsModel = new AndroidAppsModel();
                
                $data['appData'] = $androidAppsModel->viewAppRoiData();
                $appCodeData = $androidAppsModel->getData($appID);
                $appData['data'] = [
                    'app_id' => $appID,
                    'app_code' => $appCodeData['app_code'],
                ];

                if($this->request->getMethod() === 'post'){
                    if($appData['data'] !== null){
                        $appID = $this->request->getPost('app_id');
                        $appDate = $this->request->getPost('app_date');
                        $appMonth = strtotime($appDate);
                        $checkAppByDate = $androidRoiModel->checkAndroidAppByDate($appID, $appDate);
                        $appIn = $this->request->getPost('app_in');
                        $appOut = $this->request->getPost('app_out');
                        $appMargin = $appOut - $appIn;
                        $roi = $appOut * 100 / $appIn;
                        $appRoi = $roi - 100;
                
                        if($checkAppByDate == null){
                            $newData = [
                                'app_id' => $this->request->getPost('app_id'),
                                'app_code' => $this->request->getPost('app_code'),
                                'app_in' => $appIn,
                                'app_out' => $appOut,
                                'app_margin' => $appMargin,
                                'app_roi' => round($appRoi, 2),
                                'app_date' => $this->request->getPost('app_date'),
                                'app_month' => date('m-Y', $appMonth),
                                'data_status' => $this->request->getPost('data_status'),
                            ];
                
                            $newDataEntry = $androidRoiModel->insertData($newData);
                            if($newDataEntry){
                                return redirect()->to('view-roi/'.urlEncodes($appID));
                            }
                        } else {
                            session()->set('session_android_roi_new_app_date', "App date $appDate is already exits in database!");
                	        return redirect()->to('new-roi/'.urlEncodes($appID));
                        }
                    } else {
                        session()->set('session_android_roi_new_application', "You can't insert roi in database! Please add");
                        return redirect()->to('new-roi/'.urlEncodes($appID));
                    }
                } 
                return view('header')
                    . view('roi/roi_new', $appData)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function roiView($appID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $appID = urlDecodes($appID);
            if(ctype_digit($appID)){
                $androidRoiModel = new AndroidRoiModel();
                
                session()->set('session_android_roi_view_previous_url', current_url_with_query());
                session()->set('session_android_roi_previous_url', current_url_with_query());
                
                if($this->request->getPost('reset_search')){
                    session()->remove('session_android_roi');
                }
                if($this->request->getPost('submit_search')){
                    $searchAndroidRoi = $this->request->getPost('search_android_roi');
                    session()->set('session_android_roi', $searchAndroidRoi);
                }
                $sessionAndroidRoi = session()->get('session_android_roi');
                
                $searchAndroidRoiStatus = $this->request->getPost('search_android_roi_status');
                if(in_array($searchAndroidRoiStatus, ['true', 'false'], true)){
                    session()->set('session_android_roi_status', $searchAndroidRoiStatus);
                } else if($searchAndroidRoiStatus === 'all'){
                    session()->remove('session_android_roi_status');
                }
                $sessionAndroidRoiStatus = session()->get('session_android_roi_status');
                
                if($this->request->getPost('reset_filter')){
                    session()->remove('session_android_roi_start_date');
                    session()->remove('session_android_roi_end_date');
                }
                if($this->request->getPost('submit_filter')){
                    $searchAndroidRoiStartDate = $this->request->getPost('search_android_roi_start_date');
                    session()->set('session_android_roi_start_date', $searchAndroidRoiStartDate);
                    
                    $searchAndroidRoiEndDate = $this->request->getPost('search_android_roi_end_date');
                    session()->set('session_android_roi_end_date', $searchAndroidRoiEndDate);
                }
                $sessionAndroidRoiStartDate = session()->get('session_android_roi_start_date');
                $sessionAndroidRoiEndDate = session()->get('session_android_roi_end_date');
                
                $conditions = [
                    'search_android_roi' => $sessionAndroidRoi,
                    'search_android_roi_status' => $sessionAndroidRoiStatus,
                    'search_android_roi_start_date' => $sessionAndroidRoiStartDate,
                    'search_android_roi_end_date' => $sessionAndroidRoiEndDate,
                ];
                
                $pager = \Config\Services::pager();
                $perPage = 10;
                $data = [
                    'viewRoi' => $androidRoiModel->viewRoiData($conditions, $appID, $perPage),
                    'pager' => $androidRoiModel->pager,
                    'roiCount' => $androidRoiModel->countRoiData($conditions, $appID, $perPage)
                ];
                
                $viewRoi = $androidRoiModel->viewRoiData($conditions, $appID, $perPage);
                $data['viewRoi'] = [];
                $data['totalIn'] = 0;
                $data['totalOut'] = 0;
                $data['totalProfit'] = 0;
                $data['totalRoi'] = 0;
                
                $data['appID'] = $appID;
        
                if(!empty($viewRoi)){
                    $totalInvest = 0;
                    $totalIncome = 0;
        
                    foreach($viewRoi as $row){
                        $dataArray = [
                            'data_id' => $row['data_id'],
                            'app_id' => $row['app_id'],
                            'app_code' => $row['app_code'],
                            'app_in' => $row['app_in'],
                            'app_out' => $row['app_out'],
                            'app_margin' => $row['app_margin'],
                            'app_roi' => $row['app_roi'],
                            'app_date' => $row['app_date'],
                            'data_status' => $row['data_status'],
                        ];
        
                        $data['viewRoi'][] = $dataArray;
        
                        $totalInvest += $row['app_in'];
                        $totalIncome += $row['app_out'];
                    }
        
                    $data['totalIn'] = $totalInvest;
                    $data['totalOut'] = $totalIncome;
                    $data['totalProfit'] = $totalIncome - $totalInvest;
                    $data['totalRoi'] = round($totalIncome * 100 / $totalInvest - 100);
                }
                return view('header')
                    . view('roi/roi_view', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }    
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function moreRoi($appID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $appID = urlDecodes($appID);
            if(ctype_digit($appID)){
                $androidRoiModel = new AndroidRoiModel();
                
                session()->set('session_android_more_roi_previous_url', current_url_with_query());
                session()->set('session_android_roi_previous_url', current_url_with_query());
                
                if($this->request->getPost('reset_search')){
                    session()->remove('session_android_more_roi');
                }
                if($this->request->getPost('submit_search')){
                    $searchAndroidMoreRoi = $this->request->getPost('search_android_more_roi');
                    session()->set('session_android_more_roi', $searchAndroidMoreRoi);
                }
                $sessionAndroidMoreRoi = session()->get('session_android_more_roi');
                
                $searchAndroidMoreRoiStatus = $this->request->getPost('search_android_more_roi_status');
                if(in_array($searchAndroidMoreRoiStatus, ['true', 'false'], true)){
                    session()->set('session_android_more_roi_status', $searchAndroidMoreRoiStatus);
                } else if($searchAndroidMoreRoiStatus === 'all'){
                    session()->remove('session_android_more_roi_status');
                }
                $sessionAndroidMoreRoiStatus = session()->get('session_android_more_roi_status');
                
                if($this->request->getPost('reset_filter')){
                    session()->remove('session_android_more_roi_start_date');
                    session()->remove('session_android_more_roi_end_date');
                }
                if($this->request->getPost('submit_filter')){
                    $searchAndroidMoreRoiStartDate = $this->request->getPost('search_android_more_roi_start_date');
                    session()->set('session_android_more_roi_start_date', $searchAndroidMoreRoiStartDate);
                    
                    $searchAndroidMoreRoiEndDate = $this->request->getPost('search_android_more_roi_end_date');
                    session()->set('session_android_more_roi_end_date', $searchAndroidMoreRoiEndDate);
                }
                $sessionAndroidMoreRoiStartDate = session()->get('session_android_more_roi_start_date');
                $sessionAndroidMoreRoiEndDate = session()->get('session_android_more_roi_end_date');
                
                $conditions = [
                    'search_android_more_roi' => $sessionAndroidMoreRoi,
                    'search_android_more_roi_status' => $sessionAndroidMoreRoiStatus,
                    'search_android_more_roi_start_date' => $sessionAndroidMoreRoiStartDate,
                    'search_android_more_roi_end_date' => $sessionAndroidMoreRoiEndDate,
                ];
                
                $pager = \Config\Services::pager();
                $perPage = 10;
                $data = [
                    'moreRoi' => $androidRoiModel->moreRoiData($conditions, $appID, $perPage),
                    'pager' => $androidRoiModel->pager,
                    'moreRoiCount' => $androidRoiModel->countMoreRoiData($conditions, $appID, $perPage)
                ];
                
                $moreRoi = $androidRoiModel->moreRoiData($conditions, $appID, $perPage);
                $data['moreRoi'] = [];
                $data['totalIn'] = 0;
                $data['totalOut'] = 0;
                $data['totalProfit'] = 0;
                $data['totalRoi'] = 0;
                
                $data['appID'] = $appID;
                
                if(!empty($moreRoi)){
                    $totalInvest = 0;
                    $totalIncome = 0;
        
                    foreach($moreRoi as $row){
                        $dataArray = [
                            'data_id' => $row['data_id'],
                            'app_id' => $row['app_id'],
                            'app_code' => $row['app_code'],
                            'app_in' => $row['app_in'],
                            'app_out' => $row['app_out'],
                            'app_margin' => $row['app_margin'],
                            'app_roi' => $row['app_roi'],
                            'app_date' => $row['app_date'],
                            'data_status' => $row['data_status'],
                        ];
        
                        $data['moreRoi'][] = $dataArray;
        
                        $totalInvest += $row['app_in'];
                        $totalIncome += $row['app_out'];
                    }
        
                    $data['totalIn'] = $totalInvest;
                    $data['totalOut'] = $totalIncome;
                    $data['totalProfit'] = $totalIncome - $totalInvest;
                    $data['totalRoi'] = round($totalIncome * 100 / $totalInvest - 100);
                }
                return view('header')
                    . view('roi/roi_more', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }    
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function roiEdit($dataID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $dataID = urlDecodes($dataID);
            if(ctype_digit($dataID)){
                $androidRoiModel = new AndroidRoiModel();
                
                $data['androidRoiData'] = $androidRoiModel->getData($dataID);
                $appID = $data['androidRoiData']['app_id'];
                
                if($this->request->getMethod() === 'post'){
                    $appIn = $this->request->getPost('app_in');
                    $appOut = $this->request->getPost('app_out');
                    $appDate = $this->request->getPost('app_date');
                    $appMargin = $appOut - $appIn;
                    $roi = $appOut * 100 / $appIn;
                    $appRoi = $roi - 100;
                    $appMonth = strtotime($appDate);
                    
                    if(empty($appDate)){
                        $editData = [
                            'app_in' => $appIn,
                            'app_out' => $appOut,
                            'app_margin' => $appMargin,
                            'app_roi' => round($appRoi, 2),
                            'data_status' => $this->request->getPost('data_status'),
                        ];
                    } else {
                        $editData = [
                            'app_in' => $appIn,
                            'app_out' => $appOut,
                            'app_date' => $appDate,
                            'app_margin' => $appMargin,
                            'app_roi' => round($appRoi, 2),
                            'app_month' => date('m-Y', $appMonth),
                            'data_status' => $this->request->getPost('data_status'),
                        ];
                    }
            
                    $editDataEntry = $androidRoiModel->editData($dataID, $editData);
                    if($editDataEntry){
                        $sessionAndroidRoiPreviousUrl = session()->get('session_android_roi_previous_url');
                        if(!empty($sessionAndroidRoiPreviousUrl)){
                            return redirect()->to($sessionAndroidRoiPreviousUrl);
                        } else {
                            return redirect()->to('view-roi/'.urlEncodes($appID));
                        }
                    }
                }
                return view('header')
                    . view('roi/roi_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }

    public function roiDelete($dataID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $dataID = urlDecodes($dataID);
            if(ctype_digit($dataID)){
                $androidRoiModel = new AndroidRoiModel();
                
                $data['androidRoiData'] = $androidRoiModel->getData($dataID);
                $appID = $data['androidRoiData']['app_id'];
                
                $resultDataEntry = $androidRoiModel->deleteData($dataID);
                if($resultDataEntry){
                    $sessionAndroidRoiPreviousUrl = session()->get('session_android_roi_previous_url');
                    if(!empty($sessionAndroidRoiPreviousUrl)){
                        return redirect()->to($sessionAndroidRoiPreviousUrl);
                    } else {
                        return redirect()->to('view-roi/'.urlEncodes($appID));
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