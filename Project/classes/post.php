<?php


class Post{
    private $error ="";
    public function create_post($userid, $data, $files){

        if(!empty($data['post']) || !empty($files['file']['name'])   || isset($data['is_profile_image']) || isset($data['is_cover_image'])){
            $myimage='';
            $has_image=0;
            $is_cover_image = 0;
            $is_profile_image =0;
            


         if(isset($data['is_profile_image']) || isset($data['is_cover_image'])){

            $myimage = $files;
            $has_image = 1;


            if(isset($data['is_profile_image'])){
                $is_profile_image =1;
            }
            if(isset($data['is_cover_image'])){
                $is_cover_image = 1;

            }
           
            }
            else {
            if(!empty($files['file']['name'])){
              
                $folder = "uploads/" . $userid . "/";
        
                //creating a folder
                if(!file_exists($folder))
                // checking if the file doesnt exist
                {
        
                  // if folder doesnt exist, then we are 
                  // making the folder using mkdir
        
                  mkdir($folder,0777,true);
                    file_put_contents($folder . "index.php", "");
                    //  in this folder, there will be automatic index.php file
                  // true is used for creating all the necessary folders
                }
        
                $image_class = new Image();
                $myimage = $folder . $image_class->generate_filename(15) . ".jpg";
                move_uploaded_file($_FILES['file']['tmp_name'], $myimage);
                $image_class->resize_image($myimage,$myimage,1500,1500);



                $image_class = new Image();
            
                $has_image = 1;

            }
            
        }
            
            
            
            $post ="";
            
            if(isset($data['post'])){
                $post= addslashes($data['post']);

            }
            
            // addslashes is used to escape any characters
            //  before saving them in our database
            $postid= $this->create_postid();
            $query = "insert into posts (userid,postid,post,image, has_image, is_cover_image, is_profile_image) 
            values ('$userid','$postid','$post','$myimage','$has_image','$is_cover_image','$is_profile_image')";


            $DB = new Database();
            $DB-> save($query);
        } else {
            $this->error ="Please type something to post!<br>";
        }
        return $this-> error;
    }


    private function create_postid(){
        $number = "";
        $length = rand(4,19);
        for($i = 0; $i < $length; $i++){
            $new_rand = rand(0,9);
             $number = $number . $new_rand; 
            
        }
        return $number;
  
    }


    public function get_posts($id){
        $query = "select * from posts where userid = '$id' order by id desc limit  20";
//   limit 20 only 20 posts will be shown  id is descending so it shows result by new id created first and last id in the last

        $DB = new Database();
        $result =  $DB-> read($query);


        if($result){
            return $result;       
         } else {
             return false;
         }
        
    }


    public function get_single_post($postid){
        $query ="SELECT * FROM posts WHERE postid='$postid' limit 1";
//   limit 20 only 20 posts will be shown  id is descending so it shows result by new id created first and last id in the last

        if(!is_numeric($postid)){

                return false;

        }
        $DB = new Database();
        $result =  $DB-> read($query);

        if($result){
            return $result[0];       
         } else {
             return false;
         }
        
    }


public function delete_post($postid){

    
    if(!is_numeric($postid)){
        return false;
    }

    $query = "delete from posts where postid = '$postid' limit 1";
    $DB = new Database();
    $DB -> save($query);







}


}



?>