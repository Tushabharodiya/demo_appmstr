<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidVersionModel extends Model
{
    protected $table = ANDROID_VERSION_TABLE;
    protected $primaryKey = 'version_id';
    
    protected $allowedFields = ['app_id', 'version_name', 'version_code', 'main_api', 'data_api', 'app_ads', 'app_banner', 'app_open', 'splash_ads', 'screen_ads', 'ads_count_one', 'ads_count_two', 'ads_count_three', 'ads_count_four', 'app_review', 'review_count', 'update_title',
    'update_description', 'update_url', 'update_button', 'is_vpn', 'is_crawler', 'is_subscription', 'is_rewarded', 'app_update', 'version_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($versionID){
        return $this->find($versionID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($versionID, $data){
        return $this->update($versionID, $data);
    }

    public function deleteData($versionID){
        return $this->delete($versionID);
    }
    
    public function getAndroidVersionData($appID){
        $this->where('app_id', $appID);
        return $this->find();
    }
    
    public function deleteAndroidVersionData($appID){
        $this->where('app_id', $appID);
        return $this->delete();
    }
    
    public function checkAndroidVersionByName($appID, $versionName){
        $this->where('app_id', $appID);
        $this->where('version_name', $versionName);
        return $this->find();
    }
    
    public function checkAndroidVersionByCode($appID, $versionCode){
        $this->where('app_id', $appID);
        $this->where('version_code', $versionCode);
        return $this->find();
    }
    
    public function viewAndroidAppData($appID){
        $this->where('app_id', $appID);
        return $this->find($appID);
    }
}
