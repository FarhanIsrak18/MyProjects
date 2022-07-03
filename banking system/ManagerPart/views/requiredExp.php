<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Required Expenses</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Required Expenses</h1></center>	
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

  		<td style=" background-image: url('backImage.jpg');border-width: 10px;border-color: seagreen;">
            <!-- ---------------Starts from here------------------ -->


<!DOCTYPE html>
<html>
<body>

 <table border="1" style="width:700px;border-color: cadetblue;text-align: center;border-width: 2px;">
       <tr> <td> 
<form method="post">
  <b style="color: cadetblue;">Name of the Event:</b>   <input type="text" name="event" value="" style="background-color:#DCDCDC;width: 200px;height:20px;text-align: center;border-width: 5px;"><br><br>
   <b style="color: lightblue;"> Cost 1</b>     :   <input type="text" name="value1" value=""><br>
    <b style="color: lightblue;">Cost 2 </b>    :   <input type="text" name="value2" value=""><br>
   <b style="color: lightblue;"> Cost 3 </b>    :   <input type="text" name="value3" value=""><br>
   <b style="color: lightblue;">Cost 4 </b>    :   <input type="text" name="value4" value=""><br>
    <input style="background: ghostwhite;" type="submit" name="submit" value="Calculate">
</form>
</td>

<?php
if(isset($_REQUEST['submit'])){
$cost1=$_REQUEST['value1'];
$cost2=$_REQUEST['value2'];
$cost3=$_REQUEST['value3'];
$cost4=$_REQUEST['value4'];
$event=$_REQUEST['event'];
$eventDate = date('d-m-y h:i:s');

$a=array($cost1,$cost2,$cost3,$cost4);
$cost=array_sum($a);

$requiredexpenses= ['event'=>$event, 'cost'=>$cost, 'date'=>$eventDate];

 $status= requiredExpenses($requiredexpenses);

      // print_r($requiredexpenses);
      if($status){
        echo '<script>alert("data Inserted")</script>';
      }else{ echo '<script>alert("data not Inserted")</script>';}


}
$result = showExpenses(); 
?>
    
        <!--   ------------------------------------nested table------------- -->

           <td> 



          <table align="right" border="1" style="width:400px;background-color: lightblue;">
          <!-- <input type="text" name="search" value=""> -->
            <tr>       
                 <th>Event</th>
                 <th>Cost</th>
                 <th>Date</th>                
                 
             </tr>  
             <?php while($data=mysqli_fetch_assoc($result)){ ?>       
             <tr>
                 <td> <?php echo $data['event']; ?></td>
                 <td> <?php echo $data['cost']; ?></td>
                 <td> <?php echo $data['date']; ?></td>                
                
             </tr>  
           <?php }?>
 
</body>
</html>

    </table>   <!-- ------------------------nested table  -->

</td>
</tr>
    </table>  



        </td> <!-- -------------------Ends here------------------  -->	

  	</tr>
  </table>


</body>
</html>