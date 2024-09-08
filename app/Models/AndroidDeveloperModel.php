<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidDeveloperModel extends Model
{
    protected $table = ANDROID_DEVELOPER_TABLE;
    protected $primaryKey = 'developer_id';
    
    protected $allowedFields = ['developer_name', 'developer_email', 'developer_create_date', 'developer_device', 'developer_mac', 'developer_mobile_number', 'developer_identity_name', 'developer_identity_type', 'developer_identity_front_file', 'developer_identity_back_file',
    'developer_payee_name', 'developer_payee_bank', 'developer_payee_card', 'developer_payee_type', 'developer_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($developerID){
        return $this->find($developerID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($developerID, $data){
        return $this->update($developerID, $data);
    }

    public function deleteData($developerID){
        return $this->delete($developerID);
    }
    
    public function viewDeveloperData($params, $perPage){
        $this->orderBy('developer_id', 'desc');
        if(!empty($params['search_android_developer'])){
            $searchAndroidDeveloper = $params['search_android_developer'];
            $likeArr = [
                'developer_name' => $searchAndroidDeveloper,
                'developer_email' => $searchAndroidDeveloper,
                'developer_mobile_number' => $searchAndroidDeveloper,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_developer_status'])){
            $searchAndroidDeveloperStatus = $params['search_android_developer_status'];
            $this->where('developer_status', $searchAndroidDeveloperStatus);
        }
        if(empty($params['search_android_developer']) and empty($params['search_android_developer_status'])){
            $this->where('developer_status', 'publish');
        }
        return $this->paginate($perPage);
    }
    
    public function countDeveloperData($params, $perPage){
        $this->orderBy('developer_id', 'desc');
        if(!empty($params['search_android_developer'])){
            $searchAndroidDeveloper = $params['search_android_developer'];
            $likeArr = [
                'developer_name' => $searchAndroidDeveloper,
                'developer_email' => $searchAndroidDeveloper,
                'developer_mobile_number' => $searchAndroidDeveloper,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_developer_status'])){
            $searchAndroidDeveloperStatus = $params['search_android_developer_status'];
            $this->where('developer_status', $searchAndroidDeveloperStatus);
        }
        if(empty($params['search_android_developer']) and empty($params['search_android_developer_status'])){
            $this->where('developer_status', 'publish');
        }
        return $this->countAllResults($perPage);
    }
}
