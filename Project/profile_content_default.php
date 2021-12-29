		<!-- <div style="display: flex;">	 -->

				<!--friends area-->			
				<!-- <div style="min-height: 400px;flex:1;"> -->
					
					<!-- <div id="friends_bar"> -->
						
						<!-- Following<br>
  -->
 						<?php 

 	 					 	if($friends)
 	 					 	{

 	 					 		foreach ($friends as $friend) {
 	 					 			# code...
 
 									$FRIEND_ROW = $user->get_user($friend['userid']);
 	 					 			include("user.php");
 	 					 		}
 	 					 	}
 	 			 

	 					 ?>

					<!-- </div> -->

				<!-- </div> -->

				<!--posts area-->
 				<!-- <div style="min-height: 400px;flex:2.5;padding: 20px;padding-right: 0px;">
 					
 					<div style=" padding: 10px;">

 						<form method="post" enctype="multipart/form-data">

	 						<textarea name="post" placeholder="Whats on your mind?"></textarea>
	 						<input type="file" name="file">
	 						<input id="post_button" type="submit" value="Post">
	 						<br>
 						</form> -->
 					

							


<form method="POST" enctype="multipart/form-data" class="create-post">
            <div class="profile-pictures-4">


			<?php 

$corner_image = "images/user_male.jpg";
if(isset($USER)){
	
	if(file_exists($USER['profile_image']))
	{
		$image_class = new Image();
		$corner_image = $image_class->get_thumb_profile($USER['profile_image']);
	}else{

		if($USER['gender'] == "Female"){

			$corner_image = "images/user_female.jpg";
		}
	}
}
?>
<img  src="<?php echo $corner_image ?> ">                
            </div>
            <textarea id="create-post" name="post" placeholder=" Whats on your mind?"></textarea>
            <!-- <input type="text" name="post" placeholder="What's Up,?" id="create-post"> -->
			<br>
            <input type="file" name="file">
            <input type="submit" value="post" class="btn btn-primary">
        </form>


 
	 				<!--posts-->
	 				<div id="post_bar">
	 					
 	 					 <?php 

 	 					 	if($posts)
 	 					 	{

 	 					 		foreach ($posts as $ROW) {
 	 					 			# code...

 	 					 			$user = new User();
 	 					 			$ROW_USER = $user->get_user($ROW['userid']);

 	 					 			include("post.php");
 	 					 		}
 	 					 	}
 	 			 
 	 					 	//get current url
 							// $pg = pagination_link();
	 					 ?>
  	 					
  	 					<!-- <a href="<?
						//    $pg['next_page']
						    ?>">
	 					 <input id="post_button" type="button" value="Next Page" style="float: right;width:150px;">
	 					 </a>
	 					 <a href="<?
						//   $pg['prev_page']
						   ?>">
	 					 <input id="post_button" type="button" value="Prev Page" style="float: left;width:150px;">
	 					 </a> -->
	 				</div>

 				</div>
			</div>