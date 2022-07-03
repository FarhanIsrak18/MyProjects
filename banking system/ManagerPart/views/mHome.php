<?php
include('../controller/header.php');
require_once('../model/usersModel.php');
 $results =mHome();
 $datas=mysqli_fetch_assoc($results);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manager Home</title>
</head>
<body>
	<center>
    <table border="1" >
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1> Welcome <?php echo $datas['username'];?></h1></center>	
  		<a href="mHome.php"><button>Home</button></a>
  		<a href="../controller/logout.php"><button>Logout</button></a>
  	</td>
  	</tr>
  	<tr>		
  		<td width="150px" height="80px" >
  			<img width="150px" height="80px" src="../assets/bank_x.png">
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

  		<td style=" background-image: url('backImage.jpg');font-size: 30px;color: skyblue;"><center><b>WHERE LEADERS CREATE ACCOUNT</b></center>
            <?php
             $result=dislayNotice();
            ?>

               <table align="right" border="1" style="width:300px; font-size: 15px;border-width: 5px;">
          <!-- <input type="text" name="search" value=""> -->
            <tr>       
                 <!-- <th>ID</th> -->
                 <th>Notice</th>
                 <th>Date</th>                
                 
             </tr>  
             <?php while($data=mysqli_fetch_assoc($result)){ ?>       
             <tr>
                 <!-- <td> <?php echo $data['id']; ?></td> -->
                 <td> <?php echo $data['event']; ?></td>
                 <td> <?php echo $data['date']; ?></td>                
                
             </tr>  
           <?php }?>
 
</body>
</html>

    </table> 
        </td>  	




  	</tr>
  </table>
</center>
</body>
</html>