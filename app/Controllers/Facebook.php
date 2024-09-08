<?php

namespace App\Controllers;

use App\Models\AccountFacebookModel;

class Facebook extends BaseController
{
    public function facebookNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountFacebookModel = new AccountFacebookModel();
            if($this->request->getMethod() === 'post'){
                $newData = [
                    'account_name' => $this->request->getPost('account_name'),
                    'account_email' => $this->request->getPost('account_email'),
                    'account_mobile_number' => $this->request->getPost('account_mobile_number'),
                    'account_birth_date' => $this->request->getPost('account_birth_date'),
                    'account_create_date' => $this->request->getPost('account_create_date'),
                    'account_note' => $this->request->getPost('account_note'),
                    'account_gender' => $this->request->getPost('account_gender'),
                    'account_status' => $this->request->getPost('account_status'),
                ];
                $newDataEntry = $accountFacebookModel->insertData($newData);
                if($newDataEntry){
                    return redirect()->to('view-facebook');
                }
            } 
            return view('header')
            . view('facebook/facebook_new')
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function facebookView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountFacebookModel = new AccountFacebookModel();
            
            session()->set('session_account_facebook_view_previous_url', current_url_with_query());

            if($this->request->getPost('reset_search')){
                session()->remove('session_account_facebook');
            }
            if($this->request->getPost('submit_search')){
                $searchAccountFacebook = $this->request->getPost('search_account_facebook');
                session()->set('session_account_facebook', $searchAccountFacebook);
            }
            $sessionAccountFacebook = session()->get('session_account_facebook');
            
            $searchAccountFacebookStatus = $this->request->getPost('search_account_facebook_status');
            if(in_array($searchAccountFacebookStatus, ['publish','unpublish'], true)){
                session()->set('session_account_facebook_status', $searchAccountFacebookStatus);
            } 
            $sessionAccountFacebookStatus = session()->get('session_account_facebook_status');
            
            $conditions = [
                'search_account_facebook' => $sessionAccountFacebook,
                'search_account_facebook_status' => $sessionAccountFacebookStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 10;
            $data = [
                'viewFacebook' => $accountFacebookModel->viewFacebookData($conditions, $perPage),
                'pager' => $accountFacebookModel->pager,
                'facebookCount' => $accountFacebookModel->countFacebookData($conditions, $perPage)
            ];
            return view('header')
                . view('facebook/facebook_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function facebookInfo($accountID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountID = urlDecodes($accountID);
            if(ctype_digit($accountID)){
                $accountFacebookModel = new AccountFacebookModel();
                $data['infoFacebook'] = $accountFacebookModel->getData($accountID);
                return view('header')
                    . view('facebook/facebook_info', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function facebookEdit($accountID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountID = urlDecodes($accountID);
            if(ctype_digit($accountID)){
                $accountFacebookModel = new AccountFacebookModel();
                $data['facebookData'] = $accountFacebookModel->getData($accountID);
                if($this->request->getMethod() === 'post'){
                    $editData = [
                        'account_name' => $this->request->getPost('account_name'),
                        'account_email' => $this->request->getPost('account_email'),
                        'account_mobile_number' => $this->request->getPost('account_mobile_number'),
                        'account_birth_date' => $this->request->getPost('account_birth_date'),
                        'account_create_date' => $this->request->getPost('account_create_date'),
                        'account_note' => $this->request->getPost('account_note'),
                        'account_gender' => $this->request->getPost('account_gender'),
                        'account_status' => $this->request->getPost('account_status'),
                    ];
                    $editDataEntry = $accountFacebookModel->editData($accountID, $editData);
                    if($editDataEntry){
                        $sessionAccountFacebookViewPreviousUrl = session()->get('session_account_facebook_view_previous_url');
                        if(!empty($sessionAccountFacebookViewPreviousUrl)){
                            return redirect()->to($sessionAccountFacebookViewPreviousUrl);
                        } else {
                            return redirect('view-facebook');
                        }
                    }
                }
                return view('header')
                    . view('facebook/facebook_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }

    public function facebookStatus($accountID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountID = urlDecodes($accountID);
            if(ctype_digit($accountID)){
                $accountFacebookModel = new AccountFacebookModel();
                $facebookData = $accountFacebookModel->getData($accountID);
                if($facebookData['account_status'] == "publish"){
                    $editData = [
                        'account_status' => "unpublish",
                    ];
                } else {
                    $editData = [
                        'account_status' => "publish",
                    ];
                }
                $editDataEntry = $accountFacebookModel->editData($accountID, $editData);
                if($editDataEntry){
                    $sessionAccountFacebookViewPreviousUrl = session()->get('session_account_facebook_view_previous_url');
                    if(!empty($sessionAccountFacebookViewPreviousUrl)){
                        return redirect()->to($sessionAccountFacebookViewPreviousUrl);
                    } else {
                        return redirect('view-facebook');
                    }
                }
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function facebookViewData(){
        $accountFacebookModel = new AccountFacebookModel();
        
        $response = [];
        $response['data'] = [];

        $apiAuth = $this->request->getPost('api_auth');
        $apiValidated = isApiValidation($this->request->getPost('api_auth'));

        $whereArray = [
            'account_status' => 'publish',
        ];

        if($apiValidated){
            $conditions['returnType'] = 'count';

            $pager = \Config\Services::pager();

            $page = $this->request->uri->getSegment(2);
            $offset = !$page ? 0 : $page;
            
            $conditions['returnType'] = '';
            $conditions['start'] = $offset;
            $conditions['limit'] = 5;

            $facebook = $accountFacebookModel->viewedFacebookData($whereArray, $conditions, 'account_facebook');

            if($facebook !== null){
                foreach($facebook as $row){
                    $facebookData = [
                        'account_id' => (int) $row['account_id'],
                        'account_name' => $row['account_name'],
                        'account_email' => $row['account_email'],
                        'account_mobile_number' => $row['account_mobile_number'],
                        'account_birth_date' => $row['account_birth_date'],
                        'account_create_date' => $row['account_create_date'],
                        'account_note' => $row['account_note'],
                        'account_gender' => $row['account_gender'],
                        'account_status' => $row['account_status'],
                    ];

                    $response['data'][] = $facebookData;
                }

                $response['message'] = !empty($response['data']) ? 'success' : 'permission denied';
            } else {
                $response['message'] = 'No data found';
            }
        } else {
            $response['message'] = 'permission denied';
        }

        return $this->response->setJSON($response);
    }
}