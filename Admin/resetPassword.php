<?php
	require 'config.php';

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	$msg="";
	if(isset($_GET['email']) && isset($_GET['token'])){
		$email =$_GET['email'];
		$token =$_GET['token'];

		
		
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
			
			if($stmt = $conn->prepare("SELECT id FROM users WHERE email = ? AND token=? AND token<>'' AND tokenExpire>NOW()")){
				$stmt -> bind_param('ss', $email, $token);
    			$stmt->execute();
    			$stmt->store_result();
				$assoc_array = fetchAssocStatement($stmt);

				if (count($assoc_array)>0){
                	if(isset($_POST['submit'])){
						$newpass=sha1($_POST['newpass']);
						$cnewpass=sha1($_POST['cnewpass']);
						
						if($newpass==$cnewpass){
							$stmt_u = $conn->prepare("UPDATE users SET token='', pass=? WHERE email=?");
							$stmt_u->bind_param("ss", $newpass, $email);
							$stmt_u->execute();
							
							$msg="Password changed successfully<br><a href='login.php'>Login Here</a>";
						}
						
						else{
							$msg = "Pasword did not match!";
						}
						
					}
					
            	}
				
				else{
					header("location:login.php");
					exit();
				}
				
			}
	}
	else{
		header("location:login.php");
		exit();
	}
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    



</head>

<body class="bg-dark">


    <div class="login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
<!--                        <img class="align-content" src="images/logo.png" alt="">-->
                    </a>
                </div>
<!--
                <div class="text-center">
                	<img src="preloader.gif" width="50" height="50" class="m-2" id="loader" alt="preloader">
                </div>
-->
                
                <div class="login-form">
<!-- resetPassword -->
                    <div>
                        <form  action="" method="post" role="form" class="p-2" id="forgot-frm">
                            <div class="form-group">
                                <h2 class="text-center mt-2">Reset your password here! </h2>
                                <div class="form-group">
                                    <h4 class="text-success text-center"><?= $msg; ?></h4>
                                </div>
                                <input type="password" name="newpass" class="form-control" placeholder="New Password" required>
                            </div>
                                
                            <div class="form-group">
    
                                <input type="password" name="cnewpass" class="form-control" placeholder="New Password" required>
                            </div>

                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value="Update Password">
                                </div>
                                    <div class="register-link m-t-15 text-center">
                                        <p> <a href="#" id="back-btn"> Back</a></p>
                                    </div>
                        </form>
                    </div>

                  </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js">
    </script> 
    <script src="assets/js/main.js"></script>
</body>

</html>
