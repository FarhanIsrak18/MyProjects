<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
 $result=showExpenses()

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reports</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Reports</h1></center>	
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

  		<td><!-- ----------------------starts here-------------------------- -->
      
<table  border="1">
        
            <tr>
                 <th>ID</th>
                 <th>Event</th>
                 <th>Cost</th>               
                 <th></th>
                 
             </tr> 
                   
            <?php while($data=mysqli_fetch_assoc($result)){
                $c=0;

              $a=array($GLOBALS['c'],$data['cost']);
              $totalCost=array_sum($a);
              
              ?>       
             <tr>
                 <td> <?php echo $data['id'];?></td>
                 <td> <?php echo $data['event'];?></td>
                 <td> <?php echo $data['cost'];?></td>
                 <td><br></td>


             </tr>  
           <?php ;}echo $totalCost;

           while($totalCost = ""){
              $n=0;
              $o=array($n,$totalCost);

                 $actualCost=array_sum($o);
                
                 } 
                 echo $actualCost;
           ?>
          
          </table>


      </td><!-- ----------------------starts here-------------------------- -->  	

  	</tr>
  </table>
</center>
</body>
</html>