<?php
include('../controller/header.php');
require_once('../model/usersModel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Freeze Account</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Freeze Account</h1></center>	
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
  			<a href="reportAdmin.php"><button>Report Admin</button></a>
  			<a href="lockTransaction.php"><button>Lock Transaction</button></a>
<!--   			<a href="updateSalary.php"><button>Update Salary</button></a>
 -->  			<a href="meeting.php"><button>Call Meeting</button></a>
  			<a href="reports.php"><button>Reports</button></a>
  			<a href="freezeAccount.php"><button>Freeze Account</button></a>
            <a href="payroll.php"><button>Employee Payroll</button></a>
            <a href="requiredExp.php"><button>Required Expenses</button></a>
            <a href="branches.php"><button>Branches</button></a>
<!--   			<a href="empIncentive.php"><button>Employee Incentive</button></a>
 --></center>
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


                          <!-- -----------------starts here------------------------- -->
      <center>
<form method="post">
   <b>Search by Name:</b><br><input type="text" name="username" value="" placeholder="Enter Name"><br>
    <?php
    // if(isset($_REQUEST['submit'])){
      $username = $_REQUEST['username'];      
      $user = showAccount($username);
     $data=mysqli_fetch_assoc($user);
 // }
       
  ?>

  ID      :<input type="text" name="id" value="<?php echo $data['id']; ?>"><br>
  Username:<input type="text" name="usernames" value="<?php echo $data['username']; ?>"><br>
  Type    :<input type="text" name="type" value="<?php echo $data['type']; ?>"><br>
  Status  :<input type="text" name="status" value="<?php echo $data['status']; ?>"><br>
  Set status : <select name="setstate">
             <option>Active</option>
             <option>DeActive</option>
  </select><input type="submit" name="submit" value="set">
 </form>
               
         </center>

      </td>  <!-- 	---------------------------------------------------- -->

  	</tr>
  </table>
</center>
</body>
</html>


   <?php
        if(isset($_REQUEST['submit'])){
                   
                   $setstate=$_REQUEST['setstate'];
                   $usernames=$_REQUEST['usernames'];
                   
                   $customeracc=['username'=>$usernames, 'status'=>$setstate]; 
                  $message=freezeAccount($customeracc); 

      if($message){

        echo '<script>alert("status updated")</script>';

      }else{ echo '<script>alert("data not updated")</script>';}                    
                }
    ?>