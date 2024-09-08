<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountFacebookModel extends Model
{
    protected $table = ACCOUNT_FACEBOOK_TABLE;
    protected $primaryKey = 'account_id';
    
    protected $allowedFields = ['account_name', 'account_email', 'account_mobile_number', 'account_birth_date', 'account_create_date', 'account_note', 'account_gender', 'account_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($accountID){
        return $this->find($accountID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($accountID, $data){
        return $this->update($accountID, $data);
    }

    public function deleteData($accountID){
        return $this->delete($accountID);
    }
    
    public function viewFacebookData($params, $perPage){
        $this->orderBy('account_id', 'desc');
        if(!empty($params['search_account_facebook'])){
            $searchAccountFacebook = $params['search_account_facebook'];
            $likeArr = [
                'account_name' => $searchAccountFacebook,
                'account_email' => $searchAccountFacebook,
                'account_mobile_number' => $searchAccountFacebook,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_account_facebook_status'])){
            $searchAccountFacebookStatus = $params['search_account_facebook_status'];
            $this->where('account_status', $searchAccountFacebookStatus);
        }
        if(empty($params['search_account_facebook']) and empty($params['search_account_facebook_status'])){
            $this->where('account_status', 'publish');
        }
        return $this->paginate($perPage);
    }
    
    public function countFacebookData($params, $perPage){
        $this->orderBy('account_id', 'desc');
        if(!empty($params['search_account_facebook'])){
            $searchAccountFacebook = $params['search_account_facebook'];
            $likeArr = [
                'account_name' => $searchAccountFacebook,
                'account_email' => $searchAccountFacebook,
                'account_mobile_number' => $searchAccountFacebook,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_account_facebook_status'])){
            $searchAccountFacebookStatus = $params['search_account_facebook_status'];
            $this->where('account_status', $searchAccountFacebookStatus);
        }
        if(empty($params['search_account_facebook']) and empty($params['search_account_facebook_status'])){
            $this->where('account_status', 'publish');
        }
        return $this->countAllResults($perPage);
    }
    
    public function viewedFacebookData($where, $params, $table){
        $builder = $this->db->table($table);

        $builder->select('*');
        $builder->orderBy('account_id', 'ASC');
        $builder->where($where);

        if(array_key_exists("account_id", $params)){
            $builder->where('account_id', $params['account_id']);
            $result = $builder->get()->getRowArray();
        } else {
            if(array_key_exists("start", $params) && array_key_exists("limit", $params)){
                $builder->limit($params['limit'], $params['start']);
            } else if(!array_key_exists("start", $params) && array_key_exists("limit", $params)){
                $builder->limit($params['limit']);
            }

            if(array_key_exists("returnType", $params) && $params['returnType'] == 'count'){
                $result = $builder->countAllResults();
            } else {
                $result = $builder->get()->getResultArray();
            }
        }

        return $result;
    }
}
