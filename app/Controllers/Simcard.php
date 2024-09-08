<?php

namespace App\Controllers;

use App\Models\AndroidSimcardModel;

class Simcard extends BaseController
{
    public function simcardNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidSimcardModel = new AndroidSimcardModel();
            if($this->request->getMethod() === 'post'){
                $newData = [
                    'sim_owner' => $this->request->getPost('sim_owner'),
                    'sim_operator' => $this->request->getPost('sim_operator'),
                    'sim_number' => $this->request->getPost('sim_number'),
                    'sim_imei' => $this->request->getPost('sim_imei'),
                    'sim_type' => $this->request->getPost('sim_type'),
                    'sim_note' => $this->request->getPost('sim_note'),
                    'sim_status' => $this->request->getPost('sim_status'),
                ];
                $newDataEntry = $androidSimcardModel->insertData($newData);
                if($newDataEntry){
                    return redirect()->to('view-simcard');
                }
            } 
            return view('header')
            . view('simcard/simcard_new')
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function simcardView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidSimcardModel = new AndroidSimcardModel();
            
            session()->set('session_android_simcard_view_previous_url', current_url_with_query());

            if($this->request->getPost('reset_search')){
                session()->remove('session_android_simcard');
            }
            if($this->request->getPost('submit_search')){
                $searchAndroidSimcard = $this->request->getPost('search_android_simcard');
                session()->set('session_android_simcard', $searchAndroidSimcard);
            }
            $sessionAndroidSimcard = session()->get('session_android_simcard');
            
            $searchAndroidSimcardType = $this->request->getPost('search_android_simcard_type');
            if(in_array($searchAndroidSimcardType, ['prepaid','postpaid'], true)){
                session()->set('session_android_simcard_type', $searchAndroidSimcardType);
            } else if($searchAndroidSimcardType === 'all'){
                session()->remove('session_android_simcard_type');
            }
            $sessionAndroidSimcardType = session()->get('session_android_simcard_type');
            
            $searchAndroidSimcardStatus = $this->request->getPost('search_android_simcard_status');
            if(in_array($searchAndroidSimcardStatus, ['active','deactivate'], true)){
                session()->set('session_android_simcard_status', $searchAndroidSimcardStatus);
            } else if($searchAndroidSimcardStatus === 'all'){
                session()->remove('session_android_simcard_status');
            }
            $sessionAndroidSimcardStatus = session()->get('session_android_simcard_status');
            
            $conditions = [
                'search_android_simcard' => $sessionAndroidSimcard,
                'search_android_simcard_type' => $sessionAndroidSimcardType,
                'search_android_simcard_status' => $sessionAndroidSimcardStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 10;
            $data = [
                'viewSimcard' => $androidSimcardModel->viewSimcardData($conditions, $perPage),
                'pager' => $androidSimcardModel->pager,
                'simcardCount' => $androidSimcardModel->countSimcardData($conditions, $perPage)
            ];
            return view('header')
                . view('simcard/simcard_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function simcardEdit($simID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $simID = urlDecodes($simID);
            if(ctype_digit($simID)){
                $androidSimcardModel = new AndroidSimcardModel();
                $data['simcardData'] = $androidSimcardModel->getData($simID);
                if($this->request->getMethod() === 'post'){
                    $editData = [
                        'sim_owner' => $this->request->getPost('sim_owner'),
                        'sim_operator' => $this->request->getPost('sim_operator'),
                        'sim_number' => $this->request->getPost('sim_number'),
                        'sim_imei' => $this->request->getPost('sim_imei'),
                        'sim_type' => $this->request->getPost('sim_type'),
                        'sim_note' => $this->request->getPost('sim_note'),
                        'sim_status' => $this->request->getPost('sim_status'),
                    ];
                    $editDataEntry = $androidSimcardModel->editData($simID, $editData);
                    if($editDataEntry){
                        $sessionAndroidSimcardViewPreviousUrl = session()->get('session_android_simcard_view_previous_url');
                        if(!empty($sessionAndroidSimcardViewPreviousUrl)){
                            return redirect()->to($sessionAndroidSimcardViewPreviousUrl);
                        } else {
                            return redirect('view-simcard');
                        }
                    }
                }
                return view('header')
                    . view('simcard/simcard_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function simcardDelete($simID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $simID = urlDecodes($simID);
            if(ctype_digit($simID)){
                $androidSimcardModel = new AndroidSimcardModel();
                
                $resultDataEntry = $androidSimcardModel->deleteData($simID);
                if($resultDataEntry){
                    $sessionAndroidSimcardPreviousUrl = session()->get('session_android_simcard_previous_url');
                    if(!empty($sessionAndroidSimcardPreviousUrl)){
                        return redirect()->to($sessionAndroidSimcardPreviousUrl);
                    } else {
                        return redirect()->to('view-simcard');
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