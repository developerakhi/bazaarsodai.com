<?php 
ob_start();
include_once 'db_connect.php';
 function sec_session_start() {
    
 if(!isset($_SESSION)){
		session_start();
	}
  $bob = session_id();
	return $bob;
		
	if ( !is_writable(session_save_path()) ) {
	   echo 'Session save path "'.session_save_path().'" is not writable!'; 
	}
}

function login($user_mobile, $otp_number, $password, $mysqli) {
        if ($stmt = $mysqli->prepare("SELECT id, username, otp_number, password, salt FROM sd_client WHERE mobile = ? LIMIT 1")) {
        $stmt->bind_param('s', $user_mobile);  
        $stmt->execute();    
        $stmt->store_result();
        $stmt->bind_result($user_id, $username, $otpNumber, $db_password, $salt);
        $stmt->fetch();
 
      
        $password = hash('sha512', $password . $salt);
        if ($stmt->num_rows == 1) {
            // If the user exists we check if the account is locked
            // from too many login attempts 
 
            if (checkbrute($user_id, $mysqli) == true) {
                // Account is locked 
                // Send an email to user saying their account is locked
                return false;
            } else {
                // Check if the password in the database matches
                // the password the user submitted.
                if ($otpNumber == $otp_number) {
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection as we might print this value
                    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                    $_SESSION['user_id'] = $user_id;
                    // XSS protection as we might print this value
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', 
                    $password . $user_browser);
                    // Login successful.
                    return true;
                } else {
                    // Password is not correct
                    // We record this attempt in the database
                    $now = time();
                    $mysqli->query("INSERT INTO login_attempts(user_id, time)
                                    VALUES ('$user_id', '$now')");
                    return false;
                }
            }
        } else {
            // No user exists.
            return false;
        }
    }
}


function checkbrute($user_id, $mysqli) {
    // Get timestamp of current time 
    $now = time();
 
    // All login attempts are counted from the past 2 hours. 
    $valid_attempts = $now - (2 * 60 * 60);
 
    if ($stmt = $mysqli->prepare("SELECT time  FROM login_attempts  WHERE user_id = ?  AND time > '$valid_attempts'")) {
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->store_result();
 
        // If there have been more than 5 failed logins 
        if ($stmt->num_rows > 5) {
            return true;
        } else {
            return false;
        }
    }
}

function login_check($mysqli) {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'],  $_SESSION['username'],  $_SESSION['login_string'])) {
        
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];
 
        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
 		global $mysqli;	
        if ($stmt = $mysqli->prepare("SELECT password FROM sd_client  WHERE id = ? LIMIT 1")) {
        $stmt->bind_param('i', $user_id);
        $stmt->execute();   // Execute the prepared query.
        $stmt->store_result();
 				
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);
 
                if ($login_check == $login_string) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Not logged in 
            return false;
        }
    } else {
        // Not logged in 
        return false;
    }
}

function esc_url($url) {
 
    if ('' == $url) {
        return $url;
    }
 
    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
 
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
 
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
 
    $url = str_replace(';//', '://', $url);
 
    $url = htmlentities($url);
 
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);
 
    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}

    function testing_loggin(){
            sec_session_start(); 
            if(login_check($mysqli) == true) {
               echo "";
            } 
            else 
			{ 
               header("Location:login");
            }

        return ;
    }

        function change_mod($file_for_check, $mod){

                $msg = "";
                
                    if (chmod($file_for_check,$mod)) {
                        
                        $msg ="<p class='text-primary' >Permisions sucessfully changed. </p> " ;

                    }
                    else {
                        $msg = "<p class='text-warning' >Unable to change permisions. Please do it manually. Set chmod of file 'register.php' to 0000 </p> ";
                    }
                     $msg .= "<p> File permision is set to: "  . substr(sprintf('%o', fileperms($file_for_check)), -4). "</p>";
                return ;
            }
			

 ?>