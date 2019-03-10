<?php
    require '../functions/config.php';
//	require 'phpmailer/PHPMailerAutoload.php';
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	


	ini_set('display_errors', 'On');
	error_reporting(E_ALL);


    if(isset($_POST['action']) && $_POST['action'] == 'register'){
		$uname = check_input($_POST['uname']);
        $email = check_input($_POST['email']);
        $pass = check_input($_POST['pass']);
        $cpass = check_input($_POST['cpass']);
        $pass = sha1($pass);
        $cpass = sha1($cpass);
        $created = date('Y-m-d');
		
		if($pass!= $cpass){
            echo "Password did not matched!";
            exit();
        }
		
        else{
			
			function fetchAssocStatement($stmt){
			if($stmt->num_rows>0)
			{
				$result = array();
				$md = $stmt->result_metadata();
				$params = array();
				while($field = $md->fetch_field()) {
					$params[] = &$result[$field->name];
				}
				call_user_func_array(array($stmt, 'bind_result'), $params);
				if($stmt->fetch())
					return $result;
			}

    		return null;
			}
			
			if($stmt = $conn->prepare("SELECT username,email FROM users WHERE username=? OR email = ?")){
				$stmt -> bind_param('ss', $uname, $email);
    			$stmt->execute();
    			$stmt->store_result();
				$assoc_array = fetchAssocStatement($stmt);
//				print_r($assoc_array);
				if ($assoc_array['username'] == $uname) {
                	echo "Username not availabe try different one";
					
            	}
            	elseif ($assoc_array['email']==$email) {
                	echo "Email is already taken try diiferent one";
					
            	}
            	else {
                	$stmt = $conn -> prepare("INSERT INTO users (username, email, pass, created) VALUES (?, ?, ?, ?)");
                	$stmt -> bind_param('ssss', $uname, $email, $pass, $created);
                	if ($stmt->execute()) {
                    	echo "Registrated sucessfully. Login Now!";
		
					}
                	else {
                    	echo "Something went wrong. Please try again";
                	}
            	}
    			$stmt->close();
			}
			
			
			
			
        }
			
	}
//code starts for login system

	if(isset($_POST['action']) && $_POST['action'] == 'login'){
		session_start();
		
		$email = $_POST['email'];
		$password = sha1($_POST['pass']);
		
//		echo $email.$password;
		
		
		function fetchAssocStatement($stmt){
			if($stmt->num_rows>0)
			{
				$result = array();
				$md = $stmt->result_metadata();
				$params = array();
				while($field = $md->fetch_field()) {
					$params[] = &$result[$field->name];
				}
				call_user_func_array(array($stmt, 'bind_result'), $params);
				if($stmt->fetch())
					return $result;
			}

    		return null;
			}
		
		
		if($stmt_l = $conn->prepare("SELECT email, pass FROM users WHERE email=? AND pass=?")){
				$stmt_l -> bind_param('ss', $email, $password);
    			$stmt_l->execute();
    			$stmt_l->store_result();
				$assoc_array = fetchAssocStatement($stmt_l);
//				print_r($assoc_array['email']);
//				$assoc_array['email']==$email && $assoc_array['pass'] ==$password 
			if ($assoc_array!=null){
				$_SESSION['email']=$email;
				echo "ok";

				if(!empty($_POST['rem'])){
					setcookie("email",$_POST['email'],time()+(10*365*24*60*60));
					setcookie("password",$_POST['pass'],time()+(10*365*24*60*60));

				}

				else{
					if(isset($_COOKIE['email'])){
						setcookie("email","");

					}
					if(isset($_COOKIE['password'])){
						setcookie("password","");
					}

				}	
			}
			else{
				echo 'Login failed Check your email and password!';
			}
				
		}	
			
	}


//code starts for forgot password system


	if(isset($_POST['action']) && $_POST['action'] == 'forgot'){
		$femail=$_POST['femail'];
//		echo $femail;
		
		
		function fetchAssocStatement($stmt){
			if($stmt->num_rows>0)
			{
				$result = array();
				$md = $stmt->result_metadata();
				$params = array();
				while($field = $md->fetch_field()) {
					$params[] = &$result[$field->name];
				}
				call_user_func_array(array($stmt, 'bind_result'), $params);
				if($stmt->fetch())
					return $result;
			}

    		return null;
		}
		
		
		if($stmt_p = $conn->prepare("SELECT id FROM users WHERE email=?")){
				$stmt_p -> bind_param('s', $femail);
    			$stmt_p->execute();
    			$stmt_p->store_result();
				$assoc_array = fetchAssocStatement($stmt_p);
			
//				print_r($assoc_array);
			
				if (count($assoc_array) > 0) {
					$token = "qwertyuiopasdfghjklzxcvbnm1234567890";
					$token = str_shuffle($token);
					$token = substr($token, 0,10);
//					$femail = '';

					$stmt_i = $conn->prepare("UPDATE users SET token=?, tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email=?");
					$stmt_i->bind_param("ss", $token, $femail);
					$stmt_i->execute();
					$result = $stmt_i->affected_rows;
//                    echo $result;
					
					

					//Load Composer's autoloader
					// require '.../vendor/autoload.php';

					require './PHPMailer/src/PHPMailer.php';
					require './PHPMailer/src/Exception.php';

					require './PHPMailer/src/SMTP.php';

					$mail = new PHPMailer(true);
//					echo $femail.$token;
					try {
						//Server settings
//						$mail->SMTPDebug = 2;
						$mail->isSMTP();                                      
						$mail->Host = 'smtp.gmail.com';
						$mail->SMTPAuth = true;
						
						$mail->Username = 'prachandk05@gmail.com';
						$mail->Password = 'jayyadav@1234';
						
						$mail->Port = 587; 
						$mail->SMTPSecure = 'tls';
						//Recipients
						$mail->setFrom('prachandk05@gmail.com', 'Course Cube');
						$mail->addAddress($femail);     // Add a recipient

						//Content
						$mail->isHTML(true);
						$mail->Subject = 'Reset Password';
						
						$mail->Body = "<h3>Click the link to reset your password</h3><br><a href= 'http://localhost/BP%20-%20Copy/Admin/resetPassword.php?email=$femail&token=$token'>http://localhost/BP%20-%20Copy/Admin/resetPassword.php?email=$femail&token=$token</a><br><h3>Regards<br>Moon</h3>";
						
//						$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

						$mail->send();
						echo 'Check your email to reset your password';
					} catch (Exception $e) {
						echo 'Mail could not be sent. Mailer Error: ', $mail->ErrorInfo;
					}

					
					
					
				} // count end
				
				else{
					echo "Please enter a registered email";
				}
			
		}// id end
		
	} //forgot end
	

    function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	
 ?>
