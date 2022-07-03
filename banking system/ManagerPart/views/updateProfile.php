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
      <center><h1>Update Employee</h1></center> 
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

      <td style=" background-image: url('backImage.jpg');">
        
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <center>
 <fieldset>


   <!--  <b>Search by Name:</b><br><input type="text" name="searchName" value="" placeholder="Enter Name"> -->
   <?php                              
              $result = getManager(); 
              $user=mysqli_fetch_assoc($result);  
            ?> 

    <legend style="color: ghostwhite;">Update</legend>
    <table border="1" style="color: cadetblue;">
       
       <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?=$user['username']?>"><br></td>          
      </tr>
      <tr>
            <td>Password</td>
            <td><input type="password" id="myInput" name="password" value="<?=$user['password']?>">
                <br>
               <input type="checkbox" onclick="myFunction()">Show Password
            </td>         
      </tr>      
       <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?=$user['email']?>"><br></td>       
      </tr>
      <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="dob" value="<?=$user['dob']?>"><br></td>        
      </tr>
      
      <tr>
            <td><b>Gender</b></td>
                   
    <td><input type="text" name="gender"  value="<?=$user['gender']?>"></td> 
    
                   
      </tr>
      <tr>
            <td>Blood Group</td> 
            <td><input type="text" name="bg" value='<?=$user['bg']?>'></td>
                                                         
                  
      </tr>

      <tr>
            <td>Address</td>
            <td><input type="textarea" name="address" value="<?=$user['address']?>"></td>       
      </tr>
      <tr>
            <td>Education</td>
            <td><input type="text" name="education" value="<?=$user['education']?>"><br></td>       
      </tr>

   <tr>
            <td>Salary</td>
            <td><input type="text" id="salary" name="salary" value="<?=$user['salary']?>"><br></td>       
      </tr>

 <tr>
            <td> <u>Designation</u><br>
    <td><input type="text" name="designation" value="<?=$user['designation']?>"> </td>

</tr> 
<tr>
<td>Picture</td>
<td><input type="file" id="picture" name="picture" value="<?=$user['picture']?>"><br>
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
        
        $password = $_REQUEST['password'];
        //$confirmPass = $_REQUEST['confirmPass'];
        $username = $_REQUEST['username'];
         $designation = $_REQUEST['designation'];
         $dob = $_REQUEST['dob'];
         $gender = $_REQUEST['gender'];
         $email = $_REQUEST['email'];
         $bg = $_REQUEST['bg'];
         $address = $_REQUEST['address'];
         $education = $_REQUEST['education'];
         $salary =$_REQUEST['salary'];
         $picture = $_REQUEST['picture'];
        

       // if($id != ""){
         if($username  != "" && strlen($username)>2){
          if($password != ""){
            
          //if($confirmPass != ""){
                
           if($email !=""){ 

            if ($address !="") {
                
              if ($dob !="") {
                
                if ($gender !="") {
                    
                    if($bg !=""){
                        if ($education !="") {
                            // code...
                        
                
                 // if ($password != $confirmPass) {
            
                 //        echo "password does not match....!!!";
                 // }else{
                    $userlist= ['username'=>$username, 'password'=>$password,'email'=>$email, 'address'=>$address, 'dob'=>$dob, 'gender'=>$gender, 'bg'=>$bg, 'education'=>$education, 'salary'=>$salary, 'designation'=>$designation, 'picture'=>$picture];


      // echo $user[];
      // $state = getAllUsers();
      $status=  updateManager($userlist);

      if($status){

        echo '<script>alert("data updated")</script>';

      }else{ echo '<script>alert("data not updated")</script>';}

                // echo '<script>alert("data added")</script>';
                //}
                }else{
                    echo "please input education";
                }
                }else{
                    echo "Please enter blood group";
                }

                }else{
                    echo "please enter gender type....";
                }

                }else{
                    echo "please enter date of birth...";
                }               
                }else{
                    echo "please enter blood group";  
                }
                }else{
                    echo "please enter email address.....";
                }
             // }else{
             //        echo "invalid retype password...";
             //    }
            }else{
                echo "invalid password...Password atleast 8 character";
            }
        }else{
            echo "invalid  name/name should be more than 2 words....";
        }
}
            
?>
<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>