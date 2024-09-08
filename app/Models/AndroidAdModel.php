<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidAdModel extends Model
{
    protected $table = ANDROID_AD_TABLE;
    protected $primaryKey = 'ads_id';
    
    protected $allowedFields = ['app_id', 'banner_ads_one', 'banner_ads_two', 'banner_ads_three', 'banner_ads_four', 'native_ads_one', 'native_ads_two', 'native_ads_three', 'native_ads_four', 'interstitial_ads_one', 'interstitial_ads_two', 'interstitial_ads_three', 
    'interstitial_ads_four', 'open_ads_one', 'open_ads_two', 'rewards_ads_one', 'rewards_ads_two'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($adsID){
        return $this->find($adsID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($adsID, $data){
        return $this->update($adsID, $data);
    }

    public function deleteData($adsID){
        return $this->delete($adsID);
    }
    
    public function getAndroidAdsData($appID){
        $this->where('app_id', $appID);
        return $this->find($appID);
    }
    
    public function deleteAndroidAdsData($appID){
        $this->where('app_id', $appID);
        return $this->delete();
    }
    
    public function viewAndroidAppData($appID){
        $this->where('app_id', $appID);
        return $this->find($appID);
    }
}
