<?php

namespace App\Controllers;

use App\Models\AccountGmailModel;

class Gmail extends BaseController
{
    public function gmailNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountGmailModel = new AccountGmailModel();
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
                $newDataEntry = $accountGmailModel->insertData($newData);
                if($newDataEntry){
                    return redirect()->to('view-gmail');
                }
            } 
            return view('header')
            . view('gmail/gmail_new')
            . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function gmailView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountGmailModel = new AccountGmailModel();
            
            session()->set('session_account_gmail_view_previous_url', current_url_with_query());
            
            if($this->request->getPost('reset_search')){
                session()->remove('session_account_gmail');
            }
            if($this->request->getPost('submit_search')){
                $searchAccountGmail = $this->request->getPost('search_account_gmail');
                session()->set('session_account_gmail', $searchAccountGmail);
            }
            $sessionAccountGmail = session()->get('session_account_gmail');
            
            $searchAccountGmailStatus = $this->request->getPost('search_account_gmail_status');
            if(in_array($searchAccountGmailStatus, ['publish', 'unpublish'], true)){
                session()->set('session_account_gmail_status', $searchAccountGmailStatus);
            } 
            $sessionAccountGmailStatus = session()->get('session_account_gmail_status');
            
            $conditions = [
                'search_account_gmail' => $sessionAccountGmail,
                'search_account_gmail_status' => $sessionAccountGmailStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 10;
            $data = [
                'viewGmail' => $accountGmailModel->viewGmailData($conditions, $perPage),
                'pager' => $accountGmailModel->pager,
                'gmailCount' => $accountGmailModel->countGmailData($conditions, $perPage)
            ];
            return view('header')
                . view('gmail/gmail_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function gmailInfo($accountID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountID = urlDecodes($accountID);
            if(ctype_digit($accountID)){
                $accountGmailModel = new AccountGmailModel();
                $data['infoGmail'] = $accountGmailModel->getData($accountID);
                return view('header')
                    . view('gmail/gmail_info', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function gmailEdit($accountID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountID = urlDecodes($accountID);
            if(ctype_digit($accountID)){
                $accountGmailModel = new AccountGmailModel();
                $data['gmailData'] = $accountGmailModel->getData($accountID);
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
                    $editDataEntry = $accountGmailModel->editData($accountID, $editData);
                    if($editDataEntry){
                        $sessionAccountGmailViewPreviousUrl = session()->get('session_account_gmail_view_previous_url');
                        if(!empty($sessionAccountGmailViewPreviousUrl)){
                            return redirect()->to($sessionAccountGmailViewPreviousUrl);
                        } else {
                            return redirect()->to('view-gmail');
                        }
                    }
                }
                return view('header')
                    . view('gmail/gmail_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }

    public function gmailStatus($accountID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $accountID = urlDecodes($accountID);
            if(ctype_digit($accountID)){
                $accountGmailModel = new AccountGmailModel();
                $gmailData = $accountGmailModel->getData($accountID);
                if($gmailData['account_status'] == "publish"){
                    $editData = [
                        'account_status' => "unpublish",
                    ];
                } else {
                    $editData = [
                        'account_status' => "publish",
                    ];
                }
                $editDataEntry = $accountGmailModel->editData($accountID, $editData);
                if($editDataEntry){
                    $sessionAccountGmailViewPreviousUrl = session()->get('session_account_gmail_view_previous_url');
                    if(!empty($sessionAccountGmailViewPreviousUrl)){
                        return redirect()->to($sessionAccountGmailViewPreviousUrl);
                    } else {
                        return redirect()->to('view-gmail');
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