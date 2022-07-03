<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
$issuedate = date('d-m-y h:i:s');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Call Meeting</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Call Meeting</h1></center>	
  		<a href="mHome.php"><button>Home</button></a>
  		<a href="../views/logout.php"><button>Logout</button></a>
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

  		<td style=" background-image: url('backImage.jpg');font-size: 30px;color: goldenrod;border-color: cadetblue;border-width: 5px;"><!-- ------------------starts here------------------- -->


            <div style="background-color: seagreen;width: 350px; height: 300px; text-align: center;">
          <form method="post">
        <b>Enter Notice:</b><br><textarea name="message" value="" style="width:300px; height: 200px;"></textarea>

        <input type="submit" name="submit" value="post">
          </form>
          </div>


        </td><!-- ------------------ends here------------------- -->  	

  	</tr>
  </table>
</center>
</body>
</html>
  <?php
                           if(isset($_REQUEST['submit'])) 
                            {
                             $message = $_REQUEST['message'];

                             $notice= ['event'=>$message, 'date'=>$issuedate];

                             $status=showNotice($notice);
                              if($status){
                                       echo '<script>alert("Reported.....!")</script>';

                                       }else{ echo '<script>alert(" not Reported.....!")</script>';}

                         }

?>