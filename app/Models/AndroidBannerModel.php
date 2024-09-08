<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidBannerModel extends Model
{
    protected $table = ANDROID_BANNER_TABLE;
    protected $primaryKey = 'banner_id';
    
    protected $allowedFields = ['banner_title', 'banner_description', 'banner_image', 'banner_url', 'banner_button', 'banner_type', 'banner_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($bannerID){
        return $this->find($bannerID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($bannerID, $data){
        return $this->update($bannerID, $data);
    }

    public function deleteData($bannerID){
        return $this->delete($bannerID);
    }
    
    public function viewBannerData($params, $perPage){
        $this->orderBy('banner_id', 'desc');
        if(!empty($params['search_android_banner'])){
            $searchAndroidBanner = $params['search_android_banner'];
            $likeArr = [
                'banner_title' => $searchAndroidBanner,
                'banner_description' => $searchAndroidBanner,
                'banner_url' => $searchAndroidBanner,
                'banner_button' => $searchAndroidBanner,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_android_banner_type'])){
            $searchAndroidBannerType = $params['search_android_banner_type'];
            $this->where('banner_type', $searchAndroidBannerType);
        }
        if(!empty($params['search_android_banner_status'])){
            $searchAndroidBannerStatus = $params['search_android_banner_status'];
            $this->where('banner_status', $searchAndroidBannerStatus);
        }
        return $this->paginate($perPage);
    }
    
    public function countBannerData($params, $perPage){
        $this->orderBy('banner_id', 'desc');
        if(!empty($params['search_android_banner'])){
            $searchAndroidBanner = $params['search_android_banner'];
            $likeArr = [
                'banner_title' => $searchAndroidBanner,
                'banner_description' => $searchAndroidBanner,
                'banner_url' => $searchAndroidBanner,
                'banner_button' => $searchAndroidBanner,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_android_banner_type'])){
            $searchAndroidBannerType = $params['search_android_banner_type'];
            $this->where('banner_type', $searchAndroidBannerType);
        }
        if(!empty($params['search_android_banner_status'])){
            $searchAndroidBannerStatus = $params['search_android_banner_status'];
            $this->where('banner_status', $searchAndroidBannerStatus);
        }
        return $this->countAllResults($perPage);
    }
    
    public function viewAndroidBanner(){
        $this->orderBy('banner_id', 'desc');
        return $this->findAll();
    }
}
