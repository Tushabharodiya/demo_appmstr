<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidCommonJsonModel extends Model
{
    protected $table = ANDROID_COMMON_JSON_TABLE;
    protected $primaryKey = 'json_id';
    
    protected $allowedFields = ['json_data', 'json_status'];
    
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
    
    public function viewAndroidCommonJson(){
        return $this->get()->getRow();
    }
}
