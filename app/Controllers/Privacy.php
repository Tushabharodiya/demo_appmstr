<?php

namespace App\Controllers;

use App\Models\AndroidPrivacyModel;

class Privacy extends BaseController
{
    public function privacyEdit($privacyID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $privacyID = urlDecodes($privacyID);
            if(ctype_digit($privacyID)){
                $androidPrivacyModel = new AndroidPrivacyModel();

                $data['androidPrivacyData'] = $androidPrivacyModel->getData($privacyID);
                $data['appID'] = $data['androidPrivacyData']['app_id'];
                
                if($this->request->getMethod() === 'post'){
                    $editData = [
                        'privacy_slug' => $this->request->getPost('privacy_slug'),
                        'privacy_policy' => $this->request->getPost('privacy_policy'),
                        'privacy_terms' => $this->request->getPost('privacy_terms'),
                        'privacy_status' => $this->request->getPost('privacy_status'),
                    ];
                    $editDataEntry = $androidPrivacyModel->editData($privacyID, $editData);
                    if($editDataEntry){
                        return redirect()->to('info-app/'.urlEncodes($data['appID']));
                    }
                }
                return view('header')
                    . view('privacy/privacy_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
}