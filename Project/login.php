<?php 

session_start();

	include("classes/connect.php");
	include("classes/login.php");
 
	$email = "";
	$password = "";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{


		$login = new Login();
		$result = $login->evaluate($_POST);
		
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
?>



<!DOCTYPE html>
<html>
<head>
	<title>SocialHood</title>
	<link rel="stylesheet" type="text/css" href="slidelogin.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">


			<form method="post">
 
					<label for="chk" aria-hidden="true">Login</label>
					<input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email">
				<input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password">
					<button>Login </button>
				</form>
				<h2 style="color:white;"> <span style="color:red;"> Don't have an Account?</h2>
       <a id="loginbtm" href="signup.php">Sign Up	 </a>
			</div>
	</div>
</body>
</html>
