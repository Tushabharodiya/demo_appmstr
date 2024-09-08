<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidIpModel extends Model
{
    protected $table = ANDROID_IP_TABLE;
    protected $primaryKey = 'ip_id';
    
    protected $allowedFields = ['ip_address', 'ip_name', 'ip_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($ipID){
        return $this->find($ipID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($ipID, $data){
        return $this->update($ipID, $data);
    }

    public function deleteData($ipID){
        return $this->delete($ipID);
    }
    
    public function viewIpData($params, $perPage){
        $this->orderBy('ip_id', 'desc');
        if(!empty($params['search_android_ip'])){
            $searchAndroidIp = $params['search_android_ip'];
            $likeArr = [
                'ip_address' => $searchAndroidIp,
                'ip_name' => $searchAndroidIp,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_ip_status'])){
            $searchAndroidIpStatus = $params['search_android_ip_status'];
            $this->where('ip_status', $searchAndroidIpStatus);
        }
        return $this->paginate($perPage);
    }
    
    public function countIpData($params, $perPage){
        $this->orderBy('ip_id', 'desc');
        if(!empty($params['search_android_ip'])){
            $searchAndroidIp = $params['search_android_ip'];
            $likeArr = [
                'ip_address' => $searchAndroidIp,
                'ip_name' => $searchAndroidIp,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_ip_status'])){
            $searchAndroidIpStatus = $params['search_android_ip_status'];
            $this->where('ip_status', $searchAndroidIpStatus);
        }
        return $this->countAllResults($perPage);
    }
}
