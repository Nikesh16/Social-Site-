<?php
session_start();
include("classes/connect.php");
include('classes/login.php');


$email ="";
$password="";
  if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$login = new Login();
		$result = $login->evaluates($_POST);

		
		

    
		if($result != "")
		{

			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";
		}else
		{

			header("Location: profile.php");
			die;
		}
 

		$email = $_POST['email'];
		$password = $_POST['password'];
		

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
   <div style="font-size:50px;">Mybook</div>
   <!-- <div id="signup_button">  <a href=  "signup.php"> Signup  </div> -->
  </div>
  <div class="box">

  <div id="view2"> <a href="signup.php"> SignUp to Mybook</a></div>
  <form method ="POST">
      <!--  if we dont specify the method, it will use get method by default -->
      <input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email"><br><br>
      <input name ="password" value="<?php echo $password?>" type="password" name="password" id="text" placeholder="Password"><br><br>
      <input type="submit" id="button" value="Log in">
  </form>
</div>
</body>
</html>