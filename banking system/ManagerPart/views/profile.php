<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body>
	<center>
    <table border="1">

  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Profile MANAGER</h1></center>	
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

  		<td style=" background-image: url('backImage.jpg');color: orange;">
            <?php                              
              $result = getManager(); 
              $data=mysqli_fetch_assoc($result);  
            ?> 
        <center>
          <table  border="1" width="400px" >
            <tr>
                 <td width="">Picture</td>
                 <td width="200px" height="70px">
                    <img src="<?php echo $data['picture'];?>" height="100px" width="120px">
                </td>
             </tr>
             <tr>
                 <td>ID</td>
                 <td><?php echo $data['id']; ?></td>
             </tr>
             <tr>
                 <td>Name</td>
                <td><?php echo $data['username']; ?></td>
             </tr>
             <tr>
                 <td>Password</td>
                <td><?php echo $data['password']; ?></td>
             </tr>
              <tr>
                 <td>Date of Birth</td>
                 <td><?php echo $data['dob']; ?></td>
             </tr>
             <tr>
                 <td>Gender</td>
               <td><?php echo $data['gender']; ?></td>
             </tr>
              <tr>
                 <td>Email</td>
                 <td><?php echo $data['email']; ?></td>
             </tr>
             <tr>
                 <td>Blood Group</td>
                <td><?php echo $data['bg']; ?></td>
             </tr>
             <tr>
                 <td>Salary</td>
                <td> <?php echo $data['salary']; ?></td>
             </tr> 
             <tr>
                 <td>Education</td>
                <td> <?php echo $data['education']; ?></td>
             </tr>             
          </table>
        </center>   
        </td>  	

  	</tr>
  </table>
</center>
</body>
</html>