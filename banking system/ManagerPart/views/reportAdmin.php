<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Report Admin</title>
</head>
<body>
	<center>
    <table border="1">
  	<tr>		
  	<td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
  		<center><h1>Report Admin</h1></center>	
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

  		<td style=" background-image: url('backImage.jpg');">
            <center>
            <table border="1">
                <tr>
                    <td bgcolor="seagreen">
                        <form method="post">
         <center>
           <?php 
             $result = getManager(); 
             $data=mysqli_fetch_assoc($result);


            // $mydate=getdate(date("U"));
              //echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";  
              $issuedate = date('d-m-y h:i:s');
            // echo $issuedate;
// $timezone = date_default_timezone_get();
// echo "The current server timezone is: " . $timezone;

     // $time=date_default_timezone_set('America/Los_Angeles');
     //  echo $time;



           ?>
           <b>date:</b><input type="text" name="issuedate" value="<?php echo $issuedate;?>"readonly><br>
 

            <b>ID:</b><input type="text" name="id" value=""><br>
            <b>Name:</b><input type="text" name="name" value=""><br>
            <b>Designation:</b><input type="text" name="designation" value="<?php echo $data['designation']; ?>" readonly><br>
           <!--  <h4>Write in the box...</h4> -->
            <textarea name="message" rows="6" cols="30" placeholder="write your complain here"></textarea><br>
            <input type="submit" name="submit" value="report"> 
            <input type="reset" name="reset" value="reset">
         </center>
            </form>

            <?php
                           if(isset($_REQUEST['submit'])) 
                            {
                             $message = $_REQUEST['message'];
                             //$id = $_REQUEST['id'];
                             $name = $_REQUEST['name'];
                             $designation = $_REQUEST['designation'];
                            // $issuedate = $_REQUEST['issuedate'];

                          

                                if ($name !== "") {

                                    if ($message !== "") {

                             $complains= ['name'=>$name, 'designation'=>$designation, 'message'=>$message, 'issuedate'=>$issuedate];

                                         $status= reportToAdmin($complains);

                                       //print_r($complains);

                                       if($status){
                                       echo '<script>alert("Reported.....!")</script>';

                                       }else{ echo '<script>alert(" not Reported.....!")</script>';}


                                    }else{echo '<script>alert("input a Message....!!!")</script>';}
                                }else{echo '<script>alert("input a name....!!!")</script>';}
                                                  
                            }   
                                                                                                             
                        ?>
        </td>
            
        <td width="150px">
                         <h4><u>Admin Reply</u> </h4>
                        
              <!--        <?php while($data=mysqli_fetch_assoc($result)){ ?>       
            
                 <td> <?php echo $data['message']; ?></td>
                                
                
            
           <?php }?>
                      -->  

        </td>
    </tr>
            </table>
            </center>
        </td>  	

  	</tr>
  </table>
</center>
</body>
</html>


<!-- 
 <?php
if (isset($_REQUEST['submit'])) {
    $adminReport = $_REQUEST['adminReport'];
     $adReports = fopen('adminReports.txt', 'a');
  $Data = $adminReport."|\r\n";
                    fwrite($adReports, $Data);
                    fclose($adReports);
                    //header('location: login.html');
                echo '<script>alert("Reported....!!!")</script>';
}
?> 
 -->