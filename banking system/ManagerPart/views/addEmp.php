<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Employee</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Add Employee</h1></center>	
  		<a href="mHome.php"><button>Home</button></a>
  		<a href="../controller/logout.php"><button>Logout</button></a>
  	</td>
  	</tr>
  	<tr>		
  		<td width="150px" height="80px" >
  			<img width="150px" height="80px" src="logo.png">
  		</td>


  		<td width="700 px" bgcolor="grey">
        <center>
  		 <a href="employee.html"><button>Employee</button></a>
            <!--<a href="empInfo.php"><button>Employee Information</button></a> -->
            <a href="reportAdmin.php"><button>Report Admin</button></a>
            <a href="lockTransaction.php"><button>Lock Transaction</button></a>
            <!-- <a href="updateSalary.php"><button>Update Salary</button></a> -->
            <a href="meeting.php"><button>Call Meeting</button></a>
            <a href="reports.php"><button>Reports</button></a>
            <a href="freezeAccount.php"><button>Freeze Account</button></a>
            <a href="payroll.php"><button>Employee Payroll</button></a>
            <a href="requiredExp.php"><button>Required Expenses</button></a>
            <a href="branches.php"><button>Branches</button></a>
            <!-- <a href="empIncentive.php"><button>Employee Incentive</button></a> -->
        </center>
  		</td>

  	</tr>
  	<tr>		
  		<td  bgcolor="grey" height="300px"> 
  			<ul>
  			  <li>
  			    <a href="profile.php"><button>Profile</button></a>
  			  </li>
  			   <li>
  			    <a href="updateProfile.php"><button>Update Profile</button></a>
  			  </li>
        </ul> 
  		</td>

  		<td style=" background-image: url('backImage.jpg');">
        
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <center>
 <fieldset>
    <legend>ADD EMPLOYEE</legend>
    <table border="1" bgcolor="seagreen">
       
         <tr>
            <td>ID<br><input type="text" id="id" name="id" value=""><br></td>       
      </tr>
      <tr>
            <td>Userame<br><input type="text" id="username" name="username" value=""><br></td>       
      </tr>
      <tr>
            <td>Password<br><input type="password" name="password" value=""><br></td>       
      </tr>
      
      <tr>
            <td>Confirm Password<br><input type="password" name="confirmPass" value=""><br></td>       
      </tr>

       <tr>
            <td>Email<br><input type="email" name="email" value=""><br></td>       
      </tr>

      <tr>
            <td>Date of Birth<br><input type="date" name="dob" value=""><br></td>       
      </tr>
      
      <tr>
            <td>
                <b>Gender</b><br>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male"> Male
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female")echo "checked";?> value="Female"> Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="others"> others
            </td>  </tr>
      <tr>  
             <td>
                <b>education</b><br>
    <input type="checkbox" name="education" <?php if (isset($education) && $education=="SSC") echo "checked";?> value="SSC"> SSC
    <input type="checkbox" name="education" <?php if(isset($education) && $education=="HSC")echo "checked";?> value="HSC"> HSC
    <input type="checkbox" name="education" <?php if (isset($education) && $education=="BSc") echo "checked";?> value="BSc"> BSc
            </td>     
      </tr>
      <tr>
       <td><b>address</b><br><textarea name="address" value=""></textarea><br></td>       
     </tr> 

      <tr>
            <td>Blood Group<br><select name="bloodGrp">
                <option>O+</option>
                <option>A+</option>
                <option>B+</option>
            </select>                
                <br>
            </td>       
      </tr>

   <tr>
            <td>Salary<br><input type="text" id="salary" name="salary" value=""><br></td>       
   </tr>
 <tr>
            <td> <u>Designation</u><br>
    <input type="radio" name="user" <?php if (isset($user) && $user=="Admin") echo "checked";?> value="Admin">   Admin
    <input type="radio" name="user"<?php if (isset($user) && $user=="Manager") echo "checked";?>value="Manager"> Manager
    <input type="radio" name="user"<?php if (isset($user) && $user=="Employee") echo "checked";?>value="Employee"> Employee   

    <tr>
            <td>Picture<br><input type="file" id="picture" name="picture" value=""><br>
                <br><input type="submit" name="submit" value="submit"><input type="reset" name="reset" value="reset">
    <a href="login.html"><u>Sign In</u></a>

            </td>       
   </tr>
    <br>
<script> 
    function validate(){
        let username = document.getElementById("username").value;
        if(username == ""){
             document.getElementById('head').innerHTML = "Enter Username....";
        }else{
             document.getElementById('head').innerHTML = "good to go....";
        }
    }
 </script>
    
</tr>
 </table>
 </fieldset>
</center>
</form>
</body>
</html>
    
        </td>  	

  	</tr>
  </table>
</center>
</body>
</html>


<?php 

    if(isset($_REQUEST['submit'])){
      // $id = $_REQUEST['id'];      
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
         $picture = $_REQUEST['picture'];

       // if($id != ""){
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
      if($status){
        echo '<script>alert("data Inserted")</script>';
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
