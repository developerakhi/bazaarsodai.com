<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();
	
		// Sanitize and validate the data passed in
		$img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
		$url = filter_input(INPUT_POST, 'ads_url', FILTER_SANITIZE_STRING);
		$adsence = filter_input(INPUT_POST, 'adsence');
		
		$p_1 = filter_input(INPUT_POST, 'top_1', FILTER_SANITIZE_STRING);
		$p_2 = filter_input(INPUT_POST, 'home_l_1', FILTER_SANITIZE_STRING);
		$p_3 = filter_input(INPUT_POST, 'home_l_2', FILTER_SANITIZE_STRING);
		$p_4 = filter_input(INPUT_POST, 'home_l_3', FILTER_SANITIZE_STRING);
		$p_5 = filter_input(INPUT_POST, 'home_l_4', FILTER_SANITIZE_STRING);
		$p_6 = filter_input(INPUT_POST, 'home_l_5', FILTER_SANITIZE_STRING);
		$p_7 = filter_input(INPUT_POST, 'home_l_6', FILTER_SANITIZE_STRING);
		$p_8 = filter_input(INPUT_POST, 'home_l_7', FILTER_SANITIZE_STRING);
		$p_9 = filter_input(INPUT_POST, 'home_l_8', FILTER_SANITIZE_STRING);
		$p_10 = filter_input(INPUT_POST, 'home_l_9', FILTER_SANITIZE_STRING);
		$m_h1 = filter_input(INPUT_POST, 'home_l_10', FILTER_SANITIZE_STRING);
		$m_h2 = filter_input(INPUT_POST, 'm_h_2', FILTER_SANITIZE_STRING);
		$m_h3 = filter_input(INPUT_POST, 'm_h_3', FILTER_SANITIZE_STRING);
		
		$m_r = filter_input(INPUT_POST, 'middle', FILTER_SANITIZE_STRING);
		
		$m_c1 = filter_input(INPUT_POST, 'm_c_1', FILTER_SANITIZE_STRING);
		$m_c2 = filter_input(INPUT_POST, 'm_c_2', FILTER_SANITIZE_STRING);
		$m_c3 = filter_input(INPUT_POST, 'm_c_3', FILTER_SANITIZE_STRING);
		$m_d1 = filter_input(INPUT_POST, 'm_d_1', FILTER_SANITIZE_STRING);
		$m_d2 = filter_input(INPUT_POST, 'm_d_2', FILTER_SANITIZE_STRING);
		
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_ads (image, url, adsence, p_1, p_2,	p_3, p_4, p_5, p_6, p_7, p_8, p_9, p_10, m_h1, m_h2, m_h3, m_r, m_c1, m_c2, m_c3, m_d1, m_d2, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssssssssssssssssssssss', $img, $url, $adsence, $p_1, $p_2, $p_3, $p_4, $p_5, $p_6, $p_7, $p_8, $p_9, $p_10, $m_h1, $m_h2, $m_h3, $m_r, $m_c1, $m_c2, $m_c3, $m_d1, $m_d2, $date);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../add_new_ads/3242165/success');
	
?>