<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidSubscriptionModel extends Model
{
    protected $table = ANDROID_SUBSCRIPTION_TABLE;
    protected $primaryKey = 'subscription_id';
    
    protected $allowedFields = ['app_id', 'subscription_code', 'subscription_title_one', 'subscription_title_two', 'subscription_title_three', 'subscription_title_four', 'subscription_offer', 'subscription_primary', 'subscription_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($subscriptionID){
        return $this->find($subscriptionID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($subscriptionID, $data){
        return $this->update($subscriptionID, $data);
    }

    public function deleteData($subscriptionID){
        return $this->delete($subscriptionID);
    }
    
    public function getAndroidSubscriptionData($appID){
        $this->where('app_id', $appID);
        return $this->find();
    }
    
    public function deleteAndroidSubscriptionData($appID){
        $this->where('app_id', $appID);
        return $this->delete();
    }
}
