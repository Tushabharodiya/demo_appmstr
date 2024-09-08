<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidConceptModel extends Model
{
    protected $table = ANDROID_CONCEPT_TABLE;
    protected $primaryKey = 'concept_id';
    
    protected $allowedFields = ['concept_name', 'concept_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($conceptID){
        return $this->find($conceptID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($conceptID, $data){
        return $this->update($conceptID, $data);
    }

    public function deleteData($conceptID){
        return $this->delete($conceptID);
    }
    
    public function viewConceptData($params, $perPage){
        $this->orderBy('concept_id', 'desc');
        if(!empty($params['search_android_concept'])){
            $searchAndroidConcept = $params['search_android_concept'];
            $likeArr = [
                'concept_name' => $searchAndroidConcept,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_concept_status'])){
            $searchAndroidConceptStatus = $params['search_android_concept_status'];
            $this->where('concept_status', $searchAndroidConceptStatus);
        }
        if(empty($params['search_android_concept']) and empty($params['search_android_concept_status'])){
            $this->where('concept_status', 'publish');
        }
        return $this->paginate($perPage);
    }
    
    public function countConceptData($params, $perPage){
        $this->orderBy('concept_id', 'desc');
        if(!empty($params['search_android_concept'])){
            $searchAndroidConcept = $params['search_android_concept'];
            $likeArr = [
                'concept_name' => $searchAndroidConcept,
            ];
            $this->orLike($likeArr);
        } else if(!empty($params['search_android_concept_status'])){
            $searchAndroidConceptStatus = $params['search_android_concept_status'];
            $this->where('concept_status', $searchAndroidConceptStatus);
        }
        if(empty($params['search_android_concept']) and empty($params['search_android_concept_status'])){
            $this->where('concept_status', 'publish');
        }
        return $this->countAllResults($perPage);
    }
}
