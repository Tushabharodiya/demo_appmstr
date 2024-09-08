<?php
    require 'vendor/autoload.php';
    use Aws\S3\S3Client;
    use Aws\S3\Exception\S3Exception;
    
    if ( ! function_exists('timeZone')){
        function timeZone(){
            date_default_timezone_set('Asia/Kolkata');
            $timeZone = date("d/m/Y h:i:s A");
            return $timeZone;
        }
    }
    
    if ( ! function_exists('get_first_letters')){
        function get_first_letters($str)
        {
            $words = explode(' ', $str);
            $firstLetters = array_map(function ($word) {
                return substr($word, 0, 1);
            }, $words);
            return implode('', $firstLetters);
        }
    }
    
    if ( ! function_exists('getconfig')){
        function getconfig(){
            $s3Client = new S3Client([
                'version' => 'latest',
                'region'  => S3_REGION,
                'credentials' => [
                    'key'    => S3_KEY,
                    'secret' => S3_SECRET
                ]            
            ]);
            return $s3Client;
        }
    }
    
    if ( ! function_exists('newBucketObject')){
        function newBucketObject($objectName, $objectTemp, $objectPath){
            $isLogin = checkAuth();
            if($isLogin == "True"){ 
                date_default_timezone_set("Asia/Kolkata");
                $s3Client = getconfig();
                $extObject = explode(".", $objectName);
                $newObject = end($extObject);
                $objectName = strtolower(date('Ymdhis').'.'.$newObject);
                $result = $s3Client->putObject([
                    'Bucket' => BUCKET_NAME,
                    'Key'    => $objectPath.$objectName,
                    'SourceFile' => $objectTemp,
                    'ACL'    => 'public-read', 
                ]);
                return $result->get('ObjectURL');
            } else {
                redirect('logout');
            }
        }
    }
    
    if ( ! function_exists('checkAuth')){
        function checkAuth(){
            if(!empty(session('user_key'))){
                if(session('auth_key') == AUTH_KEY){
                    $loginModel = new \App\Models\LoginModel();
                    $userKey = session('user_key');
                    $userData = $loginModel->where('user_key', $userKey)->first();
                    if($userData){
                        $isLogin = $userData['is_login'];
                    } else {
                        return redirect()->to('error');
                    }
                } else {
                    return redirect()->to('error');
                }
            } else {
                return redirect()->to('error');
            }
            return $isLogin;
        }
    }
    
    if ( ! function_exists('urlEncodes')){
        function urlEncodes($dataID = 0){
            date_default_timezone_set("Asia/Kolkata");
            if($dataID != null){
                $uniqKey = 0710;
                $dateString = $uniqKey.''.date('iH').''.$dataID;
                $dataLength = strlen($dateString);
                $encodeArray = array();
                $arrayKey = array('0'=>'5846ca', '1'=>'c56da5', '2'=>'69adc4', '3'=>'a56f49', '4'=>'6adc26', '5'=>'5a89db', '6'=>'d5487c', '7'=>'ac56df', '8'=>'ac658c', '9'=>'75dca8');
                for($i = 0; $i < $dataLength; $i++){   
                    array_push($encodeArray, $arrayKey[$dateString[$i]]);
                }
                $encodeURL = implode("xe", $encodeArray); 
            } else {
                $encodeURL = null;
            }
            return $encodeURL;
        }
    }
    
    if ( ! function_exists('urlDecodes')){
        function urlDecodes($dataURL = 0){
            date_default_timezone_set("Asia/Kolkata");
            if($dataURL != null or !empty($dataURL)){
                $dataArray = explode("xe", $dataURL);
                $dataLength = count($dataArray);
                $decodeArray = array();
                $arrayKey = array('0'=>'5846ca', '1'=>'c56da5', '2'=>'69adc4', '3'=>'a56f49', '4'=>'6adc26', '5'=>'5a89db', '6'=>'d5487c', '7'=>'ac56df', '8'=>'ac658c', '9'=>'75dca8');
                for($i = 0; $i < $dataLength; $i++){   
                    $dataKey = array_search($dataArray[$i], $arrayKey);
                    array_push($decodeArray, $dataKey);
                }
                $decodeURL = substr(implode("", $decodeArray), 7);
            } else {
                $decodeURL = null;
            }
            return $decodeURL;
        }
    }
    
    if ( ! function_exists('isApiValidation')){
        function isApiValidation($apiAuth){
            if($apiAuth != null){
                if($apiAuth == "KF-LH-QL-VF-56-89-15-64-ED-HJ-JU-QS"){
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
    
    if (!function_exists('current_url_with_query')) {
        function current_url_with_query()
        {
            $currentURL = current_url();

            $queryString = $_SERVER['QUERY_STRING'];
            
            if (!empty($queryString)) {
                $currentURL .= '?' . $queryString;
            }
            
            return $currentURL;

        }
    }