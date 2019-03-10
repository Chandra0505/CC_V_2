<?php
	session_start();
	require 'config.php';
	$user = $_SESSION['email'];
	
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
			
			if($stmt = $conn->prepare("SELECT * FROM users WHERE email=?")){
				$stmt -> bind_param('s', $user);
    			$stmt->execute();
    			$stmt->store_result();
				$assoc_array = fetchAssocStatement($stmt);
//				print_r($assoc_array);
				
				$username = $assoc_array['username'];
				$email = $assoc_array['email'];
				$created = $assoc_array['created'];
//				echo $username.$email.$created;
				
				if(!isset($user)){
					header("location:login.php");
				}
				
				
				
			}



?>