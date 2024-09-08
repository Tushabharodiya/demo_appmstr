<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidPrivacyModel extends Model
{
    protected $table = ANDROID_PRIVACY_TABLE;
    protected $primaryKey = 'privacy_id';
    
    protected $allowedFields = ['app_id', 'privacy_slug', 'privacy_policy', 'privacy_terms', 'privacy_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($privacyID){
        return $this->find($privacyID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($privacyID, $data){
        return $this->update($privacyID, $data);
    }

    public function deleteData($privacyID){
        return $this->delete($privacyID);
    }
    
    public function deleteAndroidPrivacyData($appID){
        $this->where('app_id', $appID);
        return $this->delete();
    }
    
    public function viewAndroidAppData($appID){
        $this->where('app_id', $appID);
        return $this->find($appID);
    }
}
