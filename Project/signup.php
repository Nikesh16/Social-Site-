<?php
include ("classes/connect.php");
include ("classes/signup.php");
$first_name ="";
$last_name="";
$gender="";
$email="";
if($_SERVER['REQUEST_METHOD']== 'POST'){
 // $_SERVER is actually used to change the method from get to post after clicking on sign up button
 // server is used to check the post
 //$_SERVER consists of all data from our system.
 // The method is get, but changes to post when we click on sign up
// Inside $_SERVER we can add $_POST to check what he/she entered
$signup = new  Signup();
$result =  $signup->evaluates($_POST);
echo "<div style ='text-align:center; font-size:12px;color:white; background-color:grey;>";
  echo "The following errors occurded<br>";
  echo $result;
print_r($result);
if($result != ""){
  echo "<div style ='text-align:center; font-size:12px;color:white; background-color:grey;>";
  echo "The following errors occurded<br>";
  echo $result;
 echo "</div>";
}
else {
header("Location: login.php");
die;
 //die is a way of telling to end the header
   // redirection must be done before the html part
}
$first_name =$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password= $_POST['password'];
$password2=$_POST['password2'];
if ($password === $password2) {
}
else {
  echo "Your passwords donot match please try again";
}
}
// $_POST is variable of php to access method post
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="slidelogin.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  
 
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
      <img  style = "width: 30%; background: white; text-align: center; margin-left: 120px; "src="logo_transparent.png">
  <form action="signup.php" method="POST">      
        <label for="chk" aria-hidden="true" style="text-align: center; margin: 0;">Sign up</label>
    <!-- action is for redirection  -->
  <input value="<?php  echo $first_name  ?>" name = "first_name" type="text" id="text" placeholder="First Name" >
  <input value="<?php  echo $last_name  ?>" name ="last_name" type="text" id="text" placeholder="Last Name" >
  <input value="<?php  echo $email  ?>"  name="email" type="email" id="text" placeholder="Email" >
 
  <b style="color:white;">Gender:</b>
  <select style="width: 225px;" name="gender" id="text" value="Gender" >
  <option> <?php echo $gender ?></option>
  
  <option >Male</option>
  <option>Female</option>
  </select>

  <input type="password" name="password" id="text" placeholder="Password" >
  <input type="password" name="password2" id="text" placeholder="Confirm Password">
  <button>Sign up</button>
  <!-- <input type="submit" id="button" value="Register"> -->


					
  	</form>
       <h2 style="color:white;"><span style="color:white;"> Already have an Account?</h2>
       <a id="loginbtm" href="login.php">Login </a> 
      
     
     
      </div>
     
			
	</div>
</body>
</html>

 
