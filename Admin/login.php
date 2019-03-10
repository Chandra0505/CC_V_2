<?php
	session_start();
	if(isset($_SESSION['email'])){
		header("location:index.php");
	}
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    
    <style type="text/css">
    #alert, #register-box,#forgot-box,#loader{
        display: none;
    }
    </style>
    
    
</head>
<body class="bg-dark">

    <div class="login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <!-- <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a> -->
                </div>
                
                <div class="alert alert-success" id="alert">
                    <strong id="result"></strong>
                </div>
                <div class="text-center">
                	<img src="preloader.gif" width="50" height="50" class="m-2" id="loader" alt="preloader">
                </div>
                
                <div class="login-form">
<!-- login -->
                    <div id="login-box">
                        <form  action="" method="post" role="form" class="p-2" id="login-frm">
                            <div class="form-group">
                                <h2 class="text-center mt-2">LOGIN</h2>
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email']; } ?>">
                            </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pass" class="form-control" placeholder="Password" required minlength='6' value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password']; } ?>">
                                </div>
                                <div class="checkbox">
                                    <label>
                                    <input type="checkbox" name="rem" <?php if(isset($_COOKIE['email'])) {?> checked <? } ?> > Remember Me
                                	</label>
                                        <label class="pull-right">
                                    <a href="#" id="forgot-btn">Forgotten Password?</a>
                                </label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="login" id="login" class="btn btn-success btn-flat m-b-30 m-t-30" value="Log in">
                                </div>
                                    <div class="social-login-content">
                                        <!-- <div class="social-button">
                                            <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                        </div> -->
                                    </div>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#" id="register-btn"> Sign Up Here</a></p>
                                    </div>
                        </form>

                    </div>

<!-- registeration form -->

        <div id="register-box">
            <form action="" method="post" role="form" class="p-2" id="register-frm">
                <h2 class="text-center mt-2">REGISTER</h2>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="uname" class="form-control" placeholder="User Name" required minlength='6'>
                </div>
                <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Password" required minlength='6'>
                </div>
                <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="cpass" class="form-control" id="cpass" placeholder="Confirm Password" required minlength='6'>
                </div>
                <div class="checkbox">
                            <input type="checkbox">
                            <label>
                             <a href="#"> I agree to terms and conditions.</a>
                           </label>
                </div>

                <div class="form-group">
                    <input type="submit" name="register" id="register" class="btn btn-primary btn-flat m-b-30 m-t-30" value="REGISTER">
                </div>
                            <!-- <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>-->
                            <div class="social-login-content">
                                <!-- <div class="social-button">
                                    <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                                    <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                                </div> -->
                            </div>
                            <div class="register-link m-t-15 text-center">
                                <p>Already have account ? <a href="#" id="login-btn"> Sign in</a></p>
                            </div>
            </form>

        </div>

<!-- forgot -->
                    <div id="forgot-box">
                        <form  action="" method="post" role="form" class="p-2" id="forgot-frm">
                            <div class="form-group">
                                <h2 class="text-center mt-2">Reset Password</h2>
                                <div class="form-group">
                                    <small class="text-muted"> To resend your password enter your email address we will send reset password instructions on your email.
                                    </small>

                                </div>
                                <input type="email" name="femail" class="form-control" placeholder="Email" required>
                            </div>

                                <div class="form-group">
                                    <input type="submit" name="forgot" id="forgot" class="btn btn-success btn-flat m-b-30 m-t-30" value="Reset">
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


<!--    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>-->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js">
    </script>
    <script src="assets/js/main.js"></script>
    
    
    <script type="text/javascript">
		(function ($) {
			$(document).ready(function() {
				$("#register-btn").click(function() {
					$("#register-box").show();
					$("#login-box").hide();
				});
				$("#login-btn").click(function(){
					$("#register-box").hide();
					$("#login-box").show();
				});
				$("#forgot-btn").click(function(){
					$("#login-box").hide();
					$("#forgot-box").show();
				});
				$("#back-btn").click(function(){
					$("#forgot-box").hide();
					$("#login-box").show();
				});
				$("#login-frm").validate();
            $("#register-frm").validate({
                rules:{
                    cpass:{
                        equalTo:"#pass",
                    }
                }
            });
            $("#forgot-frm").validate();

            // submit form without refresh
            $("#register").click(function(e){
                if(document.getElementById("register-frm").checkValidity()){
                    e.preventDefault();
					$("#loader").show();
                    $.ajax({
                        url:'action.php',
                        method:'post',
                        data:$("#register-frm").serialize() + '&action=register',
                        success:function(response) {
                            $("#alert").show();
                            $("#result").html(response);
							$("#loader").hide();
                        }
                    });
                }
                return true;
            });

// for login form
            $("#login").click(function(e){
                if(document.getElementById("login-frm").checkValidity()){
                    e.preventDefault();
					$("#loader").show();
                    $.ajax({
                        url:'action.php',
                        method:'post',
                        data:$("#login-frm").serialize()+'&action=login',
                        success:function (response) {
							if(response==="ok"){
								window.location='index.php';	
							}
							else{
								$("#alert").show();
                            	$("#result").html(response);
								$("#loader").hide();
								
							} 
                        }
                    });
                }
                return true;
            });

// for forgot form
            $("#forgot").click(function(e){
                if(document.getElementById("forgot-frm").checkValidity()){
                    e.preventDefault();
					$("#loader").show();
                    $.ajax({
                        url:'action.php',
                        method:'post',
                        data:$("#forgot-frm").serialize()+'&action=forgot',
                        success:function (response) {
                            $("#alert").show();
                            $("#result").html(response);
							$("#loader").hide();
                        }
                    });
                }
                return true;
            });
		});
	})(jQuery);
</script>

</body>
</html>
