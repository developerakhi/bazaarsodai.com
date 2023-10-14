<?php
include_once 'functions.php'; 

 if (isset($_POST['toUser'])) {

    $toUser = filter_input(INPUT_POST, 'toUser');
    $messageContent = filter_input(INPUT_POST, 'messageContent');
    
     //request parameters array
        $requestParams = array(
            'apikey' => $apikey,
            'secretkey' => $secretkey,
            'callerID' => $callerID,
            'toUser' => $toUser,
            'messageContent' => $messageContent
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

  
 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO inbox (contacts, msg) VALUES (?, ?)")) {
            $insert_stmt->bind_param('ss', $toUser, $messageContent);
            $insert_stmt->execute();
        }
		

		
		header('Location: ../message.php?sms=success');
 
}
?>






