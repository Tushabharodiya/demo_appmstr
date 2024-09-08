<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = USER_ADMIN_TABLE;
    protected $primaryKey = 'user_id';
    
    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_role', 'user_key', 'user_login', 'is_login', 'user_status'];
    
	public function checkLogin($data){
	    $this->where('user_email', $data['user_email']);
	    $this->where('user_password', $data['user_password']);
        return $this->first();
    }
}
