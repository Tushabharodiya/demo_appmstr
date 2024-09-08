<?php

namespace App\Models;

use CodeIgniter\Model;

class AndroidRoiModel extends Model
{
    protected $table = ANDROID_ROI_TABLE;
    protected $primaryKey = 'data_id';
    
    protected $allowedFields = ['app_id', 'app_code', 'app_in', 'app_out', 'app_margin', 'app_roi', 'app_date', 'app_month', 'data_status'];
    
    public function countData($where){
        if($where){$this->where($where);}
        return $this->countAllResults();
    }
    
    public function getData($dataID){
        return $this->find($dataID);
    }
    
    public function viewData(){
        return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function editData($dataID, $data){
        return $this->update($dataID, $data);
    }

    public function deleteData($dataID){
        return $this->delete($dataID);
    }
    
    public function deleteAndroidRoiData($appID){
        $this->where('app_id', $appID);
        return $this->delete();
    }
    
    public function getLastRoiData($appID){
        $this->orderBy('data_id','desc');
        $this->where('app_id', $appID);
        return $this->first();
    }
    
    public function getWeeklyRoiData($appID, $todayDate, $previousDate){
        $this->where('app_id', $appID);
        $this->where('app_date >=', $previousDate);
        $this->where('app_date <=', $todayDate);
        return $this->find();
    }
    
    public function getIncomeDataCurrentWeek($appID){
        $date_start = strtotime('last Sunday');
        $date_end = strtotime('next Sunday');
        $week_start = date('Y-m-d', $date_start);
        $week_end = date('Y-m-d', $date_end);
        $this->where('app_id', $appID);
        $this->where('app_date >=', $week_start);
        $this->where('app_date <=', $week_end);
        return $this->find();
    }
    
    public function getIncomeDataLastWeek($appID){
        $previous_week = strtotime("-1 week +1 day");
        $week_start = strtotime("last sunday midnight", $previous_week);
        $week_end = strtotime("next saturday", $week_start);
        $week_start = date("Y-m-d", $week_start);
        $week_end = date("Y-m-d", $week_end);
        $this->where('app_id', $appID);
        $this->where('app_date >=', $week_start);
        $this->where('app_date <=', $week_end);
        return $this->find();
    }
    
    public function getIncomeDataCurrentMonth($appID){
        $this->where('app_id', $appID);
        $this->where('MONTH(app_date)', date('m'));
        $this->where('YEAR(app_date)', date('Y'));
        return $this->find();
    }
    
    public function getIncomeDataLastMonth($appID){
        $first_date = date('Y-m-d', strtotime('first day of last month'));
        $last_date = date('Y-m-d', strtotime('last day of last month'));
        $this->where('app_id', $appID);
        $this->where('app_date >=', $first_date);
        $this->where('app_date <=', $last_date);
        return $this->find();
    }
    
    public function checkAndroidAppByDate($appID, $appDate){
        $this->where('app_id', $appID);
        $this->where('app_date', $appDate);
        return $this->find();
    }
    
    public function viewRoiData($params, $appID, $perPage){
        $this->orderBy('data_id', 'desc');
        if(!empty($params['search_android_roi'])){
            $searchAndroidRoi = $params['search_android_roi'];
            $likeArr = [
                'app_in' => $searchAndroidRoi,
                'app_out' => $searchAndroidRoi,
                'app_margin' => $searchAndroidRoi,
                'app_roi' => $searchAndroidRoi,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_android_roi_status'])){
            $searchAndroidRoiStatus = $params['search_android_roi_status'];
            $this->where('data_status', $searchAndroidRoiStatus);
        }
        if(!empty($params['search_android_roi_start_date']) && !empty($params['search_android_roi_end_date'])){
            $searchAndroidRoiStartDate = $params['search_android_roi_start_date'];
            $searchAndroidRoiEndDate = $params['search_android_roi_end_date'];
        
            $this->where("app_date BETWEEN '$searchAndroidRoiStartDate' AND '$searchAndroidRoiEndDate'");
        }
        $this->where('app_id', $appID);
        $this->where('app_month', date('m-Y'));
        return $this->paginate($perPage);
    }
    
    public function countRoiData($params, $appID, $perPage){
        $this->orderBy('data_id', 'desc');
        if(!empty($params['search_android_roi'])){
            $searchAndroidRoi = $params['search_android_roi'];
            $likeArr = [
                'app_in' => $searchAndroidRoi,
                'app_out' => $searchAndroidRoi,
                'app_margin' => $searchAndroidRoi,
                'app_roi' => $searchAndroidRoi,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_android_roi_status'])){
            $searchAndroidRoiStatus = $params['search_android_roi_status'];
            $this->where('data_status', $searchAndroidRoiStatus);
        }
        if(!empty($params['search_android_roi_start_date']) && !empty($params['search_android_roi_end_date'])){
            $searchAndroidRoiStartDate = $params['search_android_roi_start_date'];
            $searchAndroidRoiEndDate = $params['search_android_roi_end_date'];
        
            $this->where("app_date BETWEEN '$searchAndroidRoiStartDate' AND '$searchAndroidRoiEndDate'");
        }
        $this->where('app_id', $appID);
        $this->where('app_month', date('m-Y'));
        return $this->countAllResults($perPage);
    }
    
    public function moreRoiData($params, $appID, $perPage){
        $this->orderBy('data_id', 'desc');
        if(!empty($params['search_android_more_roi'])){
            $searchAndroidMoreRoi = $params['search_android_more_roi'];
            $likeArr = [
                'app_in' => $searchAndroidMoreRoi,
                'app_out' => $searchAndroidMoreRoi,
                'app_margin' => $searchAndroidMoreRoi,
                'app_roi' => $searchAndroidMoreRoi,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_android_more_roi_status'])){
            $searchAndroidMoreRoiStatus = $params['search_android_more_roi_status'];
            $this->where('data_status', $searchAndroidMoreRoiStatus);
        }
        if(!empty($params['search_android_more_roi_start_date']) && !empty($params['search_android_more_roi_end_date'])){
            $searchAndroidMoreRoiStartDate = $params['search_android_more_roi_start_date'];
            $searchAndroidMoreRoiEndDate = $params['search_android_more_roi_end_date'];
        
            $this->where("app_date BETWEEN '$searchAndroidMoreRoiStartDate' AND '$searchAndroidMoreRoiEndDate'");
        }
        $this->where('app_id', $appID);
        return $this->paginate($perPage);
    }
    
    public function countMoreRoiData($params, $appID, $perPage){
        $this->orderBy('data_id', 'desc');
        if(!empty($params['search_android_more_roi'])){
            $searchAndroidMoreRoi = $params['search_android_more_roi'];
            $likeArr = [
                'app_in' => $searchAndroidMoreRoi,
                'app_out' => $searchAndroidMoreRoi,
                'app_margin' => $searchAndroidMoreRoi,
                'app_roi' => $searchAndroidMoreRoi,
            ];
            $this->orLike($likeArr);
        }
        if(!empty($params['search_android_more_roi_status'])){
            $searchAndroidMoreRoiStatus = $params['search_android_more_roi_status'];
            $this->where('data_status', $searchAndroidMoreRoiStatus);
        }
        if(!empty($params['search_android_more_roi_start_date']) && !empty($params['search_android_more_roi_end_date'])){
            $searchAndroidMoreRoiStartDate = $params['search_android_more_roi_start_date'];
            $searchAndroidMoreRoiEndDate = $params['search_android_more_roi_end_date'];
        
            $this->where("app_date BETWEEN '$searchAndroidMoreRoiStartDate' AND '$searchAndroidMoreRoiEndDate'");
        }
        $this->where('app_id', $appID);
        return $this->countAllResults();
    }
    
    public function getAllTopApps(){
        $builder = $this->db->table('android_roi t');
        $builder->select('t.app_id, u.*, sum(t.app_in) as total_in, sum(t.app_out) as total_out, (((sum(t.app_out) * 100 ) / sum(t.app_in)) - 100) as total_roi', false);
        $builder->join('android_apps u', 't.app_id = u.app_id');
        $builder->groupBy('t.app_id');
        $builder->orderBy('total_roi', 'DESC');
        $builder->limit(5);
        $query = $builder->get();
        return $query->getResult();
    }
    
    public function getAllDownApps(){
        $builder = $this->db->table('android_roi t');
        $builder->select('t.app_id, u.*, sum(t.app_in) as total_in, sum(t.app_out) as total_out, (((sum(t.app_out) * 100 ) / sum(t.app_in)) - 100) as total_roi', false);
        $builder->join('android_apps u', 't.app_id = u.app_id');
        $builder->groupBy('t.app_id');
        $builder->orderBy('total_roi', 'ASC');
        $builder->limit(5);
        $query = $builder->get();
        return $query->getResult();
    }
    
    public function getChartData($startDate, $endDate){
        $query = $this->db->table('android_roi')
            ->select('*')
            ->select('COUNT(DISTINCT DATE(app_date)) as day_count')
            ->selectSum('app_margin', 'app_margin')
            ->selectAvg('app_roi', 'app_roi')
            ->where("app_date BETWEEN '$startDate' AND '$endDate'")
            ->groupBy('app_id')
            ->orderBy('app_date', 'ASC')
            ->limit(10);
    
        $result = $query->get();
        return $result->getResultArray();
    }
}
