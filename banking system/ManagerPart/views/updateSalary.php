<?php
include('../controller/header.php');
session_start();
require_once('../model/usersModel.php');
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update</title>
</head>
<body>
    <center>
    <table border="1">
    <tr>        
    <td colspan="3" style="text-align: right;" bgcolor="navyblue"> 
        <center><h1>Update Salary</h1></center>   
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

        <td>
        
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <center>
 <fieldset>


    <b>Search by Name:</b><br><input type="text" name="searchName" value="" placeholder="Enter Name">
    <?php
    // if(isset($_REQUEST['submit'])){
      $searchName = $_REQUEST['searchName'];      
      $user = getUserByName($searchName);
     
 // }
  ?>

    <legend>Update</legend>
    <table border="1" bgcolor="skyblue">
       
      <tr>
            <td>Username<br><input type="text" name="username" value="<?=$user['username']?>"><br></td>       
      </tr>
   <tr>
            <td>Salary<br><input type="text" id="salary" name="salary" value="<?=$user['salary']?>"><br>
       <input type="submit" name="submit" value="Update"><input type="reset" name="reset" value="reset">
         </td>      
      </tr>

 </table>
 </fieldset>
</center>
</form>
</body>
</html>
    
        </td> 
        <tr>
              
      </tr>     

    </tr>
  </table>
</center>
</body>
</html>


<?php 
if(isset($_REQUEST['submit'])){
      // $id = $_REQUEST['id'];   
        
        $username = $_REQUEST['username'];      
         $salary =$_REQUEST['salary'];
         $picture = $_REQUEST['picture'];
          $userlist= ['username'=>$username,'salary'=>$salary];


      // echo $user[];
      // $state = getAllUsers();
      $status= updateEmp($userlist);

      if($status){

        echo '<script>alert("data updated")</script>';

      }else{ echo '<script>alert("data not updated")</script>';}
        

}
            
?>
