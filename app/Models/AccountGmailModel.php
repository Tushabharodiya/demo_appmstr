<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountGmailModel extends Model
{
    protected $table = ACCOUNT_GMAIL_TABLE;
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
    
    public function viewGmailData($params, $perPage){
        $this->orderBy('account_id', 'desc');
        if(!empty($params['search_account_gmail'])){
            $searchAccountGmail = $params['search_account_gmail'];
            $likeArr = [
                'account_name' => $searchAccountGmail,
                'account_email' => $searchAccountGmail,
                'account_mobile_number' => $searchAccountGmail,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_account_gmail_status'])){
            $searchAccountGmailStatus = $params['search_account_gmail_status'];
            $this->where('account_status', $searchAccountGmailStatus);
        }
        if(empty($params['search_account_gmail']) and empty($params['search_account_gmail_status'])){
            $this->where('account_status', 'publish');
        }
        return $this->paginate($perPage);
    }
    
    public function countGmailData($params, $perPage){
        $this->orderBy('account_id', 'desc');
        if(!empty($params['search_account_gmail'])){
            $searchAccountGmail = $params['search_account_gmail'];
            $likeArr = [
                'account_name' => $searchAccountGmail,
                'account_email' => $searchAccountGmail,
                'account_mobile_number' => $searchAccountGmail,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_account_gmail_status'])){
            $searchAccountGmailStatus = $params['search_account_gmail_status'];
            $this->where('account_status', $searchAccountGmailStatus);
        }
        if(empty($params['search_account_gmail']) and empty($params['search_account_gmail_status'])){
            $this->where('account_status', 'publish');
        }
        return $this->countAllResults($perPage);
    }
}
