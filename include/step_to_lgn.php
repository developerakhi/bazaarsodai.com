<?php
include_once 'functions_lgn.php';
sec_session_start(); 

if (isset($_POST['mobile'])) {

    $user_mobile = filter_input(INPUT_POST, 'mobile');
    $messageContent = mt_rand(10000, 99999);
    $password = hash('sha512', $user_mobile );
    $yourName = 'Your Name';
    
     //request parameters array
        $requestParams = array(
            'apikey' => $apikey,
            'secretkey' => $secretkey,
            'callerID' => $callerID,
            'toUser' => $user_mobile,
            'messageContent' => 'Your bazaarsodai OTP is '.$messageContent.' . It will expire in 5 minutes'
        );
        
        //merge API url and parameters
        $apiUrl = "http://188.138.41.146:7788/sendtext?";
        foreach($requestParams as $key => $val){
            $apiUrl .= $key.'='.urlencode($val).'&';
        }
        $apiUrl = rtrim($apiUrl, "&");
        
        //API call
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
        curl_close($ch);
        
        
        global $mysqli;
        $testMobile = $mysqli->prepare("SELECT mobile FROM sd_client WHERE mobile = '".$user_mobile."'");
        $testMobile->execute();   
        $testMobile->store_result();
        $testMobile->bind_result($old_mobile);
        $testMobile->fetch();
        $testMobile->close();
        
        if ($user_mobile != $old_mobile) {
        
            if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_client (mobile, otp_number, password, name) VALUES (?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssss', $user_mobile, $messageContent, $password, $yourName);
            $insert_stmt->execute();
            }
        
        }else{
            
            if ($insert_stmt = $mysqli->prepare("UPDATE sd_client SET otp_number=? WHERE mobile = ? LIMIT 1")){
    		$insert_stmt->bind_param('ss', $messageContent, $user_mobile);
            $insert_stmt->execute();
    		}
            
        }
        
     
     header('Location: ../user_otp/'.$user_mobile.'');

}

 

 
if (isset($_POST['mobile_no'], $_POST['otp_number'])) {
    
    $user_mobile = $_POST['mobile_no'];
    $otp_number = $_POST['otp_number']; 
    $password = $_POST['p']; 
	$prev = $_POST['prev'];
 
    if (login($user_mobile, $otp_number, $password, $mysqli) == true) {
        // Login success 
	 if($prev != ''){
		  header('Location: ../promote_ads/'.$prev.'');
		 }
	 else{
        header('Location: https://bazaarsodai.com/');
	 }
    } else {
        // Login failed 
        header('Location: ../login.php?action=error');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
?>