<?php

session_start();

include("classes/autoload.php");



$login = new Login();
$user_data = $login->check_login($_SESSION['mybook_userid']);




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Mybook</title>
    <link rel="stylesheet" href="styleprofile.css">

</head>
<body >


<!-- Top bar -->

<?php
include("header.php");

?>


  <!-- cover area -->

<div style="width: 800px; margin: auto; background-color: black; min-height: 400px">
<div style="
background-color: white; text-align: center; color: #305d9b">
<img src="images/dolpa.jpg" alt="" style="width:100%">

<br>

<br>
<b>
  
  <div id="menu-buttons"> About  </div>
  <div id="menu-buttons">Friends  </div>
  <div id="menu-buttons">Photos  </div>
  <div id="menu-buttons">Settings</b> </div>


<!-- below cover area -->
<div style="display:flex;">

<!-- friends area -->


<div style="min-height: 400px; flex: 1;">

 <div id="friends-bar" style="height: 500px;">
   
  Friends
   <!--friend area  -->
   <img  style ="display:inline;" id = "profilepicc" src="images/user_female.jpg" alt="">
   <div id="username"><a style =" text-decoration: none;" href="profile.php"><?php echo $user_data['first_name'] . "<br> " . $user_data['last_name']; ?> </a> </div>
<!-- br tag because some people may have long name -->
 </div>
 
</div> 


<!-- post area -->
<div style=" min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px;">

<div>

<textarea placeholder=" Whats on your mind?"></textarea>
<input id="post-button" type="submit" value="Post">
<br>
</div>

<!-- posts -->
<div id="post-bar">
<div id="post">
<img src="images/profilepicc.png"  style="width: 75px; margin:3px;"alt="">
</div>
<div>
<div id="username1">First Guy</div>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus temporibus quos necessitatibus porro id mollitia sequi omnis adipisci tempore dignissimos.
<br> <br>
<a href="#">Like </a>.<a href="#"> Comment </a>. October 21 2021
</div>

<div id="post">
<img src="images/profilepicc.png"  style="width: 75px; margin:3px;"alt="">
</div>
<div>
  <div  id="username1">Second Guy</div>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus temporibus quos necessitatibus porro id mollitia sequi omnis adipisci tempore dignissimos.
<br> <br>
<a href="#">Like </a>.<a href="#"> Comment </a>. October 21 2021
</div>

<div id="post">
<img src="images/profilepicc.png"  style="width: 75px; margin:3px;"alt="">
</div>
<div>
  <div  id="username1">Third Guy</div>
 Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus temporibus quos necessitatibus porro id mollitia sequi omnis adipisci tempore dignissimos.
<br> <br>
<a href="#">Like </a>.<a href="#"> Comment </a>. October 21 2021
</div>


</div>







</div>




</div>
</div>




</body>
</html>