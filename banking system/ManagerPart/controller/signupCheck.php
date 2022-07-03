<?php 

session_start();
require_once('../model/usersModel.php');
	if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];	
		$username = $_REQUEST['username'];		
		$password = $_REQUEST['password'];
		$confirmPass = $_REQUEST['confirmPass'];
		$address = $_REQUEST['address'];
		 $designation = $_REQUEST['user'];
		 $dob = $_REQUEST['dob'];
		 $gender = $_REQUEST['gender'];
		 $email = $_REQUEST['email'];
		 $bloodGrp = $_REQUEST['bloodGrp'];
		 // $nidNo = $_REQUEST['nidNo'];
		 $education = $_REQUEST['education'];
		 $salary =$_REQUEST['salary'];
		 $picture =$_REQUEST['picture'];
		

		if($id != ""){
		 if($username  != "" && strlen($username)>2){
		  if($password != "" && strlen($password)>7){
		  	
		  if($confirmPass != ""){
				
           if($email !=""){	
          		
              if ($dob !="") {
           		
           		if ($gender !="") {
           			
           			if($bloodGrp !=""){
           		if($education !=""){
				 if ($password != $confirmPass) {
		 	
		  	        	echo "password does not match....!!!";
		         }else{
					$userlist= ['username'=>$username, 'password'=>$password, 'email'=>$email, 'dob'=>$dob, 'gender'=>$gender, 'address'=>$address, 'bg'=>$bloodGrp, 'designation'=>$designation, 'salary'=>$salary, 'education'=>$education, 'picture'=>$picture];

    
      
      $status= insertEmp($userlist);

      print_r($userlist);
      //print_r($status);
      if($status){
        header('location:../views/login.html');
      }else{ echo '<script>alert("data not Inserted")</script>';}
					
                }
       }else{
    	  echo "Please enter Educational history";
       }
                }else{
                	echo "Please enter blood group";
                }

				}else{
					echo "please enter gender type....";
				}

				}else{
					echo "please enter date of birth...";
				}				
				
				}else{
					echo "please enter email address.....";
				}
			 }else{
					echo "invalid retype password...";
				}
			}else{
				echo "invalid password...or password should be more than 7 characters";
			}
		}else{
			echo "invalid  name/name should be more than 2 words....";
		}
	}else{
		echo "invalid  id....";
	}	
}
?>