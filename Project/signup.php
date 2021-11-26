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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mybook | Log in</title>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
<div id="view">
   <div style="font-size:50px;"><a href="index.php">Mybook</a></div>
   
  </div>
 
  <div class="box">

  <div id="view2"> SignUP to Mybook</div>

  <form action="signup.php" method="POST">     
    <!-- action is for redirection  -->

  <input value="<?php  echo $first_name  ?>" name = "first_name" type="text" id="text" placeholder="First Name" ><br><br>
  <input value="<?php  echo $last_name  ?>" name ="last_name" type="text" id="text" placeholder="Last Name" ><br><br>
  <input value="<?php  echo $email  ?>"  name="email" type="email" id="text" placeholder="Email" ><br><br>
 
  <b>Gender:</b>
  <br>
  <select  name="gender" id="text">

  <option > <?php echo $gender ?></option>
  <option>Male</option>
  <option>Female</option>
  </select>
<br> <br>
  <input type="password" name="password" id="text" placeholder="Password" ><br><br>
  <input type="password" name="password2" id="text" placeholder="Confirm Password"><br><br>

  <input type="submit" id="button" value="Register">


  </form>
 
  </div>

</body>
</html>