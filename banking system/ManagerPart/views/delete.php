<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>delete</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>delete Employee</h1></center>	
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

  		<td style=" background-image: url('backImage.jpg');color: floralwhite;">
        
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <center>
 <fieldset>


    <input type="text" name="searchName" value="" placeholder="search Name">
    <?php
    // if(isset($_REQUEST['submit'])){
      $searchName = $_REQUEST['searchName'];      
      $user = getUserByName($searchName);
     
 // }
  ?>

    <legend>Update</legend>
    <table border="1" bgcolor="skyblue">
       
      <tr>
            <td>Username<br><input type="text" name="username" value="<?=$user['username']?>"><br></td>       
      </tr>
      <tr>
            <td>Password<br><input type="password" name="password" value="<?=$user['password']?>"><br></td>       
      </tr>
      
     <!--  <tr>
            <td>Confirm Password<br><input type="password" name="confirmPass" value=""><br></td>       
      </tr> -->

       <tr>
            <td>Email<br><input type="text" name="gender" value="<?=$user['gender']?>"><br></td>       
      </tr>

      <tr>
       <td>NID No.<br><input type="text" name="bg" value="<?=$user['bg']?>"><br></td>       
     </tr> 

      <tr>
            <td>Date of Birth<br><input type="text" name="dob" value="<?=$user['dob']?>"><br></td>       
      </tr>
      
      <tr>
            <td>
                <b>Gender</b><br>
    <input type="text" name="address"  value="<?=$user['address']?>"> 
    
            </td>       
      </tr>
      <tr>
            <td>
                Blood Group<br><input type="text" name="email" value='<?=$user['email']?>'>                                         
            </td>       
      </tr>

      <tr>
            <td>Salary<br><input type="text" name="education" value="<?=$user['education']?>"><br></td>       
      </tr>
 <tr>
            <td> <u>User Type</u><br>
    <input type="text" name="designation" value="<?=$user['designation']?>"> 

    <br>

   <button type="submit" name="submit" value="submit">delete</button><input type="reset" name="reset" value="reset">
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
if (isset($_REQUEST['submit'])) {
$username = $_REQUEST['username'];
$status = deleteUser($username);

   if($status){
       echo '<script>alert("deleted")</script>';
     
   }else{
       echo '<script>alert("not deleted")</script>';
   }
       }     
?>
