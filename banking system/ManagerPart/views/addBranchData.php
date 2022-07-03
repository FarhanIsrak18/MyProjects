<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>New Branch data</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>New Data</h1></center>	
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

  		<td style=" background-image: url('backImage.jpg');">
        
           <form method="post">
             
           
    <div class="container" style="width:900px; color: darkcyan;" align="center">
   <h2 align="center">Bank branch Report</h2> 
   
   <div id="chart">
            <h4>Enter Branch Info</h4> 
            <b>Year:</b><input type="text" name="year" value=""><br>
            <b>Deposit:</b><input type="text" name="deposit" value=""><br>
            <b>Profit:</b><input type="text" name="profit" value=""><br>
            <b>Branch:</b><select name="branch" id="branch">
                      <option value="Dhaka">Dhaka</option>
                      <option value="Chattogram">Chattogram</option>
                      <option value="sylhet">sylhet</option>
                      <option value="cumilla">cumilla</option>
                      <option value="Feni">Feni</option>
                      <option value="Rangpur">Rangpur</option>
                      <option value="Barishal">Barishal</option>
                     </select>
             <br><input type="submit" name="submit" value="submit"><input type="reset" name="reset" value="reset">
             
         
   </div>
           </form>
               

        </td>  	

  	</tr>
  </table>
</center>
</body> 
</html>
<?php
if(isset($_REQUEST['submit'])){
        $deposit = $_REQUEST['deposit'];  
        $year = $_REQUEST['year'];      
        $profit = $_REQUEST['profit'];
        $branch = $_REQUEST['branch'];

        if ($year !=="") {
            if ($deposit !=="") {
                if ($profit !=="") {
                 if ($branch !=="") {
                $compbranch= ['year'=>$year, 'deposit'=>$deposit, 'profit'=>$profit, 'branch'=>$branch];

                $status= insertIntoBranch($compbranch);

      print_r($compbranch);
      if($status){
        echo '<script>alert("data Inserted")</script>';
      }else{ echo '<script>alert("data not Inserted")</script>';}
                    }else{echo "enter branch";}
                }else{echo "enter profit";}
            }else{echo "enter deposit";}
        }else{echo "enter year";}
    }
?>