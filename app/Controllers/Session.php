<?php

namespace App\Controllers;

class Session extends BaseController
{
    public function removeSession(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            // Search By 
            session()->remove('session_android_apps');
            session()->remove('session_android_apps_revenue_type');
            session()->remove('session_android_apps_status');
            
            session()->remove('session_android_roi');
            session()->remove('session_android_roi_status');
            session()->remove('session_android_roi_start_date');
            session()->remove('session_android_roi_end_date');
            
            session()->remove('session_android_more_roi');
            session()->remove('session_android_more_roi_status');
            session()->remove('session_android_more_roi_start_date');
            session()->remove('session_android_more_roi_end_date');
            
            session()->remove('session_android_developer');
            session()->remove('session_android_developer_status');
            
            session()->remove('session_developer_android_apps');
            session()->remove('session_developer_android_apps_revenue_type');
            session()->remove('session_developer_android_apps_status');
            
            session()->remove('session_android_concept');
            session()->remove('session_android_concept_status');
            
            session()->remove('session_concept_android_apps');
            session()->remove('session_concept_android_apps_revenue_type');
            session()->remove('session_concept_android_apps_status');
            
            session()->remove('session_android_banner');
            session()->remove('session_android_banner_type');
            session()->remove('session_android_banner_status');
            
            session()->remove('session_android_device');
            session()->remove('session_android_device_status');
            
            session()->remove('session_android_ip');
            session()->remove('session_android_ip_status');
            
            session()->remove('session_account_gmail');
            session()->remove('session_account_gmail_status');
            
            session()->remove('session_account_facebook');
            session()->remove('session_account_facebook_status');
            
            session()->remove('session_android_simcard');
            session()->remove('session_android_simcard_type');
            session()->remove('session_android_simcard_status');
            
            session()->remove('session_android_feedback');
            session()->remove('session_android_feedback_code');
            session()->remove('session_android_feedback_status');

            // Redirect With Back Url
            session()->remove('session_android_application_view_previous_url');
            session()->remove('session_android_application_previous_url');
            
            session()->remove('session_android_roi_view_previous_url');
            session()->remove('session_android_roi_previous_url');
            
            session()->remove('session_android_more_roi_previous_url');
            
            session()->remove('session_android_developer_view_previous_url');
            
            session()->remove('session_android_concept_view_previous_url');
            
            session()->remove('session_android_banner_view_previous_url');
            
            session()->remove('session_android_common_json_view_previous_url');
            
            session()->remove('session_android_device_view_previous_url');
            
            session()->remove('session_account_gmail_view_previous_url');
            
            session()->remove('session_account_facebook_view_previous_url');
            
            session()->remove('session_android_simcard_view_previous_url');
            
            return redirect()->to('dashboard');
        } else {
            return redirect()->to('logout');
        }
    }
}