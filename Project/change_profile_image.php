<?php

session_start();
	
include("classes/connect.php");
include("classes/login.php");
include("classes/user.php");
include("classes/post.php");
include("classes/image.php");

$login = new Login();
$user_data = $login->check_login($_SESSION['mybook_userid']);

//posting starts here
if($_SERVER['REQUEST_METHOD'] == "POST")
{

  if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != "")
  {

    if($_FILES['file']['type'] == "image/jpeg")
    {

      $allowed_size = (1024 * 1024) * 7;
      if($_FILES['file']['size'] < $allowed_size)
      {
        //everything is fine
        // folder name consists of userid so that admin can easily recognise which user is
        //  uploading the post 
        $folder = "uploads/" . $user_data['userid'] . "/";
        
        //creating a folder
        if(!file_exists($folder))
        // checking if the file doesnt exist
        {

          // if folder doesnt exist, then we are 
          // making the folder using mkdir

          mkdir($folder,0777,true);

          // true is used for creating all the necessary folders
        }

        $image = new Image();
        $filename = $folder . $image->generate_filename(15) . ".jpg";
        move_uploaded_file($_FILES['file']['tmp_name'], $filename);

        $change = "profile";

          //check for mode
          if(isset($_GET['change']))
          {

            $change = $_GET['change'];
          }

        

          print_r($_GET);
        if($change == "cover")
        {
          if(file_exists($user_data['cover_image']))
          {
            unlink($user_data['cover_image']);
          }
          $image->resize_image($filename,$filename,1500,1500);
        }else
        {
          if(file_exists($user_data['profile_image']))
          {
            unlink($user_data['profile_image']);
          }
          $image->resize_image($filename,$filename,1500,1500);
        }

        if(file_exists($filename))
        {

          $userid = $user_data['userid'];

          if($change == "cover")
          {
            $query = "update users set cover_image = '$filename' where userid = '$userid' limit 1";
            $_POST['is_cover_image'] = 1;

          }else
          {
            $query = "update users set profile_image = '$filename' where userid = '$userid' limit 1";
            $_POST['is_profile_image'] = 1;

          }


          $DB = new Database();
          $DB->save($query);

        
          $post = new Post();
         
          $post->create_post($userid,$_POST, $filename);
          //  here, we dont need to show result
        
          header(("Location: profile.php"));
          die;
        }

      }
      else
      {

        echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
        echo "<br>The following errors occured:<br><br>";
        echo "Only images of size 3Mb or lower are allowed!";
        echo "</div>";

      }
    }else
    {

      echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
      echo "<br>The following errors occured:<br><br>";
      echo "Only images of Jpeg type are allowed!";
      echo "</div>";

    }

  }else
  {
    echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
    echo "<br>The following errors occured:<br><br>";
    echo "please add a valid image!";
    echo "</div>";
  }
  
}

// session_start();

// include("classes/connect.php");
// include("classes/login.php");
// include("classes/user.php");
// include("classes/post.php");
// include("classes/image.php");

// $login = new Login();
// $user_data = $login->check_login($_SESSION['mybook_userid']);


// if($_SERVER['REQUEST_METHOD']  == "POST"){


  
//   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){

// // echo "<pre>";
// //   print_r($_FILES);
// //   echo "</pre>";
// //   die;

//     $allowed_size = (1024 *1024) * 12;
//   if($_FILES['file']['type'] == "image/jpeg"){
//         if($_FILES['file']['size'] < $allowed_size){
//             //everything is fine

//             $filename =  "uploads/" . $_FILES['file']['name'];  
//             move_uploaded_file($_FILES['file']['tmp_name'], $filename);
            
//             $image = new Image();
//             $image-> crop_image('$filename', '$filename', 800 ,800);
            
            
          


            
//             if(file_exists($filename)){
//               $userid = $user_data['userid'];
//               $query = "UPDATE users set profile_image ='$filename' WHERE userid = '$userid' limit 1";
//               $DB = new Database();
//               $DB-> save($query);
      
//               header("Location: profile.php");
//                   die;
              
//             }



//         } else {
//           echo "Sorry! Only 3 mb of images are allowed! ";

//         }

//   }else{
//     echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
// 			echo "<br>The following errors occured:<br><br>";
// 			echo "Only jpeg or png format images are allowed";
// 			echo "</div>";

//   }
 
//   if($_FILES['file']['type'] == "image/png"){
//     $allowed_size = (1024 *1024) * 3;
    
//     if($_FILES['file']['size'] < $allowed_size){
//       //everything is fine
//       $filename =  "uploads/" . $_FILES['file']['name'];  
//       move_uploaded_file($_FILES['file']['tmp_name'], $filename);

      
//       if(file_exists($filename)){
//         $userid = $user_data['userid'];
//         $query = "UPDATE users set profile_image ='$filename' WHERE userid = '$userid' limit 1";
//         // $DB = new Database();
//         $DB-> save($query);

//         header("Location: profile.php");
//             die;
        
//       }else {
//         echo "Sorry! Only 3 mb of images are allowed! ";
//         } 

//       } else {
//     echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
// 			echo "<br>The following errors occured:<br><br>";
// 			echo "Only jpeg or png format images are allowed";
// 			echo "</div>";
//   }


//     $filename =  "uploads/" . $_FILES['file']['name'];  
//   //  we need to use original filename , we cant use .tmp sp, we create filename
//   move_uploaded_file($_FILES['file']['tmp_name'], $filename);
//       if(file_exists($filename)){
//         $userid = $user_data['userid'];
//         $query = "UPDATE users set profile_image ='$filename' WHERE userid = '$userid' limit 1";
//         $DB = new Database();
//         $DB-> save($query);

//         header("Location: profile.php");
// 						die;
        
//       }
//     } else {
//       echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
// 			echo "<br>The following errors occured:<br><br>";
// 			echo "Please add a valid image";
// 			echo "</div>";
//     }
// }
// }


// 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile Image | Mybook</title>
    <link rel="stylesheet" href="styleprofile.css">

</head>
<body >


<!-- Top bar -->

<?php
include("header.php");

?>


  <!-- cover area -->

<div style="width: 900px; margin: auto; background-color: black; ">
<div style="
background-color: white; text-align: center; color: #305d9b">

<!-- 
<br>

<br>
<b> -->
  
 

<!-- below cover area -->
<div style="display:flex;">

<!-- friends area -->

<!-- 
<div style="min-height: 100px; flex: 1;">

 <div id="friends-bar" style="height: 10px;"> -->
<!--    
  Friends
   friend area  -->
   <br> <br> <br>
   <!-- <img  style ="display:inline;" id = "profilepicc" src="images/profilepicc.png" alt=""> -->
   <!-- <div id="username"><a style =" text-decoration: none;" href="profile.php"><?php echo $user_data['first_name'] . "<br> " . $user_data['last_name']; ?> </a> </div> -->
<!-- br tag because some people may have long name -->
 <!-- </div>
 
</div>  -->

 
<!-- post area -->

<div style=" min-height: 70px; flex: 2.5; padding: 20px; padding-right: 0px;">
 

<form  method="POST" enctype="multipart/form-data">
<input type="file" name ="file">
<input id="post-button" type="submit" value="Upload">

<!--  name is very important here -->

</form>


</body>
</html>