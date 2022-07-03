<?php
include('../controller/header.php');
require_once('../model/usersModel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee Payroll</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Employee Payroll</h1></center>	
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

  		<td style=" background-image: url('backImage.jpg');color: floralwhite;">
            <?php                                                          
                $result = getEmployees();  
   
             ?>
            <center>
            <table border="1" width="300px">
               <tr>
                 <th>ID</th>
                 <th>NAME</th>           
                 <th>Designaion</th>
                 <th>Salary</th>
                 <th></th>
                 
             </tr>   
             <?php while($data=mysqli_fetch_assoc($result)){ ?>       
             <tr>
                 <td> <?php echo $data['id']; ?></td>
                 <td> <?php echo $data['username']; ?></td>                
                 <td> <?php echo $data['designation']; ?></td> 
                  <td> <?php echo $data['salary']; ?></td> 
                    

                 <td><a href="updateSalary.php?id=<?=$data['id']?>"><button>updateSal</button></a><br><a href="empIncentive.php"><button>Employee Incentive</button></a></td> 
             </tr>  
           <?php }?>
          </div>
            </table><br>            
             <!-- <a href="updateSalary.php"><button>Update Salary</button></a> -->
             
         </center>
        </td>  	
   
  	</tr>
  </table>
</center>
</body>
</html>