<?php 

require_once('../model/usersModel.php');
session_start();
	
	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
       
		if($username != ""){
			if($password != ""){
                   
					$status= validate($username, $password);
					 
					 if($status) {
					 	
					 	setcookie('flag', 'true', time()+3600, '/');
					 	header('location:../views/mHome.php');
					 }
					 else{
					 	header('location:../views/login.html');
					 }
                        
	 				} 
				 
                  else{
				       echo "invalid username/password...";

			        }
			}else{
				echo "invalid password...";
			}
		   
	}

?>