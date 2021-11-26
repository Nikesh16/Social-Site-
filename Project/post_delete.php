
<div id="post">
   
<div>
		
        <?php 

            $image = "images/user_male.jpg";
            if($ROW_USER['gender'] == "Female")
            {
                $image = "images/user_female.jpg";
            }

            if(file_exists($ROW_USER['profile_image']))
            {

              $corner_image = $image_class->get_thumb_profile($user_data['profile_image']);
                
            }
            ?>
</div>





<?php 
$corner_image = "images/user_male.jpg";

if(isset($user_data)){
$corner_image = $user_data['profile_image'];
}
?>


<img src="<?php echo $corner_image ?>" alt="" id="icon_profile_pic" >  



<img src="<?php echo $corner_image ?>"  style="width: 75px; margin:3px background-color: black; display: flex; border-radius: 60%;" alt="">
</div>
<div>
 
          
<div id="username1"> <a style ="text-decoration: none;" href="index.php"> 
  
  <?php  
    
    
    
   
    echo htmlspecialchars($user_data['first_name']) . " " .  htmlspecialchars($user_data['last_name']); 
          ?>

          <?php 
    if($ROW['is_profile_image']){
         $pronoun = "his";
      if ($ROW_USER['gender'] == "Female"){
        $pronoun = "her";
      }
      echo " \t <span>updated  $pronoun  profile image</span>";
    }   
?>

<?php  
    
    
    
   
    
          ?>

          <?php 
    if($ROW['is_cover_image']){
         $pronoun = "his";
      if ($ROW_USER['gender'] == "Female"){
        $pronoun = "her";
      }
      echo " \t <span>updated  $pronoun  cover image</span>";
    }   
?>

  
  
     </a>
     </div>
<div style ="text-align: justify;">
<?php 

 echo htmlspecialchars($ROW['post']);
//  post is the column that we need as data here
?> 


<br>

<?php 

if(file_exists($ROW['image'])){
$post_image = $image_class-> get_thumb_post($ROW['image']);
echo "<img src ='$post_image' style ='width: 60%; height: auto;'/>";
}

 ?>
 
</div>
<br> <br>



<!-- 
<a href="#">Like </a>.<a href="#"> Comment </a>.  -->

<span style ="color: grey";>
<?php 
// echo htmlspecialchars($ROW['date']);
?>

</span>

<span style ="color: grey; float: right;">


<!-- 
<a href="edit.php"> Edit </a> -->



</span>

</div>
<!-- 
<div id="post">
<img src="images/profilepicc.png"  style="width: 75px; margin:3px;"alt="">
</div>
<div>
  <div  id="username1">Third Guy</div>
 Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus temporibus quos necessitatibus porro id mollitia sequi omnis adipisci tempore dignissimos.
<br> <br>
<a href="#">Like </a>.<a href="#"> Comment </a>. October 21 2021
</div> -->