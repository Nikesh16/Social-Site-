<?php

	include("classes/autoload.php");

	$login = new Login();
	$_SESSION['mybook_userid'] = isset($_SESSION['mybook_userid']) ? $_SESSION['mybook_userid'] : 0;
	
	$user_data = $login->check_login($_SESSION['mybook_userid'],false);
 
 	$USER = $user_data;
 	
 	if(isset($_GET['id']) && is_numeric($_GET['id'])){

	 	$profile = new Profile();
	 	$profile_data = $profile->get_profile($_GET['id']);

	 	if(is_array($profile_data)){
	 		$user_data = $profile_data[0];
	 	}

 	}
 	
	//posting starts here
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		include("change_image.php");
		
		if(isset($_POST['first_name'])){

			$settings_class = new Settings();
			$settings_class->save_settings($_POST,$_SESSION['mybook_userid']);

		}else{

			$post = new Post();
			$id = $_SESSION['mybook_userid'];
			$result = $post->create_post($id, $_POST,$_FILES);
			
			if($result == "")
			{
				header("Location: profile.php");
				die;
			}else
			{

				echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
				echo "<br>The following errors occured:<br><br>";
				echo $result;
				echo "</div>";
			}
		}
			
	}

	//collect posts
	$post = new Post();
	$id = $user_data['userid'];
	
	$posts = $post->get_posts($id);

	//collect friends
	$user = new User();
 	
	$friends = $user->get_following($user_data['userid'],"user");

	$image_class = new Image();

	//check if this is from a notification
	if(isset($_GET['notif'])){
		notification_seen($_GET['notif']);
	}

?>



<!-- =================NEW -====================== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialHood</title>
    <link rel="stylesheet" href="styleprofile2.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
<body>
    <?php
	include("header.php");
	
	?>


    <!-- main section  -->
<main>
<!-- main section -->

<div class="container">
    <div class="left">
        <a href="" class="profile">
        <div class="profile-photo">
		
		<!-- ===========Profile pic changing part -->
		<?php

// $image = "images/user_male.jpg";
if ($user_data['gender'] == 'Female'){
 $image = "images/user_female.jpg";  
}
if(file_exists($user_data['profile_image'])){
  $image = $user_data['profile_image'];

  //  if the file exists(image exist) then, asign it a new profile
}

?>

<img style="width: 150px;" src="<?php echo $image; ?>" alt="">
            
        </div>
		<a href = "profile.php" style ="text-decoration: none;"><?php echo $user_data['first_name'] . " " .  $user_data['last_name'] ?> </a> 
        <div class="handle">
             
            
            <p class="text-muted">
            
            </p>
        </div>
        </a>


        <!-- SIDEBAR -->
        <div class="sidebar">
           
			<?php 
				 if($user_data['userid'] == $_SESSION['mybook_userid']){
					echo '<a href="profile.php?section=about&id='.$user_data['userid'].'" class="menu-item" id="notifications"><img class="i" src="https://img.icons8.com/wired/40/000000/about.png"/> About</a>';
				}	
				
				?>


           

				
             
                
           
            

			<a href="profile.php?section=followers&id=<?php echo $user_data['userid'] ?>" class="menu-item"><img  class="i" src="https://img.icons8.com/external-wanicon-lineal-wanicon/40/000000/external-followers-influencer-marketing-wanicon-lineal-wanicon.png"/>Following</a>
            
        
            


            <!-- <a href="" class="menu-item"> -->
                <span style="display:block;"><a href="indexresume.php"> <img src="https://img.icons8.com/ios/50/000000/submit-resume.png"/>Web Portfolio</a> </span>

                <!-- Notification Popup -->
                <div class="notifications-popup">
                    <div>
                        <div class="profile-pictures-2">
                            <!-- <img src="12.jpg"> -->
                        </div>
                        <div class="notifications-body">
                            <!-- <b>Nikesh Acharya </b>  accepted your friend request
                            <small class= "text-muted">2 Days ago</small> -->

                            
                        </div>
                    </div>
                    <div>
                        <div class="profile-pictures-2">
                            <!-- <img src="12.jpg"> -->
                        </div>
                        <div class="notifications-body">
                        <!-- <b>Nikesh Acharya </b>  accepted your friend request
                        <small class= "text-muted">2 Days ago</small> -->

                            
                        </div>
                    </div>

                </div>
            </a>

          


			<a href="profile.php?section=photos&id=<?php echo $user_data['userid'] ?>"  class="menu-item"><div id="menu_buttons"><img src="https://img.icons8.com/ios/50/000000/stack-of-photos--v1.png"/>Photos</div></a>
                <!-- <span style="display:block;"> <img src="https://img.icons8.com/ios/50/000000/stack-of-photos--v1.png"/> Photos </span> -->
                
            </a>
           



			

                <!-- <span style="display:block;"> <img src="https://img.icons8.com/ios/50/000000/stack-of-photos--v1.png"/> Themes </span> -->
                
           
            <!-- <a href="" class="menu-item"> -->
			<?php 
				if($user_data['userid'] == $_SESSION['mybook_userid']){
						echo '<a href="profile.php?section=settings&id='.$user_data['userid'].'" class="menu-item">
						<span style="display:block;">Settings</span><img src="https://img.icons8.com/material-outlined/50/000000/settings--v3.png"/></a>';
					}	
          
				?>
				
               
            </a>
        </a>
       
            
        </div>
    </div>
    <div class="middle">
        <!-- Cover image -->



        
        <div class="profile-pictures-3">
			<!-- ==========Cover Pic changing part -->
		<?php

$image = "images/cover_image.jpg";
if(file_exists($user_data['cover_image'])){
  $image = $user_data['cover_image'];

  //  if the file exists(image exist) then, asign it a new profile
}

?>


<img src="<?php echo $image; ?>" alt="" style="width:100%">
		
<!-- <img src="12.jpg"> -->
		
 
			
<span  class="picchange"style="text-align: center; margin-left: 20%; padding-top: 60px; "> 

                </span>


        <span  class="picchange"style="text-align: center; margin-left: 20%; padding-top: 60px; ">  
		
<?php 
$mylikes = $user_data['likes'];

?>

<a href="like.php?type=user&id=<?php echo $user_data['userid'] ?>">

</a> 


<?php 
$mylikes = $user_data['likes'];

?>




		<h5><span> 
		<a href="like.php?type=user&id=<?php echo $user_data['userid'] ?>">	
		<input type="button" name="post_button"style="color:purple;" value="Follow (<?php  echo $mylikes?>)"></a> <a href = "change_profile_image.php?change=cover" style ="text-decoration: none;"> Change</span> Cover Picture</a> || <span><a href = "change_profile_image.php?change=profile" style ="text-decoration: none;">Change</span> Profile Picture </a></span></h6>


    
        </div>
    
<!-- ==============Below cover image =============-->

<?php 

	 			$section = "default";
	 			if(isset($_GET['section'])){

	 				$section = $_GET['section'];
	 			}

	 			if($section == "default"){

	 				include("profile_content_default.php");
	 			 
	 			}elseif($section == "following"){
	 				
	 				include("profile_content_following.php");

	 			}elseif($section == "followers"){

	 				include("profile_content_followers.php");

	 			}elseif($section == "about"){

	 				include("profile_content_about.php");

	 			}elseif($section == "settings"){

	 				include("profile_content_settings.php");

	 			}elseif($section == "photos"){

					include("profile_content_photos.php");
				}elseif($section == "theme"){

					include("profile_content_theme.php");
				}



	 		?>












        <form action="" class="create-post">



            <div class="profile-pictures-4">
                <img src="12.jpg" alt="">


            </div>
            <input type="text" placeholder="What's Up, Nikesh?" id="create-post">
            <input type="submit" value="post" class="btn btn-primary">
        </form>
<!-- =============FEED2=============== -->


<!-- =================NEW -====================== -->


<!DOCTYPE html>
	<html>
	<head>
		<title>Profile | Mybook</title>
	</head>

	<style type="text/css">
		
		/* #blue_bar{

			height: 50px;
			background-color: #405d9b;
			color: #d9dfeb;

		} */

		/* #search_box{

			width: 400px;
			height: 20px;
			border-radius: 5px;
			border:none;
			padding: 4px;
			font-size: 14px;
			background-image: url(search.png);
			background-repeat: no-repeat;
			background-position: right;

		} */

		#textbox{

			width: 100%;
			height: 20px;
			border-radius: 5px;
			border:none;
			padding: 4px;
			font-size: 14px;
			border: solid thin grey;
			margin:10px;
 
		}

		#profile_pic{

			width: 150px;
			margin-top: -300px;
			border-radius: 50%;
			border:solid 2px white;
		}

		#menu_buttons{

			width: 100px;
			display: inline-block;
			margin:2px;
		}

		#friends_img{

			width: 75px;
			float: left;
			margin:8px;

		}

		#friends_bar{

			background-color: white;
			min-height: 400px;
			margin-top: 20px;
			color: #aaa;
			padding: 8px;
		}

		#friends{

		 	clear: both;
		 	font-size: 12px;
		 	font-weight: bold;
		 	color: #405d9b;
		}

		textarea{

			width: 100%;
			border:none;
			font-family: tahoma;
			font-size: 14px;
			height: 60px;

		}

		#post_button{

			float: right;
			background-color: #405d9b;
			border:none;
			color: white;
			padding: 4px;
			font-size: 14px;
			border-radius: 2px;
			width: 50px;
			min-width: 50px;
			cursor: pointer;
		}
 
 		#post_bar{

 			margin-top: 20px;
 			background-color: white;
 			padding: 10px;
 		}

 		#post{

 			padding: 4px;
 			font-size: 13px;
 			display: flex;
 			margin-bottom: 20px;
 		}

	</style>

	<body style="font-family: tahoma; background-color: #d0d8e4;">


	</body>
</html>

<script type="text/javascript">
	
	function show_change_profile_image(event){

		event.preventDefault();
		var profile_image = document.getElementById("change_profile_image");
		profile_image.style.display = "block";
	}


	function hide_change_profile_image(){

		var profile_image = document.getElementById("change_profile_image");
		profile_image.style.display = "none";
	}

	
	function show_change_cover_image(event){

		event.preventDefault();
		var cover_image = document.getElementById("change_cover_image");
		cover_image.style.display = "block";
	}


	function hide_change_cover_image(){

		var cover_image = document.getElementById("change_cover_image");
		cover_image.style.display = "none";
	}


	window.onkeydown = function(key){

		if(key.keyCode == 27){

			//esc key was pressed
			hide_change_profile_image();
			hide_change_cover_image();
		}
	}

	
</script>