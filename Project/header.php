<div id="profilebar">
    <div style="width: 800px; margin: auto; font-size: 30px;"> <a href = "profile.php" style ="text-decoration: none; color: white;"> Mybook </a> 
  
<!-- non breakable space will add whitespace -->
<input type="text" id="searchbox" placeholder="Search for people, places and things">        

<!-- bug cannot click the button search for people -->
<!-- note that span doesnt create a new line -->

<?php 
$corner_image = "images/user_male.jpg";

if(isset($user_data)){
    $image_class = new image();
$corner_image = $image_class->get_thumb_profile($user_data['profile_image']);
}
?>


<img src="<?php echo $corner_image ?>" alt="" id="icon_profile_pic" >
<span>
<a href = "logout.php" style="font-size: 15px; text-decoration: none; padding: 100px;"> Logout </a>
</span>

</div>
</div>