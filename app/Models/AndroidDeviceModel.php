<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidDeviceModel extends Model
{
    protected $table = ANDROID_DEVICE_TABLE;
    protected $primaryKey = 'device_id';
    
    protected $allowedFields = ['device_code', 'device_name', 'device_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($deviceID){
        return $this->find($deviceID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($deviceID, $data){
        return $this->update($deviceID, $data);
    }

    public function deleteData($deviceID){
        return $this->delete($deviceID);
    }
    
    public function viewDeviceData($params, $perPage){
        $this->orderBy('device_id', 'desc');
        if(!empty($params['search_android_device'])){
            $searchAndroidDevice = $params['search_android_device'];
            $likeArr = [
                'device_code' => $searchAndroidDevice,
                'device_name' => $searchAndroidDevice,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_device_status'])){
            $searchAndroidDeviceStatus = $params['search_android_device_status'];
            $this->where('device_status', $searchAndroidDeviceStatus);
        }
        return $this->paginate($perPage);
    }
    
    public function countDeviceData($params, $perPage){
        $this->orderBy('device_id', 'desc');
        if(!empty($params['search_android_device'])){
            $searchAndroidDevice = $params['search_android_device'];
            $likeArr = [
                'device_code' => $searchAndroidDevice,
                'device_name' => $searchAndroidDevice,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_device_status'])){
            $searchAndroidDeviceStatus = $params['search_android_device_status'];
            $this->where('device_status', $searchAndroidDeviceStatus);
        }
        return $this->countAllResults($perPage);
    }
}
