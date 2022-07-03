
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
	<title>Registration</title>
</head>
<body>
<form method="post" action="../controller/signupCheck.php" onsubmit="return validate()" >
    <center>
 <fieldset style="background-color: darkgrey; width: 400px;">
    <h1 id="head">Registration</h1>
 	<legend>Registration</legend>
 	<table border="1" bgcolor="skyblue">
 		 <tr>
            <td>ID<br><input type="text" id="id" name="id" value=""><br></td>       
      </tr>
      <tr>
            <td>Userame<br><input type="text" id="username" name="username" value=""><br></td>       
      </tr>
      <tr>
 			<td>Password<br><input type="password" id="myInput" name="password" value=""><br><input type="checkbox" onclick="validate()">Show Password</td>       
      </tr>
      
      <tr>
 			<td>Confirm Password<br><input type="password" name="confirmPass" value=""><br></td>       
      </tr>

       <tr>
            <td>Email<br><input type="email" name="email" value=""><br></td>       
      </tr>

      <tr>
            <td>Date of Birth<br><input type="date" name="dob" value=""><br></td>       
      </tr>
      
      <tr>
            <td>
                <b>Gender</b><br>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male"> Male
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female")echo "checked";?> value="Female"> Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="others"> others
            </td>  </tr>
      <tr>  
             <td>
                <b>education</b><br>
    <input type="checkbox" name="education" <?php if (isset($education) && $education=="SSC") echo "checked";?> value="SSC"> SSC
    <input type="checkbox" name="education" <?php if(isset($education) && $education=="HSC")echo "checked";?> value="HSC"> HSC
    <input type="checkbox" name="education" <?php if (isset($education) && $education=="BSc") echo "checked";?> value="BSc"> BSc
            </td>     
      </tr>
      <tr>
       <td><b>address</b><br><textarea name="address" value=""></textarea><br></td>       
     </tr> 

      <tr>
            <td>Blood Group<br><select name="bloodGrp">
                <option>O+</option>
                <option>A+</option>
                <option>B+</option>
            </select>                
                <br>
            </td>       
      </tr>

      <tr>
            <td>Salary<br><input type="text" id="salary" name="salary" value=""><br></td>       
      </tr>
 <tr>
 			<td> <u>Designation</u><br>
    <input type="radio" name="user" <?php if (isset($user) && $user=="Admin") echo "checked";?> value="Admin">   Admin
    <input type="radio" name="user"<?php if (isset($user) && $user=="Manager") echo "checked";?>value="Manager"> Manager
    <br>
    <input type="radio" name="user"<?php if (isset($user) && $user=="Employee") echo "checked";?>value="Employee"> Employee
    <input type="radio" name="user"<?php if (isset($user) && $user=="customer") echo "checked";?>value="customer"> Customer
    <br></td>
<script> 
    function validate(){
        let id = document.getElementById("id").value;
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value; 
        let confirmPass = document.getElementById("confirmPass").value;
        let email = document.getElementById("email").value;
        let dob = document.getElementById("dob").value;
        let gender = document.getElementById("gender").value;
        let education = document.getElementById("education").value;
        let bloodGrp = document.getElementById("bloodGrp").value;
         let designation = document.getElementById("user").value;
        if(username! == ""){
             if (password! == ""){
                if (confirmPass! == ""){
                 if (email! == ""){
                   if (dob! == ""){
                     if(gender! == ""){
                      if (education! == ""){
                        if (designation! == ""){
                            
                            document.getElementById('head').innerHTML = "go go go....";
                            
                        }else{document.getElementById('head').innerHTML = "Enter designation....";}
                      }else{document.getElementById('head').innerHTML = "Enter education....";}
                     }else{document.getElementById('head').innerHTML = "Enter Gender....";}
                   }else{document.getElementById('head').innerHTML = "Enter date of birth....";}
                 }else{document.getElementById('head').innerHTML = "Enter email....";}
                }else{document.getElementById('head').innerHTML = "Enter confirmPass....";}
            }else{document.getElementById('head').innerHTML = "Enter password....";}
        }else{document.getElementById('head').innerHTML = "Enter Username....";}
    }
 </script>
 
</tr>
<tr> <td>Picture<br><input type="file" id="picture" name="picture" value=""><br>
    <input type="submit" name="submit" value="submit"><input type="reset" name="reset" value="reset">

    <a href="login.html"><u>Sign In</u></a></td>
</tr>
 </table>
 </fieldset>
</center>
  
</form>
</body>
</html>
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