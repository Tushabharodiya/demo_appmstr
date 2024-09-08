<?php

namespace App\Controllers;

use App\Models\AndroidFeedbackModel;
use App\Models\AndroidAppsModel;

class Feedback extends BaseController
{
    public function feedbackView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidFeedbackModel = new AndroidFeedbackModel();
            $androidAppsModel = new AndroidAppsModel();

            session()->set('session_android_feedback_view_previous_url', current_url_with_query());

            if($this->request->getPost('reset_search')){
                session()->remove('session_android_feedback');
            }
            if($this->request->getPost('submit_search')){
                $searchAndroidFeedback = $this->request->getPost('search_android_feedback');
                session()->set('session_android_feedback', $searchAndroidFeedback);
            }
            $sessionAndroidFeedback = session()->get('session_android_feedback');
            
            $searchAndroidFeedbackCode = $this->request->getPost('search_android_feedback_code');
            if(in_array($searchAndroidFeedbackCode, ['DEMO-01'], true)){
                session()->set('session_android_feedback_code', $searchAndroidFeedbackCode);
            } else if($searchAndroidFeedbackCode === 'all'){
                session()->remove('session_android_feedback_code');
            }
            $sessionAndroidFeedbackCode = session()->get('session_android_feedback_code');
            
            $searchAndroidFeedbackStatus = $this->request->getPost('search_android_feedback_status');
            if(in_array($searchAndroidFeedbackStatus, ['publish','unpublish'], true)){
                session()->set('session_android_feedback_status', $searchAndroidFeedbackStatus);
            } else if($searchAndroidFeedbackStatus === 'all'){
                session()->remove('session_android_feedback_status');
            }
            $sessionAndroidFeedbackStatus = session()->get('session_android_feedback_status');
            
            $conditions = [
                'search_android_feedback' => $sessionAndroidFeedback,
                'search_android_feedback_code' => $sessionAndroidFeedbackCode,
                'search_android_feedback_status' => $sessionAndroidFeedbackStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 10;
            $data = [
                'viewFeedback' => $androidFeedbackModel->viewFeedbackData($conditions, $perPage),
                'pager' => $androidFeedbackModel->pager,
                'feedbackCount' => $androidFeedbackModel->countFeedbackData($conditions, $perPage)
            ];
            
            $data['androidData'] = $androidAppsModel->viewData();
            return view('header')
                . view('feedback/feedback_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function feedbackStatus($feedbackID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $feedbackID = urlDecodes($feedbackID);
            if(ctype_digit($feedbackID)){
                $androidFeedbackModel = new AndroidFeedbackModel();
                $feedbackData = $androidFeedbackModel->getData($feedbackID);
                if($feedbackData['feedback_status'] == "publish"){
                    $editData = [
                        'feedback_status' => "unpublish",
                    ];
                } else {
                    $editData = [
                        'feedback_status' => "publish",
                    ];
                }
                $editDataEntry = $androidFeedbackModel->editData($feedbackID, $editData);
                if($editDataEntry){
                    $sessionAndroidFeedbackViewPreviousUrl = session()->get('session_android_feedback_view_previous_url');
                    if(!empty($sessionAndroidFeedbackViewPreviousUrl)){
                        return redirect()->to($sessionAndroidFeedbackViewPreviousUrl);
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
    
    public function feedbackDelete($feedbackID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $feedbackID = urlDecodes($feedbackID);
            if(ctype_digit($feedbackID)){
                $androidFeedbackModel = new AndroidFeedbackModel();
                
                $resultDataEntry = $androidFeedbackModel->deleteData($feedbackID);
                if($resultDataEntry){
                    $sessionAndroidFeedbackViewPreviousUrl = session()->get('session_android_feedback_view_previous_url');
                    if(!empty($sessionAndroidFeedbackViewPreviousUrl)){
                        return redirect()->to($sessionAndroidFeedbackViewPreviousUrl);
                    } else {
                        return redirect()->to('view-feedback');
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