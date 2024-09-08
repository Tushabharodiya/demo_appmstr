<?php

namespace App\Controllers;

use App\Models\AndroidJsonModel;
use App\Models\AndroidBannerModel;

class Json extends BaseController
{
    public function jsonEdit($jsonID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $jsonID = urlDecodes($jsonID);
            if(ctype_digit($jsonID)){
                $androidJsonModel = new AndroidJsonModel();
                $androidBannerModel = new AndroidBannerModel();
                
                $data['androidJsonData'] = $androidJsonModel->getData($jsonID);
                $data['androidBannerData'] = $androidBannerModel->viewAndroidBanner();
                $data['appID'] = $data['androidJsonData']['app_id'];
                
                if($this->request->getMethod() === 'post'){
                    $jsonArray = $this->request->getPost('data_json') ?? [];
        
                    $jsonString = implode(',', $jsonArray);

                    $editData = [
                        'json_data' => $jsonString
                    ];
            
                    $editDataEntry = $androidJsonModel->editData($jsonID, $editData);
                    if($editDataEntry){
                        return redirect()->to('info-app/'.urlEncodes($data['appID']));
                    }
                    
                }
                return view('header')
                    . view('json/json_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
}