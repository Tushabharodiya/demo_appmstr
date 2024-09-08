<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidSimcardModel extends Model
{
    protected $table = ANDROID_SIMCARD_TABLE;
    protected $primaryKey = 'sim_id';
    
    protected $allowedFields = ['sim_owner', 'sim_operator', 'sim_number', 'sim_imei', 'sim_type', 'sim_note', 'sim_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($simID){
        return $this->find($simID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($simID, $data){
        return $this->update($simID, $data);
    }

    public function deleteData($simID){
        return $this->delete($simID);
    }
    
    public function viewSimcardData($params, $perPage){
        $this->orderBy('sim_id', 'desc');
        if(!empty($params['search_android_simcard'])){
            $searchAndroidSimcard = $params['search_android_simcard'];
            $likeArr = [
                'sim_owner' => $searchAndroidSimcard,
                'sim_operator' => $searchAndroidSimcard,
                'sim_number' => $searchAndroidSimcard,
                'sim_imei' => $searchAndroidSimcard,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_simcard_type'])){
            $searchAndroidSimcardType = $params['search_android_simcard_type'];
            $this->where('sim_type', $searchAndroidSimcardType);
        } else if(!empty($params['search_android_simcard_status'])){
            $searchAndroidSimcardStatus = $params['search_android_simcard_status'];
            $this->where('sim_status', $searchAndroidSimcardStatus);
        }
        return $this->paginate($perPage);
    }
    
    public function countSimcardData($params, $perPage){
        $this->orderBy('sim_id', 'desc');
        if(!empty($params['search_android_simcard'])){
            $searchAndroidSimcard = $params['search_android_simcard'];
            $likeArr = [
                'sim_owner' => $searchAndroidSimcard,
                'sim_operator' => $searchAndroidSimcard,
                'sim_number' => $searchAndroidSimcard,
                'sim_imei' => $searchAndroidSimcard,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_simcard_type'])){
            $searchAndroidSimcardType = $params['search_android_simcard_type'];
            $this->where('sim_type', $searchAndroidSimcardType);
        } else if(!empty($params['search_android_simcard_status'])){
            $searchAndroidSimcardStatus = $params['search_android_simcard_status'];
            $this->where('sim_status', $searchAndroidSimcardStatus);
        }
        return $this->countAllResults($perPage);
    }
}
