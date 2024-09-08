<?php

namespace App\Controllers;

use App\Models\AndroidRoiModel;
use App\Models\AndroidAppsModel;

class DynamicChart extends BaseController
{
    public function index(){
        $androidRoiModel = new AndroidRoiModel();
        $androidAppsModel = new AndroidAppsModel();
        
        if($this->request->getMethod() === 'post'){    
            if($this->request->getPost('start_date') && $this->request->getPost('end_date')){
                $chartData = $androidRoiModel->getChartData(
                    $this->request->getPost('start_date'), $this->request->getPost('end_date')
                );
        
                $output = [];
        
                foreach($chartData as $row){
                    $appId = $row['app_id'];
                    $dayCount = $row['day_count'];
                    $appData = $androidAppsModel->getData($appId);
                    $appCode = $appData['app_code'];
                    
                    $output[] = [
                        'app_id' => $appCode,
                        'app_margin' => floatval($row['app_margin']),
                        'app_roi' => floatval($row['app_roi']),
                        'day_count' => $dayCount,
                    ];
                }
                return $this->response->setJSON($output);
            }
        }
    }
}
