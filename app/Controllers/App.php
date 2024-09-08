<?php

namespace App\Controllers;

use App\Models\AndroidAppsModel;
use App\Models\AndroidDeveloperModel;
use App\Models\AndroidConceptModel;
use App\Models\AndroidCommonJsonModel;
use App\Models\AndroidAdModel;
use App\Models\AndroidVersionModel;
use App\Models\AndroidJsonModel;
use App\Models\AndroidPrivacyModel;
use App\Models\AndroidRoiModel;
use App\Models\AndroidSubscriptionModel;
use App\Models\AndroidBannerModel;

class App extends BaseController
{
    public function appNew(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidAppsModel = new AndroidAppsModel();
            $androidDeveloperModel = new AndroidDeveloperModel();
            $androidConceptModel = new AndroidConceptModel();
            $androidCommonJsonModel = new AndroidCommonJsonModel();
            $androidAdModel = new AndroidAdModel();
            $androidVersionModel = new AndroidVersionModel();
            $androidJsonModel = new AndroidJsonModel();
            $androidPrivacyModel = new AndroidPrivacyModel();
            
            $data['developerData'] = $androidDeveloperModel->viewData();
            $data['conceptData'] = $androidConceptModel->viewData();
            
            if($this->request->getMethod() === 'post'){
                $jsonData = $androidCommonJsonModel->getData(null);
                if($jsonData != null){
                    $appCode = $this->request->getPost('app_code');
                    $data['appCodeData'] = $androidAppsModel->checkAndroidApp($appCode);
                    if(empty($data['appCodeData'])){
                        date_default_timezone_set("Asia/Kolkata");
                        $validationRule = [
                            'app_logo' => [
                                'label' => 'Image File',
                                'rules' => [
                                    'uploaded[app_logo]',
                                    'is_image[app_logo]',
                                    'mime_in[app_logo,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                                ],
                            ],
                        ];
                        if(!$this->validate($validationRule)){
                            session()->set('session_android_application_new_app_logo', "Invalid file type.");
            	            return redirect()->to('new-app');
                        }
                        
                        $file = $this->request->getFile('app_logo');
                        if($file && $file->isValid() && !$file->hasMoved()){
                            $newName = date('Ymdhis') . '.' . $file->getClientExtension();
                            $file->move('public/uploads/logos/', $newName);
                            $appLogo = $newName;
                        } 
                        
                        $appData = [
                            'developer_id' => $this->request->getPost('developer_id'),
                            'concept_id' => $this->request->getPost('concept_id'),
                            'app_code' => $this->request->getPost('app_code'),
                            'app_name' => $this->request->getPost('app_name'),
                            'app_package' => $this->request->getPost('app_package'),
                            'app_logo' => $appLogo,
                            'app_developer' => $this->request->getPost('app_developer'),
                            'app_website' => $this->request->getPost('app_website'),
                            'app_google' => $this->request->getPost('app_google'),
                            'app_facebook' => $this->request->getPost('app_facebook'),
                            'app_email' => $this->request->getPost('app_email'),
                            'app_store' => $this->request->getPost('app_store'),
                            'app_privacy' => $this->request->getPost('app_privacy'),
                            'app_terms' => $this->request->getPost('app_terms'),
                            'app_support' => $this->request->getPost('app_support'),
                            'app_download' => 0,
                            'app_release' => $this->request->getPost('app_release'),
                            'app_revenue_type' => $this->request->getPost('app_revenue_type'),
                            'app_status' => $this->request->getPost('app_status'),
                        ];
                        $appDataEntry = $androidAppsModel->insertData($appData);
                        $androidAppData = $androidAppsModel->getData($appDataEntry);
                        $appID = $androidAppData['app_id'];
			            $updateUrl = $androidAppData['app_package'];
			            if($appDataEntry){
			                $bannerOne = implode("#", $this->request->getPost('banner_ads_one'));
                            $bannerAdsOne = str_replace("#@#", "@", $bannerOne);
                            $bannerTwo = implode("#", $this->request->getPost('banner_ads_two'));
                            $bannerAdsTwo = str_replace("#@#", "@", $bannerTwo);
                            $bannerThree = implode("#", $this->request->getPost('banner_ads_three'));
                            $bannerAdsThree = str_replace("#@#", "@", $bannerThree);
                            $bannerFour = implode("#", $this->request->getPost('banner_ads_four'));
                            $bannerAdsFour = str_replace("#@#", "@", $bannerFour);
                            $nativeOne = implode("#", $this->request->getPost('native_ads_one'));
                            $nativeAdsOne = str_replace("#@#", "@", $nativeOne);
                            $nativeTwo = implode("#", $this->request->getPost('native_ads_two'));
                            $nativeAdsTwo = str_replace("#@#", "@", $nativeTwo);
                            $nativeThree = implode("#", $this->request->getPost('native_ads_three'));
                            $nativeAdsThree = str_replace("#@#", "@", $nativeThree);
                            $nativeFour = implode("#", $this->request->getPost('native_ads_four'));
                            $nativeAdsFour = str_replace("#@#", "@", $nativeFour);
                            $interstitialOne = implode("#", $this->request->getPost('interstitial_ads_one'));
                            $interstitialAdsOne = str_replace("#@#", "@", $interstitialOne);
                            $interstitialTwo = implode("#", $this->request->getPost('interstitial_ads_two'));
                            $interstitialAdsTwo = str_replace("#@#", "@", $interstitialTwo);
                            $interstitialThree = implode("#", $this->request->getPost('interstitial_ads_three'));
                            $interstitialAdsThree = str_replace("#@#", "@", $interstitialThree);
                            $interstitialFour = implode("#", $this->request->getPost('interstitial_ads_four'));
                            $interstitialAdsFour = str_replace("#@#", "@", $interstitialFour);
                            $openOne = implode("#", $this->request->getPost('open_ads_one'));
                            $openAdsOne = str_replace("#@#", "@", $openOne);
                            $openTwo = implode("#", $this->request->getPost('open_ads_two'));
                            $openAdsTwo = str_replace("#@#", "@", $openTwo);
                            $rewardsOne = implode("#", $this->request->getPost('rewards_ads_one'));
                            $rewardsAdsOne = str_replace("#@#", "@", $rewardsOne);
                            $rewardsTwo = implode("#", $this->request->getPost('rewards_ads_two'));
                            $rewardsAdsTwo = str_replace("#@#", "@", $rewardsTwo);
                            
                            $adsData = [
                                'app_id' => $appID,
                                'banner_ads_one' => $bannerAdsOne,
                                'banner_ads_two' => $bannerAdsTwo,
                                'banner_ads_three' => $bannerAdsThree,
                                'banner_ads_four' => $bannerAdsFour,
                                'native_ads_one' => $nativeAdsOne,
                                'native_ads_two' => $nativeAdsTwo,
                                'native_ads_three' => $nativeAdsThree,
                                'native_ads_four' => $nativeAdsFour,
                                'interstitial_ads_one' => $interstitialAdsOne,
                                'interstitial_ads_two' => $interstitialAdsTwo,
                                'interstitial_ads_three' => $interstitialAdsThree,
                                'interstitial_ads_four' => $interstitialAdsFour,
                                'open_ads_one' => $openAdsOne,
                                'open_ads_two' => $openAdsTwo,
                                'rewards_ads_one' => $rewardsAdsOne,
                                'rewards_ads_two' => $rewardsAdsTwo,
                            ];
                            
                            $versionData = [
                                'app_id' => $appID,
                                'version_name' => $this->request->getPost('version_name'),
                                'version_code' => $this->request->getPost('version_code'),
                                'main_api' => $this->request->getPost('main_api'),
                                'data_api' => $this->request->getPost('data_api'),
                                'app_ads' => $this->request->getPost('app_ads'),
                                'app_open' => $this->request->getPost('app_open'),
                                'splash_ads' => $this->request->getPost('splash_ads'),
                                'screen_ads' => $this->request->getPost('screen_ads'),
                                'ads_count_one' => $this->request->getPost('ads_count_one'),
                                'ads_count_two' => $this->request->getPost('ads_count_two'),
                                'ads_count_three' => $this->request->getPost('ads_count_three'),
                                'ads_count_four' => $this->request->getPost('ads_count_four'),
                                'review_count' => $this->request->getPost('review_count'),
                                'app_banner' => $this->request->getPost('app_banner'),
                                'app_review' => $this->request->getPost('app_review'),
                                'app_update' => $this->request->getPost('app_update'),
                                'update_title' => 'Update our app',
                                'update_description' => 'Please update our app for better response!',
                                'update_button' => 'Update',
                                'update_url' => $updateUrl,
                                'is_crawler' => $this->request->getPost('is_crawler'),
                                'version_status' => $this->request->getPost('version_status'),
                            ];
                            
                            $jsonData = [
                                'app_id' => $appID,
                                'json_data' => array_column($jsonData, 'json_data'),
                                'json_status' => "true",
                            ];
                        
                            $privacyData = [
                                'app_id' => $appID,
                                'privacy_slug' => '-',
                                'privacy_policy' => '-',
                                'privacy_terms' => '-',
                                'privacy_status' => 'publish',
                            ];
                            
                            $adsDataEntry = $androidAdModel->insertData($adsData);
                            $versionDataEntry = $androidVersionModel->insertData($versionData);
                            $jsonDataEntry = $androidJsonModel->insertData($jsonData);
                            $privacyDataEntry = $androidPrivacyModel->insertData($privacyData);
                            if($privacyDataEntry){
                                return redirect()->to('view-app');
                            }
			            }
                    } else {
            	        session()->set('session_android_application_new_app_code', "App code $appCode is already exits in database!");
            	        return redirect()->to('new-app');
                    }
                } else {
                    session()->set('session_android_application_new_common_json', "You can't insert application in database! Please add");
                    return redirect()->to('new-app');
                }
            }
            return view('header')
                . view('app/app_new', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
     public function appDemo(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $androidAppsModel = new AndroidAppsModel();
            $androidCommonJsonModel = new AndroidCommonJsonModel();
            $androidAdModel = new AndroidAdModel();
            $androidVersionModel = new AndroidVersionModel();
            $androidJsonModel = new AndroidJsonModel();
            $androidPrivacyModel = new AndroidPrivacyModel();
            
                $jsonData = $androidCommonJsonModel->getData(null);
                if($jsonData != null){
                    $androidAppData = $androidAppsModel->viewAndroidAppData(1);
                    $androidAdsData = $androidAdModel->viewAndroidAppData(1);
                    $androidVersionData = $androidVersionModel->viewAndroidAppData(1);
                    $androidJsonData = $androidJsonModel->viewAndroidAppData(1);
                    $androidPrivacyData = $androidPrivacyModel->viewAndroidAppData(1);
                    
                    $appData = [
                        'developer_id' => $androidAppData['developer_id'],
                        'concept_id' => $androidAppData['concept_id'],
                        'app_code' => $androidAppData['app_code'],
                        'app_name' => $androidAppData['app_name'],
                        'app_package' => $androidAppData['app_package'],
                        'app_logo' => '',
                        'app_developer' => $androidAppData['app_developer'],
                        'app_website' => $androidAppData['app_website'],
                        'app_google' => $androidAppData['app_google'],
                        'app_facebook' => $androidAppData['app_facebook'],
                        'app_email' => $androidAppData['app_email'],
                        'app_store' => $androidAppData['app_store'],
                        'app_privacy' => $androidAppData['app_privacy'],
                        'app_terms' => $androidAppData['app_terms'],
                        'app_support' => $androidAppData['app_support'],
                        'app_download' => 0,
                        'app_release' => $androidAppData['app_release'],
                        'app_revenue_type' => $androidAppData['app_revenue_type'],
                        'app_status' => $androidAppData['app_status'],
                    ];
                    
                    $newAppID = $androidAppsModel->insertData($appData);
                    
                    if($newAppID){
                        $adsData = [
                            'app_id' => $newAppID,
                            'banner_ads_one' => $androidAdsData['banner_ads_one'],
                            'banner_ads_two' => $androidAdsData['banner_ads_two'],
                            'banner_ads_three' => $androidAdsData['banner_ads_three'],
                            'banner_ads_four' => $androidAdsData['banner_ads_four'],
                            'native_ads_one' => $androidAdsData['native_ads_one'],
                            'native_ads_two' => $androidAdsData['native_ads_two'],
                            'native_ads_three' => $androidAdsData['native_ads_three'],
                            'native_ads_four' => $androidAdsData['native_ads_four'],
                            'interstitial_ads_one' => $androidAdsData['interstitial_ads_one'],
                            'interstitial_ads_two' => $androidAdsData['interstitial_ads_two'],
                            'interstitial_ads_three' => $androidAdsData['interstitial_ads_three'],
                            'interstitial_ads_four' => $androidAdsData['interstitial_ads_four'],
                            'open_ads_one' => $androidAdsData['open_ads_one'],
                            'open_ads_two' => $androidAdsData['open_ads_two'],
                            'rewards_ads_one' => $androidAdsData['rewards_ads_one'],
                            'rewards_ads_two' => $androidAdsData['rewards_ads_two'],
                        ];
                        
                        $versionData = [
                            'app_id' => $newAppID,
                            'version_name' => $androidVersionData['version_name'],
                            'version_code' => $androidVersionData['version_code'],
                            'main_api' => $androidVersionData['main_api'],
                            'data_api' => $androidVersionData['data_api'],
                            'app_ads' => $androidVersionData['app_ads'],
                            'app_open' => $androidVersionData['app_open'],
                            'splash_ads' => $androidVersionData['splash_ads'],
                            'screen_ads' => $androidVersionData['screen_ads'],
                            'ads_count_one' => $androidVersionData['ads_count_one'],
                            'ads_count_two' => $androidVersionData['ads_count_two'],
                            'ads_count_three' => $androidVersionData['ads_count_three'],
                            'ads_count_four' => $androidVersionData['ads_count_four'],
                            'review_count' => $androidVersionData['review_count'],
                            'app_banner' => $androidVersionData['app_banner'],
                            'app_review' => $androidVersionData['app_review'],
                            'app_update' => $androidVersionData['app_update'],
                            'update_title' => $androidVersionData['update_title'],
                            'update_description' => $androidVersionData['update_description'],
                            'update_button' => $androidVersionData['update_button'],
                            'update_url' => $androidVersionData['update_url'],
                            'is_crawler' => $androidVersionData['is_crawler'],
                            'version_status' => $androidVersionData['version_status'],
                        ];
                        
                        $jsonData = [
                            'app_id' => $newAppID,
                            'json_data' => $androidJsonData['json_data'],
                            'json_status' => $androidJsonData['json_status'],
                        ];
                        
                        $privacyData = [
                            'app_id' => $newAppID,
                            'privacy_slug' => $androidPrivacyData['privacy_slug'],
                            'privacy_policy' => $androidPrivacyData['privacy_policy'],
                            'privacy_terms' => $androidPrivacyData['privacy_terms'],
                            'privacy_status' => $androidPrivacyData['privacy_status'],
                        ];
                        
                        $adsDataEntry = $androidAdModel->insertData($adsData);
                        $versionDataEntry = $androidVersionModel->insertData($versionData);
                        $jsonDataEntry = $androidJsonModel->insertData($jsonData);
                        $privacyDataEntry = $androidPrivacyModel->insertData($privacyData);
                        
                        if($privacyDataEntry){
                            $sessionAndroidApplicationViewPreviousUrl = session()->get('session_android_application_view_previous_url');
                            if(!empty($sessionAndroidApplicationViewPreviousUrl)){
                                return redirect()->to($sessionAndroidApplicationViewPreviousUrl);
                            } else {
                                return redirect()->to('view-app');
                            }
                        }
                    }
                } else {
                    session()->set('session_android_application_demo_common_json', "You can't insert application in database! Please add");
                    $sessionAndroidApplicationViewPreviousUrl = session()->get('session_android_application_view_previous_url');
                    if(!empty($sessionAndroidApplicationViewPreviousUrl)){
                        return redirect()->to($sessionAndroidApplicationViewPreviousUrl);
                    } else {
                        return redirect()->to('view-app');
                    }
                }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function appView(){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            date_default_timezone_set("Asia/Kolkata");
            $todayDate = date('Y-m-d');
            $previousDate = date('Y-m-d', strtotime(' -7 day'));
                    
            $androidAppsModel = new AndroidAppsModel();
            $androidRoiModel = new AndroidRoiModel();
            
            session()->set('session_android_application_view_previous_url', current_url_with_query());
            session()->set('session_android_application_previous_url', current_url_with_query());
            
            if($this->request->getPost('reset_search')){
                session()->remove('session_android_apps');
            }
            if($this->request->getPost('submit_search')){
                $searchAndroidApps = $this->request->getPost('search_android_apps');
                session()->set('session_android_apps', $searchAndroidApps);
            }
            $sessionAndroidApps = session()->get('session_android_apps');
            
            $searchAndroidAppsRevenueType = $this->request->getPost('search_android_apps_revenue_type');
            if(in_array($searchAndroidAppsRevenueType, ['Paid', 'Organic', 'Both'], true)){
                session()->set('session_android_apps_revenue_type', $searchAndroidAppsRevenueType);
            } else if($searchAndroidAppsRevenueType === 'all'){
                session()->remove('session_android_apps_revenue_type');
            }
            $sessionAndroidAppsRevenueType = session()->get('session_android_apps_revenue_type');
            
            $searchAndroidAppsStatus = $this->request->getPost('search_android_apps_status');
            if(in_array($searchAndroidAppsStatus, ['draft', 'development', 'publish', 'unpublish', 'suspended'], true)){
                session()->set('session_android_apps_status', $searchAndroidAppsStatus);
            } else if($searchAndroidAppsStatus === 'all'){
                session()->remove('session_android_apps_status');
            }
            $sessionAndroidAppsStatus = session()->get('session_android_apps_status');
            
            $conditions = [
                'search_android_apps' => $sessionAndroidApps,
                'search_android_apps_revenue_type' => $sessionAndroidAppsRevenueType,
                'search_android_apps_status' => $sessionAndroidAppsStatus,
            ];
            
            $pager = \Config\Services::pager();
            $perPage = 20;
            $data = [
                'viewAndroidApp' => $androidAppsModel->viewAppData($conditions, $perPage),
                'pager' => $androidAppsModel->pager,
                'androidAppCount' => $androidAppsModel->countAppData($conditions, $perPage)
            ];
            $viewAndroidApp = $androidAppsModel->viewAppData($conditions, $perPage);

            if(!empty($data['viewAndroidApp'])){
                $data['viewAndroidApp'] = [];
            
                foreach($viewAndroidApp as $appRow){
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
                        if($appWeeklyROI){
                            $weeklyInvest = 0;
                            $weeklyIncome = 0;
            
                            foreach($appWeeklyROI as $roiRow){
                                $weeklyInvest += $roiRow['app_in'];
                                $weeklyIncome += $roiRow['app_out'];
                            }
            
                            $finalWeeklyROI = round($weeklyIncome * 100 / $weeklyInvest - 100);
                            $appData['app_weekly_in'] = $weeklyInvest; 
                            $appData['app_weekly_out'] = $weeklyIncome;
                            $appData['app_weekly_roi'] = $finalWeeklyROI;
                        } else {
                            $appData['app_weekly_roi'] = null;
                            $appData['app_weekly_in'] = null; 
                            $appData['app_weekly_out'] = null;
                        }
                        
                        $appData['app_today_roi'] = $appLastROI['app_roi'] ?? null;
                    } else {
                        $appData['app_today_roi'] = null;
                        $appData['app_weekly_roi'] = null;
                        $appData['app_weekly_in'] = null; 
                        $appData['app_weekly_out'] = null;
                    }
            
                    $data['viewAndroidApp'][] = $appData;
                }
            }
            return view('header')
                . view('app/app_view', $data)
                . view('footer');
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function appInfo($appID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $appID = urlDecodes($appID);
            if(ctype_digit($appID)){
                $androidAppsModel = new AndroidAppsModel();
                $androidBannerModel = new AndroidBannerModel();
                $androidVersionModel = new AndroidVersionModel();
                $androidJsonModel = new AndroidJsonModel();
                $androidAdModel = new AndroidAdModel();
                $androidSubscriptionModel = new AndroidSubscriptionModel();
                
                session()->set('session_android_application_previous_url', current_url_with_query());

                $data['getAndroidApp'] = $androidAppsModel->viewAndroidAppsData($appID);
                $data['getAndroidVersion'] = $androidVersionModel->getAndroidVersionData($appID);
                $data['getAndroidSubscription'] = $androidSubscriptionModel->getAndroidSubscriptionData($appID);
                $data['getAndroidJson'] = $androidJsonModel->getAndroidJsonData($appID);
                $data['getAndroidAds'] = $androidAdModel->getAndroidAdsData($appID);
                
                $getJson = $androidJsonModel->getAndroidJsonData($appID);
                
                $data['getAndroidJsonData'] = [];
                
                $bannerIDs = $getJson->json_data;
                $bannerArray = explode(",", $bannerIDs);
                
                foreach($bannerArray as $row){
                    $bannerID = $row;
                    $bannerData = $androidBannerModel->getData($bannerID);
        
                    $data['getAndroidJsonData'][] = $bannerData;
                }
                
                return view('header')
                    . view('app/app_info', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function appEdit($appID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $appID = urlDecodes($appID);
            if(ctype_digit($appID)){
                $androidAppsModel = new AndroidAppsModel();
                $androidAdModel = new AndroidAdModel();
                $androidDeveloperModel = new AndroidDeveloperModel();
                $androidConceptModel = new AndroidConceptModel();
                
                $data['androidAppData'] = $androidAppsModel->getData($appID);

                $data['viewDeveloper'] = $androidDeveloperModel->viewData();
                $developerID = $data['androidAppData']['developer_id'];
                $data['developerData'] = $androidDeveloperModel->getData($developerID);
                
                $data['viewConcept'] = $androidConceptModel->viewData();
                $conceptID = $data['androidAppData']['concept_id'];
                $data['conceptData'] = $androidConceptModel->getData($conceptID);

                $data['androidAdsData'] = $androidAdModel->getData($appID);
                
                date_default_timezone_set("Asia/Kolkata");
                $file = $this->request->getFile('app_logo');
                if($file && $file->isValid() && !$file->hasMoved()){
                    $validationRule = [
                        'app_logo' => [
                            'label' => 'Image File',
                            'rules' => [
                                'uploaded[app_logo]',
                                'is_image[app_logo]',
                                'mime_in[app_logo,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                            ],
                        ],
                    ];
                    if(!$this->validate($validationRule)){
                        session()->set('session_android_application_edit_app_logo', "Invalid file type.");
                        return redirect()->to('edit-app/'.urlEncodes($appID));
                    }
                    
                    $oldAppLogo = $data['androidAppData']['app_logo'];
                    if(!empty($oldAppLogo)){
                        unlink('public/uploads/logos/' . $oldAppLogo);
                    }

                    $newName = date('Ymdhis') . '.' . $file->getClientExtension();
                    $file->move('public/uploads/logos/', $newName);
                    $appLogo = $newName;
                } else {
                    $appLogo = $data['androidAppData']['app_logo'];
                }
                
                if($this->request->getMethod() === 'post'){
                    $editAppData = [
                        'developer_id' => $this->request->getPost('developer_id'),
                        'concept_id' => $this->request->getPost('concept_id'),
                        'app_code' => $this->request->getPost('app_code'),
                        'app_name' => $this->request->getPost('app_name'),
                        'app_package' => $this->request->getPost('app_package'),
                        'app_logo' => $appLogo,
                        'app_developer' => $this->request->getPost('app_developer'),
                        'app_website' => $this->request->getPost('app_website'),
                        'app_google' => $this->request->getPost('app_google'),
                        'app_facebook' => $this->request->getPost('app_facebook'),
                        'app_email' => $this->request->getPost('app_email'),
                        'app_store' => $this->request->getPost('app_store'),
                        'app_privacy' => $this->request->getPost('app_privacy'),
                        'app_terms' => $this->request->getPost('app_terms'),
                        'app_support' => $this->request->getPost('app_support'),
                        'app_download' => 0,
                        'app_release' => $this->request->getPost('app_release'),
                        'app_revenue_type' => $this->request->getPost('app_revenue_type'),
                        'app_status' => $this->request->getPost('app_status'),
                    ];
                    
                    $bannerOne = implode("#", $this->request->getPost('banner_ads_one'));
                    $bannerAdsOne = str_replace("#@#", "@", $bannerOne);
                    $bannerTwo = implode("#", $this->request->getPost('banner_ads_two'));
                    $bannerAdsTwo = str_replace("#@#", "@", $bannerTwo);
                    $bannerThree = implode("#", $this->request->getPost('banner_ads_three'));
                    $bannerAdsThree = str_replace("#@#", "@", $bannerThree);
                    $bannerFour = implode("#", $this->request->getPost('banner_ads_four'));
                    $bannerAdsFour = str_replace("#@#", "@", $bannerFour);
                    $nativeOne = implode("#", $this->request->getPost('native_ads_one'));
                    $nativeAdsOne = str_replace("#@#", "@", $nativeOne);
                    $nativeTwo = implode("#", $this->request->getPost('native_ads_two'));
                    $nativeAdsTwo = str_replace("#@#", "@", $nativeTwo);
                    $nativeThree = implode("#", $this->request->getPost('native_ads_three'));
                    $nativeAdsThree = str_replace("#@#", "@", $nativeThree);
                    $nativeFour = implode("#", $this->request->getPost('native_ads_four'));
                    $nativeAdsFour = str_replace("#@#", "@", $nativeFour);
                    $interstitialOne = implode("#", $this->request->getPost('interstitial_ads_one'));
                    $interstitialAdsOne = str_replace("#@#", "@", $interstitialOne);
                    $interstitialTwo = implode("#", $this->request->getPost('interstitial_ads_two'));
                    $interstitialAdsTwo = str_replace("#@#", "@", $interstitialTwo);
                    $interstitialThree = implode("#", $this->request->getPost('interstitial_ads_three'));
                    $interstitialAdsThree = str_replace("#@#", "@", $interstitialThree);
                    $interstitialFour = implode("#", $this->request->getPost('interstitial_ads_four'));
                    $interstitialAdsFour = str_replace("#@#", "@", $interstitialFour);
                    $openOne = implode("#", $this->request->getPost('open_ads_one'));
                    $openAdsOne = str_replace("#@#", "@", $openOne);
                    $openTwo = implode("#", $this->request->getPost('open_ads_two'));
                    $openAdsTwo = str_replace("#@#", "@", $openTwo);
                    $rewardsOne = implode("#", $this->request->getPost('rewards_ads_one'));
                    $rewardsAdsOne = str_replace("#@#", "@", $rewardsOne);
                    $rewardsTwo = implode("#", $this->request->getPost('rewards_ads_two'));
                    $rewardsAdsTwo = str_replace("#@#", "@", $rewardsTwo);
                    $editAdsData = [
                        'app_id' => $appID,
                        'banner_ads_one' => $bannerAdsOne,
                        'banner_ads_two' => $bannerAdsTwo,
                        'banner_ads_three' => $bannerAdsThree,
                        'banner_ads_four' => $bannerAdsFour,
                        'native_ads_one' => $nativeAdsOne,
                        'native_ads_two' => $nativeAdsTwo,
                        'native_ads_three' => $nativeAdsThree,
                        'native_ads_four' => $nativeAdsFour,
                        'interstitial_ads_one' => $interstitialAdsOne,
                        'interstitial_ads_two' => $interstitialAdsTwo,
                        'interstitial_ads_three' => $interstitialAdsThree,
                        'interstitial_ads_four' => $interstitialAdsFour,
                        'open_ads_one' => $openAdsOne,
                        'open_ads_two' => $openAdsTwo,
                        'rewards_ads_one' => $rewardsAdsOne,
                        'rewards_ads_two' => $rewardsAdsTwo,
                    ];
                    
                    $editAppDataEntry = $androidAppsModel->editData($appID, $editAppData);
                    $editAdsDataEntry = $androidAdModel->editData($appID, $editAdsData);
                    if($editAdsDataEntry){
                        $sessionAndroidApplicationPreviousUrl = session()->get('session_android_application_previous_url');
                        if(!empty($sessionAndroidApplicationPreviousUrl)){
                            return redirect()->to($sessionAndroidApplicationPreviousUrl);
                        } else {
                            return redirect()->to('view-app');
                        }
                    }
                }
                return view('header')
                    . view('app/app_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }

    public function appDelete($appID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $appID = urlDecodes($appID);
            if(ctype_digit($appID)){
                $androidAppsModel = new AndroidAppsModel();
                $androidAdModel = new AndroidAdModel();
                $androidVersionModel = new AndroidVersionModel();
                $androidJsonModel = new AndroidJsonModel();
                $androidPrivacyModel = new AndroidPrivacyModel();
                $androidRoiModel = new AndroidRoiModel();
                $androidSubscriptionModel = new AndroidSubscriptionModel();
    
                $data['androidAppData'] = $androidAppsModel->getData($appID);
                
                $appLogo = $data['androidAppData']['app_logo'];
                if(!empty($appLogo)){
                    unlink('public/uploads/logos/' . $appLogo);
                }
                
                $resultAppDataEntry = $androidAppsModel->deleteData($appID);
                $resultAdDataEntry = $androidAdModel->deleteAndroidAdsData($appID);
                $resultVersionDataEntry = $androidVersionModel->deleteAndroidVersionData($appID);
                $resultJsonDataEntry = $androidJsonModel->deleteAndroidJsonData($appID);
                $resultPrivacyDataEntry = $androidPrivacyModel->deleteAndroidPrivacyData($appID);
                $resultRoiDataEntry = $androidRoiModel->deleteAndroidRoiData($appID);
                $resultSubscriptionDataEntry = $androidSubscriptionModel->deleteAndroidSubscriptionData($appID);
                if($resultSubscriptionDataEntry){
                    $sessionAndroidApplicationViewPreviousUrl = session()->get('session_android_application_view_previous_url');
                    if(!empty($sessionAndroidApplicationViewPreviousUrl)){
                        return redirect()->to($sessionAndroidApplicationViewPreviousUrl);
                    } else {
                        return redirect()->to('view-app');
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