<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidAppsModel extends Model
{
    protected $table = ANDROID_APPS_TABLE;
    protected $primaryKey = 'app_id';
    
    protected $allowedFields = ['concept_id', 'developer_id', 'app_code', 'app_name', 'app_package', 'app_logo', 'app_developer', 'app_website', 'app_google', 'app_facebook', 'app_email', 'app_store', 'app_privacy', 'app_terms', 'app_support', 'app_download', 'app_release', 
    'app_revenue_type', 'app_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($appID){
        return $this->find($appID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($appID, $data){
        return $this->update($appID, $data);
    }

    public function deleteData($appID){
        return $this->delete($appID);
    }
    
    public function viewAppData($params, $perPage){
        $this->orderBy('app_id', 'desc');
        if(!empty($params['search_android_apps'])){
            $searchAndroidApps = $params['search_android_apps'];
            $likeArr = [
                'app_name' => $searchAndroidApps,
                'app_developer' => $searchAndroidApps,
                'app_code' => $searchAndroidApps,
                'app_package' => $searchAndroidApps,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_android_apps_revenue_type'])){
            $searchAndroidAppsRevenueType = $params['search_android_apps_revenue_type'];
            $this->where('app_revenue_type', $searchAndroidAppsRevenueType);
        }
        if(!empty($params['search_android_apps_status'])){
            $searchAndroidAppsStatus = $params['search_android_apps_status'];
            $this->where('app_status', $searchAndroidAppsStatus);
        }
        $this->whereNotIn('app_status', ['unpublish']);
        return $this->paginate($perPage);
    }
    
    public function countAppData($params, $perPage){
        $this->orderBy('app_id', 'desc');
        if(!empty($params['search_android_apps'])){
            $searchAndroidApps = $params['search_android_apps'];
            $likeArr = [
                'app_name' => $searchAndroidApps,
                'app_developer' => $searchAndroidApps,
                'app_code' => $searchAndroidApps,
                'app_package' => $searchAndroidApps,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_android_apps_revenue_type'])){
            $searchAndroidAppsRevenueType = $params['search_android_apps_revenue_type'];
            $this->where('app_revenue_type', $searchAndroidAppsRevenueType);
        }
        if(!empty($params['search_android_apps_status'])){
            $searchAndroidAppsStatus = $params['search_android_apps_status'];
            $this->where('app_status', $searchAndroidAppsStatus);
        }
        $this->whereNotIn('app_status', ['unpublish']);
        return $this->countAllResults($perPage);
    }
   
    public function getDeveloperAndroidAppsData($params, $developerID){
        $this->orderBy('app_id','desc');
        if(!empty($params['search_developer_android_apps'])){
            $searchDeveloperAndroidApps = $params['search_developer_android_apps'];
            $likeArr = [
                'app_name' => $searchDeveloperAndroidApps,
                'app_developer' => $searchDeveloperAndroidApps,
                'app_code' => $searchDeveloperAndroidApps,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_developer_android_apps_revenue_type'])){
            $searchDeveloperAndroidAppsRevenueType = $params['search_developer_android_apps_revenue_type'];
            $this->where('app_revenue_type', $searchDeveloperAndroidAppsRevenueType);
        }
        if(!empty($params['search_developer_android_apps_status'])){
            $searchDeveloperAndroidAppsStatus = $params['search_developer_android_apps_status'];
            $this->where('app_status', $searchDeveloperAndroidAppsStatus);
        }
        $this->where('developer_id', $developerID);
        return $this->find();
    }
    
    public function getConceptAndroidAppsData($params, $conceptID){
        $this->orderBy('app_id', 'desc');
        if(!empty($params['search_concept_android_apps'])){
            $searchConceptAndroidApps = $params['search_concept_android_apps'];
            $likeArr = [
                'app_name' => $searchConceptAndroidApps,
                'app_developer' => $searchConceptAndroidApps,
                'app_code' => $searchConceptAndroidApps,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_concept_android_apps_revenue_type'])){
            $searchConceptAndroidAppsRevenueType = $params['search_concept_android_apps_revenue_type'];
            $this->where('app_revenue_type', $searchConceptAndroidAppsRevenueType);
        }
        if(!empty($params['search_concept_android_apps_status'])){
            $searchConceptAndroidAppsStatus = $params['search_concept_android_apps_status'];
            $this->where('app_status', $searchConceptAndroidAppsStatus);
        }
        $this->where('concept_id', $conceptID);
        return $this->find();
    }
    
    public function getDashboardAppsData(){
        $this->orderBy('app_id','desc');
        $this->where('app_status', 'publish');
        return $this->find();
    }
    
    public function checkAndroidApp($appCode){
        $this->where('app_code', $appCode);
        return $this->find();
    }
    
    public function viewAndroidAppsData($appID){
        $this->where('android_apps.app_id', $appID);
        $this->join('android_privacy', 'android_privacy.app_id = android_apps.app_id');
        $this->join('android_developer', 'android_developer.developer_id = android_apps.developer_id');
        $this->join('android_concept', 'android_concept.concept_id = android_apps.concept_id');
        return $this->find($appID);
    }
    
    public function viewAppRoiData(){
        $this->orderBy('app_id','desc');
        return $this->findAll();
    }
    
    public function viewAndroidAppData($appID){
        $this->where('app_id', $appID);
        return $this->find($appID);
    }
    
    public function viewAndroidConceptData($conceptID){
        $this->where('concept_id', $conceptID);
        $this->where('app_status', 'publish');
        return $this->findAll();
    }
    
    public function viewAndroidDeveloperData($developerID){
        $this->where('developer_id', $developerID);
        $this->where('app_status', 'publish');
        return $this->findAll();
    }
}
