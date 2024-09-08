<?php

namespace App\Controllers;

use App\Models\AndroidAppsModel;
use App\Models\AndroidVersionModel;
use App\Models\AndroidBannerModel;
use App\Models\AndroidDeveloperModel;
use App\Models\AccountGmailModel;
use App\Models\AccountFacebookModel;
use App\Models\AndroidRoiModel;

class Dashboard extends BaseController
{
    public function index(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidAppsModel = new AndroidAppsModel();
            $androidVersionModel = new AndroidVersionModel();
            $androidBannerModel = new AndroidBannerModel();
            $androidDeveloperModel = new AndroidDeveloperModel();
            $accountGmailModel = new AccountGmailModel();
            $accountFacebookModel = new AccountFacebookModel();
            $androidRoiModel = new AndroidRoiModel();
            
            session()->set('session_android_application_view_previous_url', current_url_with_query());
            session()->set('session_android_application_previous_url', current_url_with_query());
            
            $data['publishAppCount'] = $androidAppsModel->countData('(app_status="publish")');
            $data['developmentAppCount'] = $androidAppsModel->countData('(app_status="development")');
            $data['versionCount'] = $androidVersionModel->countData('(version_status="true")');
            $data['bannerCount'] = $androidBannerModel->countData('(banner_status="true")');
            
            $data['liveDeveloperCount'] = $androidDeveloperModel->countData('(developer_status="publish")');
            $data['suspendedDeveloperCount'] = $androidDeveloperModel->countData('(developer_status="unpublish")');
            
            $data['gmailStatusCount'] = $accountGmailModel->countData('(account_status="publish")');
            $data['facebookStatusCount'] = $accountFacebookModel->countData('(account_status="publish")');
            
            $appsData = $androidAppsModel->getDashboardAppsData();
            if($appsData != null){
                $currentWeekInvest = 0; $currentWeekIncome = 0;
	            $lastWeekInvest = 0; $lastWeekIncome = 0;
	            $currentMonthInvest = 0; $currentMonthIncome = 0;
	            $lastMonthInvest = 0; $lastMonthIncome = 0;
	            
	            foreach($appsData as $appRow){
	                $appID = $appRow['app_id'];
	                $appCurrentWeekROI = $androidRoiModel->getIncomeDataCurrentWeek($appID);
	                $appLastWeekROI = $androidRoiModel->getIncomeDataLastWeek($appID);
	                $appCurrentMonthROI = $androidRoiModel->getIncomeDataCurrentMonth($appID);
	                $appLastMonthROI = $androidRoiModel->getIncomeDataLastMonth($appID);

	                if($appCurrentWeekROI){
        	            foreach($appCurrentWeekROI as $appCurrentWeekRow){
                            $currentWeekInvest += $appCurrentWeekRow['app_in'];
                            $currentWeekIncome += $appCurrentWeekRow['app_out'];
                	    }
                	    $currentWeekInvest = $currentWeekInvest; 
        	            $currentWeekIncome = $currentWeekIncome;
			        }
			        
			        if($appLastWeekROI){
        	            foreach($appLastWeekROI as $roiMonthlyRow){
                            $lastWeekInvest += $roiMonthlyRow['app_in'];
                            $lastWeekIncome += $roiMonthlyRow['app_out'];
                	    }
                	    $lastWeekInvest = $lastWeekInvest; 
        	            $lastWeekIncome = $lastWeekIncome;
			        }
			        
			        if($appCurrentMonthROI){
        	            foreach($appCurrentMonthROI as $appCurrentMonthRow){
                            $currentMonthInvest += $appCurrentMonthRow['app_in'];
                            $currentMonthIncome += $appCurrentMonthRow['app_out'];
                	    }
                	    $currentMonthInvest = $currentMonthInvest; 
        	            $currentMonthIncome = $currentMonthIncome;
			        }
			        
			        if($appLastMonthROI){
        	            foreach($appLastMonthROI as $appLastMonthRow){
                            $lastMonthInvest += $appLastMonthRow['app_in'];
                            $lastMonthIncome += $appLastMonthRow['app_out'];
                	    }
                	    $lastMonthInvest = $lastMonthInvest; 
        	            $lastMonthIncome = $lastMonthIncome;
			        }
	            }
	            
	            $current_week_date_start = strtotime('last Sunday');
                $current_week_date_end = strtotime('next Sunday');
                $current_week_week_start = date('d-m-Y', $current_week_date_start);
                $current_week_week_end = date('d-m-Y', $current_week_date_end);
                $data['current_week_time'] = $current_week_week_start.' to '.$current_week_week_end;
                if($currentWeekInvest != 0 && $currentWeekIncome != 0){
                    $data['current_week_in'] = $currentWeekInvest;
			        $data['current_week_out'] = $currentWeekIncome;
			        $data['current_week_profit'] = $currentWeekIncome - $currentWeekInvest;
			        $data['current_week_roi'] = round($currentWeekIncome * 100 / $currentWeekInvest - 100);
                } else {
                    $data['current_week_in'] = 0;
			        $data['current_week_out'] = 0;
			        $data['current_week_profit'] = 0;
			        $data['current_week_roi'] = 0;
                }
                
                $last_week_previous_week = strtotime("-1 week +1 day");
                $last_week_week_start = strtotime("last sunday midnight", $last_week_previous_week);
                $last_week_week_end = strtotime("next saturday", $last_week_week_start);
                $last_week_week_start = date("d-m-Y", $last_week_week_start);
                $last_week_week_end = date("d-m-Y", $last_week_week_end);
                $data['last_week_time'] = $last_week_week_start.' to '.$last_week_week_end;
                if($lastWeekInvest != 0 && $lastWeekIncome != 0){
            	    $data['last_week_in'] = $lastWeekInvest;
			        $data['last_week_out'] = $lastWeekIncome;
			        $data['last_week_profit'] = $lastWeekIncome - $lastWeekInvest;
			        $data['last_week_roi'] = round($lastWeekIncome * 100 / $lastWeekInvest - 100);
                } else {
                    $data['last_week_in'] = 0;
			        $data['last_week_out'] = 0;
			        $data['last_week_profit'] = 0;
                    $data['last_week_roi'] = 0;
                }
                
                $current_month = date('M-Y');
		        $data['current_month_time'] = $current_month;
		        if($currentMonthInvest != 0 && $currentMonthIncome != 0){
			        $data['current_month_in'] = $currentMonthInvest;
			        $data['current_month_out'] = $currentMonthIncome;
			        $data['current_month_profit'] = $currentMonthIncome - $currentMonthInvest;
			        $data['current_month_roi'] = round($currentMonthIncome * 100 / $currentMonthInvest - 100);
		        } else {
		            $data['current_month_in'] = 0;
			        $data['current_month_out'] = 0;
			        $data['current_month_profit'] = 0;
		            $data['current_month_roi'] = 0;
		        }
		        
		        $last_month = date("M-Y", strtotime("previous month"));
		        $data['last_month_time'] = $last_month;
		        if($lastMonthInvest != 0 && $lastMonthIncome != 0){
            	    $data['last_month_in'] = $lastMonthInvest;
			        $data['last_month_out'] = $lastMonthIncome;
			        $data['last_month_profit'] = $lastMonthIncome - $lastMonthInvest;
			        $data['last_month_roi'] = round($lastMonthIncome * 100 / $lastMonthInvest - 100);
		        } else {
		            $data['last_month_in'] = 0;
			        $data['last_month_out'] = 0;
			        $data['last_month_profit'] = 0;
		            $data['last_month_roi'] = 0;
		        }
            }
            
            $data['viewAllTopApps'] = $androidRoiModel->getAllTopApps();
            $data['viewAllDownApps'] = $androidRoiModel->getAllDownApps();
                    
            return view('header')
                . view('index', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function theme(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $currentThemeMode = session('theme_mode');
            $newThemeMode = ($currentThemeMode == "light") ? "dark" : "light";
            session()->set('theme_mode', $newThemeMode);
            return redirect()->to('dashboard');
        } else {
            return redirect()->to('logout');
        }
    }
}
