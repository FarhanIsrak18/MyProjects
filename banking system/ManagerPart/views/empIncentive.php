<?php
require_once('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
$result = getEmployees();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee Incentive</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Employee Incentive</h1></center>	
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

  		<td><!--   -----------------------starts here---------------------- -->
           <!--  <form method="post">
             salary<input type="text" name="salary" value="">
             
             
</form> -->
           

 <table  border="1">
          <!-- <input type="text" name="search" value=""> -->
            <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>Salary</th>
                 <th>Bonus</th>                      
                 <th>Updated Salary</th>
                
                 <th></th>
                 
             </tr> 
             <form method="post" > 
            Enter <input type="text" name="percent" value="">
             <input type="submit" name="submit" value="calc">

         </form>

             <?php 
            if(isset($_REQUEST['submit'])) 
                {
                                       
                    
                    
             while($data=mysqli_fetch_assoc($result)){$percent = $_REQUEST['percent']; ?>       
             <tr>

                  
                 <td> <?php echo $data['id'];?></td>
                 <td> <?php echo $data['username']; ?></td>
                 <td> <?php echo $data['salary'];?></td>
                 <td><!-- Enter<input type="text" name="percent" value=""> --><br>
                 
                   
                </td>
                  <td>
                   <?php                   
                    $a=intdiv($data['id'], 100);
                     $results=bcmul($a, 10);
                     echo $results;
                   ?>

                </td>

                   <!--   <td> <?php print_r($results);?></td> -->
              
            

 
             </tr>  
           <?php }}?>
          </div>
          </table>
        </td>  <!--   -----------------------starts here---------------------- --> 	

  	</tr>
  </table>
</center>
</body>
</html>

 <?php
          
             // if(isset($_REQUEST['submit'])) 
             //    {
             //    while($data=mysqli_fetch_assoc($result)){      
             //        $salary =  $data['id'];
             //        $percent = $_REQUEST['percent'];
             //        $a=intdiv($salary, 100);
             //         $results=bcmul($a, $percent);
             //         print_r($results);
             //        }
             //  }
                
            ?>