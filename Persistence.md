<b>List of entities, properties, and relationships</b>


<table style="height: 600px;">
  <tr>
    <td>
List of entities  
      </td>
   <td>
    Property  
     </td>
    <td>
    Сomments
</td>
    </tr>
  <tr>
    <td rowspan="15">
      users
      </td>
    <tr>
    <td>
      id
      </td>
    <td>
      Primary Key  
      </td>
    </tr>
  <tr>
    <td>
       userid
</td> 
    <td>
     Unique randomly generated number. Each user can have only one userid. It helps to check the activities of exact user. 
    
     
 <tr>
    <td>
       email
</td> 
    <td>
     Email used by the guest during registration is saved here. It's used for logging in to the site.
   
     
   <tr>
    <td>
       password
</td> 
    <td>
     During registration, guest must supply password for successful registration. The password, then is saved in our site.
      </td>
    </tr>
  
  
   <tr>
    <td>
       about
</td> 
    <td>
     This column stores the information that the user inputs in the about section.
      </td>
    </tr>
  
  <tr>
    <td>
      first_name
      </td>
    <td>
      Store first name of the user. Guest enter their first name during registration on our site.
      </td>
    </tr>
    
   <tr>
    <td>
      last_name
      </td>
     <td>
       Stores last name entered by the guest during the registration process.
       </td>
    </tr>
   <tr>
    <td>
      gender
      </td>
     <td>
        Gender is one of the option in the registration section. It stores whether the user is male or female. The maximum letters to store in this column is 6 that is Female.
     </td>
    </tr>
   <tr>
    <td>
      url_address
      </td>
     <td>
      Stores the url of the user. The stored url is in the form of (first_name). (last_name) 
       </td>
    </tr>
       <tr>
    <td>
      profile_image
      </td>
     <td>
       Stores the location of profile_image. Profile image is saved in the project folder.
       </td>
    </tr>
       <tr>
    <td>
      cover_image
      </td>
     <td>
       It stores the location of the cover image. Cover image is saved in the project folder.
       </td>
    </tr>
       <tr>
    <td>
      date
      </td>
     <td>
       Stores the date and time of posting photos/ posts. 
       </td>
    </tr>
  </table>


  ------
    
<table style="height: 600px;">
  <tr>
    <td>
List of entities  
      </td>
   <td>
    Property  
     </td>
    <td>
    Сomments
</td>
    </tr>
  <tr>
    <td rowspan="15">
      posts
      </td>
    <tr>
    <td>
      id
      </td>
    <td>
     Primary Key
     
     
  <tr>
    <td>
       postid
</td> 
    <td>
     Stores unique Postid for each posts. The post may be profile picture, cover image, or any images/text posts.
      </td>
    </tr>
  <tr>
    <td>
      post
      </td>
    <td>
      Post column stores the posted text by the user. 
      </td>
    </tr>
    <tr>
    <td>
      userid
      </td>
    <td>
      Userid is same column from users table. Its used here inorder to know which user is engaged in posting stuffs. 
      </td>
    </tr>
  <tr>
    <td>
      image
      </td>
    <td>
      Image column stores the file location of uploaded photos in the post. 
      </td>
    </tr>
   <tr>
    <td>
      is_profile_image
      </td>
     <td>
      is_profile_image stores 1 if the user updates his/her profile picture, else stores 0.
       </td>
    </tr>
   <tr>
    <td>
      is_cover_image
      </td>
     <td>
      is_cover_image stores 1 if the user updates his/her cover image, else stores 0.
       </td>
    </tr>
   <tr>
    <td>
      comments
      </td>
     <td>
       Stores number of comments in the post. 
       </td>
    </tr>
       <tr>
    <td>
      likes
      </td>
     <td>
       Stores number of like in the post
       </td>
    </tr>
       <tr>
    <td>
      date
      </td>
     <td>
      Stores the date and time of posting images/text
       </td>
    </tr>
       <tr>
    <td>
      has_image
      </td>
     <td>
       The has_image column stores number of images in the post. Defaut, 1 if its a single image and 0 if there's no image in the post.
       </td>
    </tr>
  </table>
  <table style="height: 600px;">
  <tr>
    <td>
List of entities  
      </td>
   <td>
    Property  
     </td>
    <td>
    Сomments
</td>
    </tr>
  <tr>
    <td rowspan="10">
     notification_seen
      </td>
    <tr>
    <td>
      id
      </td>
    <td>
      test id
      </td>
    </tr>
    <td>
       userid
</td> 
    <td>
     comment for userid
      </td>
    </tr>
  <tr>
    <td>
      notification_id
      </td>
    <td>
      test comment for notification_id
      </td>
    </tr>
  </table>
  
  ------
  
  <table style="height: 600px;">
  <tr>
    <td>
List of entities  
      </td>
   <td>
    Property  
     </td>
    <td>
    Сomments
</td>
    </tr>
  <tr>
    <td rowspan="10">
      notifications
      </td>
    <tr>
    <td>
      id
      </td>
    <td>
      test id
      </td>
    </tr>
    <td>
       userid
</td> 
    <td>
     comment for userid
      </td>
    </tr>
  <tr>
    <td>
      activity
      </td>
    <td>
      test activity
      </td>
    </tr>
   
   <tr>
    <td>
      contentid
      </td>
     <td>
       text comment for contentid
       </td>
    </tr>
   <tr>
    <td>
      content_owner
      </td>
     <td>
       test comment for  content_owner
       </td>
    </tr>
   <tr>
    <td>
      content_type
      </td>
     <td>
       test comment for content_type
       </td>
    </tr>
       <tr>
    <td>
      date
      </td>
     <td>
       test comment for date
       </td>
    </tr>
  </table>
  
  ------
  
  
  
  <table style="height: 600px;">
  <tr>
    <td>
List of entities  
      </td>
   <td>
    Property  
     </td>
    <td>
    Сomments
</td>
    </tr>
  <tr>
    <td rowspan="10">
      likes
      </td>
    <tr>
    <td>
      id
      </td>
    <td>
      test id
      </td>
    </tr>
    <td>
       likes
</td> 
    <td>
     comment for likes
      </td>
    </tr>
  <tr>
    <td>
      contentid
      </td>
    <td>
      test contentid
      </td>
    </tr>
   
   <tr>
    <td>
      following
      </td>
     <td>
       text comment for following
       </td>
    </tr>
  </table>
  
  
  ------
  
  
  
  <table style="height: 600px;">
  <tr>
    <td>
List of entities  
      </td>
   <td>
    Property  
     </td>
    <td>
    Сomments
</td>
    </tr>
  <tr>
    <td rowspan="10">
      following_content
      </td>
    <tr>
    <td>
      id
      </td>
    <td>
      test id
      </td>
    </tr>
    <td>
       userid
</td> 
    <td>
     comment for userid
      </td>
    </tr>
  <tr>
    <td>
      contentid
      </td>
    <td>
      test contentid
      </td>
    </tr>
   
   <tr>
    <td>
      content_type
      </td>
     <td>
       text comment for content_type
       </td>
    </tr>
   <tr>
    <td>
     date
      </td>
     <td>
       test comment for date
       </td>
    </tr>

  </table>
 
  
  
