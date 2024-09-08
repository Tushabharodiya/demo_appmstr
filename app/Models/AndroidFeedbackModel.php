<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidFeedbackModel extends Model
{
    protected $table = ANDROID_FEEDBACK_TABLE;
    protected $primaryKey = 'feedback_id';
    
    protected $allowedFields = ['feedback_code', 'feedback_message', 'feedback_language', 'feedback_date', 'feedback_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($feedbackID){
        return $this->find($feedbackID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($feedbackID, $data){
        return $this->update($feedbackID, $data);
    }

    public function deleteData($feedbackID){
        return $this->delete($feedbackID);
    }
    
    public function viewFeedbackData($params, $perPage){
        $this->orderBy('feedback_id', 'desc');
        if(!empty($params['search_android_feedback'])){
            $searchAndroidFeedback = $params['search_android_feedback'];
            $likeArr = [
                'feedback_code' => $searchAndroidFeedback,
                'feedback_message' => $searchAndroidFeedback,
                'feedback_language' => $searchAndroidFeedback,
                'feedback_date' => $searchAndroidFeedback,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_feedback_code'])){
            $searchAndroidFeedbackCode = $params['search_android_feedback_code'];
            $this->where('feedback_code', $searchAndroidFeedbackCode);
        } else if(!empty($params['search_android_feedback_status'])){
            $searchAndroidFeedbackStatus = $params['search_android_feedback_status'];
            $this->where('feedback_status', $searchAndroidFeedbackStatus);
        }
        return $this->paginate($perPage);
    }
    
    public function countFeedbackData($params, $perPage){
        $this->orderBy('feedback_id', 'desc');
        if(!empty($params['search_android_feedback'])){
            $searchAndroidFeedback = $params['search_android_feedback'];
            $likeArr = [
                'feedback_code' => $searchAndroidFeedback,
                'feedback_message' => $searchAndroidFeedback,
                'feedback_language' => $searchAndroidFeedback,
                'feedback_date' => $searchAndroidFeedback,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_feedback_code'])){
            $searchAndroidFeedbackCode = $params['search_android_feedback_code'];
            $this->where('feedback_code', $searchAndroidFeedbackCode);
        } else if(!empty($params['search_android_feedback_status'])){
            $searchAndroidFeedbackStatus = $params['search_android_feedback_status'];
            $this->where('feedback_status', $searchAndroidFeedbackStatus);
        }
        return $this->countAllResults($perPage);
    }
}
