<?php 
	
	require 'session.php';
	
//	print_r($assoc_array);
//	print_r($assoc_array['username']);

//	$_SESSION['username'] = $assoc_array['username'];
//
//	$dbhost = "localhost";
//    $dbuser = "root";
//    $dbpass = "root";
//    $dbname = "cube_test";
//
//    $conn  = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
//    if($conn->connect_error){
//        die("Could not connect to the database!" . $conn->connect_error);
//    }
//    else {
//        echo "Connected successfully";
//    }

?>




<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	<!--      <link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="
         https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<style type="text/css">
		/*
		  .quizsetting{
		height: 1400px;
}
*/

		.animateuse {
			animation: leelaanimate 0.5s infinite;
		}

		@keyframes leelaanimate {
			0% {
				color: red
			}

			,
			10% {
				color: yellow
			}

			,
			20% {
				color: blue
			}

			40% {
				color: green
			}

			,
			50% {
				color: pink
			}

			60% {
				color: orange
			}

			,
			80% {
				color: black
			}

			,
			100% {
				color: brown
			}
		}

	</style>
</head>

<body>
	<div class="container">
	
		<div class=" col-lg-12 text-center">
            <h3> <a href="#" class="text-uppercase text-warning"> <?php echo $_SESSION['username']; ?>,</a> Welcome to Quiz </h3>
        </div>
        
        
        <div class="col-lg-8 d-block m-auto bg-light">
        
        <div class="card">
                  <p class="card-header text-center" > <?php echo $_SESSION['username']; ?>, you have to select only one out of 4. Best of Luck <i class="fa fa-thumbs-up"></i>	 </p>
        </div><br>
        
        <form action="checked.php" method="POST">
        
        <?php
			
			for($i=1;$i<6;$i++){
			$sql1 = "SELECT * FROM `question` WHERE ques_id=$i";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)) {
        			?>				
                	<br>
                	<div class="card">
                    <p class="card-header">  <?php echo $row1['question']; ?> </p>
                    
                    
                   <?php
						$sql = "SELECT * FROM `answer` WHERE ans_id=$i";
						$result1 = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result1) > 0) {
							while($row1 = mysqli_fetch_assoc($result1)) {
//								print_r($row1);
								?>
								
								<div class="card-body">
								<input type="radio" name="quizcheck[<?php echo $row1['ans_id']; ?>]" value="<?php echo $row1['a_id']; ?>">
								<?php echo $row1['answer']; ?>
								</div>
					
					
					<?php
							}
						}
					?> 
                    
                    
                    
                    
		<?php
				}
			}
			
		}
		
		
		?>
       
        <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>				
        </form>		
        </div>
        </div>
        <br>
		<a href="logout.php" class="btn btn-primary d-block m-auto text-white" > Logout </a> <br>
        
		
	</div>

</body>

</html>
