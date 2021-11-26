<?php


session_start();

include("classes/autoload.php");

// include("classes/profile.php");

// include("change_profile_image.php");


$login = new Login();
$_SESSION['mybook_userid'] = isset($_SESSION['mybook_userid']) ? $_SESSION['mybook_userid'] : 0;
$user_data = $login->check_login($_SESSION['mybook_userid'],false);

//check if user is logged in
if(isset($_SESSION['mybook_userid']) && is_numeric($_SESSION['mybook_userid'])){
// is_numeric($_SESSION['mybook_userid'] is done for protection  -- variable escaping
  // check userid and if its numeric or not

$id = $_SESSION['mybook_userid'];
$login = new Login();
$result = $login-> check_login($id);

if($result){

        $user = new User();
        $user_data = $user->get_data($id);
        //retrieving data 
        
        if(!$user_data){
          header("Location: login.php");
          die;
        }
      } else
      {
        header("Location: login.php");
        die;
        }
  } else{
      header("Location: login.php");
      die;
 }





//posting starts here

if(isset($_GET['id']) && is_numeric($_GET['id'])){

  $profile = new Profile();
  $profile_data = $profile->get_profile($_GET['id']);

  if(is_array($profile_data)){
    $user_data = $profile_data[0]; 
   
  }
}



if($_SERVER['REQUEST_METHOD']  === "POST"){
  include("change_image.php");
 
  $post = new Post();
  $id = $_SESSION['mybook_userid'];
  $result = $post->create_post($id,$_POST, $_FILES);
  if($result == ""){
    header("Location: Profile.php");
    die;
  }else {
    
			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";
  
  }
}

// collect post
 $post = new Post();
 $id = $user_data['userid'];
$posts = $post->get_posts($id);



  //collect friends
  $user = new User();
  // $id = $_SESSION['mybook_userid'];
  $friends = $user->get_friends($id);
  $image_class = new Image();

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



<!-- Top bar -->

<?php
include("header.php");

?>



<!-- 
    <div id="profilebar">
    <div style="width: 800px; margin: auto; font-size: 30px;"> <a style ="color: white; text-decoration: none;"href="index.php"> Mybook </a> 
   -->
<!-- non breakable space will add whitespace -->
<!-- <input type="text" id="searchbox" placeholder="Search for people, places and things">         -->

<!-- bug cannot click the button search for people -->
<!-- note that span doesnt create a new line -->
<!-- 
<a href = "logout.php" style="font-size: 15px; text-decoration: none; padding: 100px;"> Logout </a>

</div>

</div> -->



  <!-- cover area -->
 
<div style="width: 800px; margin: auto; background-color: black; min-height: 400px">
<div style="
background-color: white; text-align: center; color: #305d9b">

<?php

$image = "images/1231.jpg";
if(file_exists($user_data['cover_image'])){
  $image = $user_data['cover_image'];

  //  if the file exists(image exist) then, asign it a new profile
}

?>


<img src="<?php echo $image; ?>" alt="" style="width:100%">
<?php

$image = "images/user_male.jpg";
if ($user_data['gender'] == 'Female'){
 $image = "images/user_female.jpg";  
}
if(file_exists($user_data['profile_image'])){
  $image = $user_data['profile_image'];

  //  if the file exists(image exist) then, asign it a new profile
}

?>


<img id = "profilepicc" src="<?php echo $image; ?>" alt="">
<br>
<span>
<a href = "change_profile_image.php?change=profile" style ="text-decoration: none;color: red;">Change Profile Picture </a>
| 
<a href = "change_profile_image.php?change=cover" style ="text-decoration: none;color: red;">Change Cover Image </a>
 <div id="username"><?php echo $user_data['first_name'] . " " .  $user_data['last_name'] ?> </div>
  <!--  User_date here allows to get first and last name of the user -->
 <br>
</span>
<b>
  <div id="menu-buttons"><a href = "index.php">Timeline </a>  </div>
  <div id="menu-buttons"> About  </div>
  <div id="menu-buttons">Friends  </div>
  <div id="menu-buttons">Photos  </div>
  <div id="menu-buttons">Settings</div> 
  <div id="menu-buttons"><a  style ="text-decoration: none; color:blue ;" href="cvindex.php"> CV Generator</a></div>
 

    

<!-- below cover area -->
<div style="display:flex;">

<!-- friends area -->



<div style="min-height: 400px; flex: 1;">

 <div id="friends-bar">
   <br><br><br> 
  Friends

 
<?php
  if($friends)
  {

    foreach ($friends as $friend) {
    $FRIEND_ROW = $user->get_user($friend['userid']);
      include("user.php");
    }
  }

  ?>

 </div>

</div> 

<!-- post area -->
<div style=" min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px;">

<div>
<form method ="POST" enctype="multipart/form-data">
<!-- enctype is for uploading photos -->
<textarea name="post" placeholder=" Whats on your mind?"></textarea>
<input type="file" name="file">
<input id="post-button" type="submit" value="Post">
<br>
</form>


</div>

<!-- posts -->
<div id="post-bar">
  <?php

  if($posts){
    foreach($posts as $ROW){

      $user = new User();
      $ROW_USER = $user->get_user($ROW['userid']);
      include("post.php");
    }
   
  }

?>

</div>
</div>
</div>
</div>

</body>
</html>