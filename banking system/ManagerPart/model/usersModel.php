<?php
require_once('db.php');

function validate($username, $password){

 
         $con = getConnection();
              
         $sql = "select * from userlist where designation= 'manager' and username='{$username}' and password='{$password}'";

         $result = mysqli_query($con, $sql);
         $users= mysqli_fetch_assoc($result);

         if ($users != null) {
                    	
            return true;
          }else{
           	return false;
          }

}

 function getAllUsers(){                    //to show all users

         $con = getConnection();          
         $sql = "select * from userlist";
         $result = mysqli_query($con, $sql);
         return $result;

}
 function getEmployees(){                  //show employees

         $con = getConnection();          
         $sql = "select * from userlist where designation='Employee'";
         $result = mysqli_query($con, $sql);
         return $result;

}
 function getManager(){

         $con = getConnection();          
         $sql = "select * from userlist where designation='Manager'";
         $result = mysqli_query($con, $sql);
         return $result;

}
 function mHome(){                        //Managers home

         $con = getConnection();          
         $sql = "select * from userlist where designation = 'Manager'";
         $result = mysqli_query($con, $sql);
         return $result;

}
function insertEmp($userlist){
      $con = getConnection();
      $sql = "insert into userlist(username,password,email,dob,gender,address,bg,designation,salary,education,picture) VALUES 
      ('{$userlist['username']}', '{$userlist['password']}', '{$userlist['email']}', '{$userlist['dob']}', '{$userlist['gender']}', '{$userlist['address']}', '{$userlist['bg']}', '{$userlist['designation']}', '{$userlist['salary']}', '{$userlist['education']}', '{$userlist['picture']}')";

      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
}
function getUserByName($username){
      $con = getConnection();
      $sql = "SELECT * FROM userlist WHERE designation='Employee' and username LIKE '%{$username}%'";
      $result = mysqli_query($con, $sql);
      $users = mysqli_fetch_assoc($result);
      return $users;
   }

function updateEmp($userlist){
      $con = getConnection();
      $sql = "UPDATE userlist SET username='{$userlist['username']}', password='{$userlist['password']}', email='{$userlist['email']}', bg='{$userlist['bg']}', dob='{$userlist['dob']}', gender='{$userlist['gender']}', address='{$userlist['address']}', education='{$userlist['education']}', salary='{$userlist['salary']}', designation='{$userlist['designation']}', picture='{$userlist['picture']}' WHERE designation='Employee'and username ='{$userlist['username']}';";
      
      //echo $sql;sellingPrice

      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
   }

   function updateManager($userlist){
      $con = getConnection();
      $sql = "UPDATE userlist SET username='{$userlist['username']}', password='{$userlist['password']}', email='{$userlist['email']}', bg='{$userlist['bg']}', dob='{$userlist['dob']}', gender='{$userlist['gender']}', address='{$userlist['address']}', education='{$userlist['education']}', salary='{$userlist['salary']}', designation='{$userlist['designation']}', picture='{$userlist['picture']}' WHERE designation='Manager'and username ='{$userlist['username']}';";
      
      //echo $sql;sellingPrice

      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
   }

function deleteUser($username){
      $con = getConnection();
      $sql = "delete from userlist where username='{$username}'";
      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
   }
function reportToAdmin($complains){
      $con = getConnection();
      $sql = "insert into complains(name,designation,message,issuedate) VALUES 
      ('{$complains['name']}', '{$complains['designation']}', '{$complains['message']}', '{$complains['issuedate']}')";

      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
}
function adminReply(){
      $con = getConnection();
      $sql = "select * from complains where designation ='Admin'";
      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
}
function insertIntoBranch($compbranch){
      $con = getConnection();
      $sql = "insert into compbranch(year,deposit,profit,branch) VALUES 
      ('{$compbranch['year']}', '{$compbranch['deposit']}', '{$compbranch['profit']}', '{$compbranch['branch']}')";
      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
}
function showBranch($year){                    

         $con = getConnection();          
         $sql = "SELECT * FROM compbranch WHERE year ='{$year}'";
         $result = mysqli_query($con, $sql);
         return $result;

}
function requiredExpenses($requiredexpenses){
      $con = getConnection();
      $sql = "insert into requiredexpenses(event,cost,date) VALUES 
      ('{$requiredexpenses['event']}', '{$requiredexpenses['cost']}', '{$requiredexpenses['date']}')";

      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
}
 function showExpenses(){

         $con = getConnection();          
         $sql = "select * from requiredexpenses";
         $result = mysqli_query($con, $sql);
         return $result;

}
function showNotice($notice){
      $con = getConnection();
      $sql = "insert into notice(event,date) VALUES 
      ('{$notice['event']}', '{$notice['date']}')";

      if(mysqli_query($con, $sql)){
         return true;
      }else{
         return false;
      }
}
function dislayNotice(){
      $con = getConnection();
      $sql = "select * from notice";
 $result = mysqli_query($con, $sql);
 return $result;
      // if(mysqli_query($con, $sql)){
      //    return true;
      // }else{
      //    return false;
      // }
}

function showAccount($username){
      $con = getConnection();
      $sql = "SELECT * FROM customeracc WHERE username LIKE '%{$username}%'";
      $result = mysqli_query($con, $sql);
      
      return $result;
   }
function freezeAccount($customeracc){                    

         $con = getConnection();          
         $sql = "UPDATE customeracc SET status='{$customeracc['status']}' WHERE username LIKE '%{$customeracc['username']}%'";
         $result = mysqli_query($con, $sql);
         return $result;
}

?> 