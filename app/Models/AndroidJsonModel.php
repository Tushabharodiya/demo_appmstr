<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidJsonModel extends Model
{
    protected $table = ANDROID_JSON_TABLE;
    protected $primaryKey = 'json_id';
    
    protected $allowedFields = ['app_id', 'json_data', 'json_data'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($jsonID){
        return $this->find($jsonID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($jsonID, $data){
        return $this->update($jsonID, $data);
    }

    public function deleteData($jsonID){
        return $this->delete($jsonID);
    }
    
    public function getAndroidJsonData($appID){
        $this->where('app_id', $appID);
        return $this->get()->getRow();
    }
    
    public function deleteAndroidJsonData($appID){
        $this->where('app_id', $appID);
        return $this->delete();
    }
    
    public function viewAndroidAppData($appID){
        $this->where('app_id', $appID);
        return $this->find($appID);
    }
}
