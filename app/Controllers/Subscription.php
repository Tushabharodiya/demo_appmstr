<?php

namespace App\Controllers;

use App\Models\AndroidSubscriptionModel;

class Subscription extends BaseController
{
    public function subscriptionNew($appID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $appID = urlDecodes($appID);
            if(ctype_digit($appID)){
                $androidSubscriptionModel = new AndroidSubscriptionModel();

                $data['appID'] = $appID;

                if($this->request->getMethod() === 'post'){
                    $newData = [
                        'app_id' => $appID,
                        'subscription_code' => $this->request->getPost('subscription_code'),
                        'subscription_title_one' => $this->request->getPost('subscription_title_one'),
                        'subscription_title_two' => $this->request->getPost('subscription_title_two'),
                        'subscription_title_three' => $this->request->getPost('subscription_title_three'),
                        'subscription_title_four' => $this->request->getPost('subscription_title_four'),
                        'subscription_offer' => $this->request->getPost('subscription_offer'),
                        'subscription_primary' => $this->request->getPost('subscription_primary'),
                        'subscription_status' => $this->request->getPost('subscription_status'),
                    ];
                    $newDataEntry = $androidSubscriptionModel->insertData($newData);
                    if($newDataEntry){
                        return redirect()->to('info-app/'.urlEncodes($appID));
                    }
                } 
                return view('header')
                . view('subscription/subscription_new', $data)
                . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function subscriptionInfo($subscriptionID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $subscriptionID = urlDecodes($subscriptionID);
            if(ctype_digit($subscriptionID)){
                $androidSubscriptionModel = new AndroidSubscriptionModel();
                $data['infoSubscription'] = $androidSubscriptionModel->getData($subscriptionID);
                $data['appID'] = $data['infoSubscription']['app_id'];
                return view('header')
                    . view('subscription/subscription_info', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
    
    public function subscriptionEdit($subscriptionID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $subscriptionID = urlDecodes($subscriptionID);
            if(ctype_digit($subscriptionID)){
                $androidSubscriptionModel = new AndroidSubscriptionModel();
                
                $data['subscriptionData'] = $androidSubscriptionModel->getData($subscriptionID);
                $data['appID'] = $data['subscriptionData']['app_id'];
                if($this->request->getMethod() === 'post'){
                    $editData = [
                        'subscription_code' => $this->request->getPost('subscription_code'),
                        'subscription_title_one' => $this->request->getPost('subscription_title_one'),
                        'subscription_title_two' => $this->request->getPost('subscription_title_two'),
                        'subscription_title_three' => $this->request->getPost('subscription_title_three'),
                        'subscription_title_four' => $this->request->getPost('subscription_title_four'),
                        'subscription_offer' => $this->request->getPost('subscription_offer'),
                        'subscription_primary' => $this->request->getPost('subscription_primary'),
                        'subscription_status' => $this->request->getPost('subscription_status'),
                    ];
                    $editDataEntry = $androidSubscriptionModel->editData($subscriptionID, $editData);
                    if($editDataEntry){
                        return redirect()->to('info-app/'.urlEncodes($data['appID']));
                    }
                }
                return view('header')
                    . view('subscription/subscription_edit', $data)
                    . view('footer');
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }

    public function subscriptionDelete($subscriptionID = 0){
        $isLogin = checkAuth();
        if($isLogin == "True"){
            $subscriptionID = urlDecodes($subscriptionID);
            if(ctype_digit($subscriptionID)){
                $androidSubscriptionModel = new AndroidSubscriptionModel();
                
                $data['subscriptionData'] = $androidSubscriptionModel->getData($subscriptionID);
                $appID = $data['subscriptionData']['app_id'];
                
                $resultDataEntry = $androidSubscriptionModel->deleteData($subscriptionID);
                if($resultDataEntry){
                    return redirect()->to('info-app/'.urlEncodes($appID));
                }
            } else {
                return redirect()->to('error');
            }
        } else {
            return redirect()->to('logout');
        }
    }
}