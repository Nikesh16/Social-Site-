<b>List of entities, attributes, and relationships</b>

<table style="height: 600px;">
  <tr>
    <td>
List of entities  
      </td>
   <td>
    Attributes  
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
        Gender is one of the option in the registration section. It stores whether the user is male or female.
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
       Stores the date and time of registration
       </td>
    </tr>
      <tr>
    <td>
      likes
      </td>
     <td>
      Likes generally means like following. It displays number of followers of the user.
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
    Attributes  
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
      Comments
      </td>
     <td>
       Adding comments in the post/profile
       </td>
    </tr>
       <tr>
    <td>
      likes
      </td>
     <td>
       Stores number of likes in the post
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
  
  
  ------
  
  <table style="height: 600px;">
  <tr>
    <td>
List of entities  
      </td>
   <td>
    Attributes  
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
     
      
       likes
</td> 
    <td>
    It stores the userid and date of the person who likes the post/images. 
      </td>
    </tr>
  <tr>
    <td>
      contentid
      </td>
    <td>
      It stores userid or postid from above columns 
      </td>
    </tr>
   
   <tr>
    <td>
      type
      </td>
     <td>
      Type stores infomation about contentid. Contentid has connection with postid and userid. If type stores post, then contentid here means postid.  
       </td>
    </tr>
   <tr>
    <td>
      Following
      </td>
     <td>
       It stores the userid and date of users whom he/she is following.
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
   Attributes
     </td>
    <td>
    Сomments
</td>
    </tr>
  <tr>
    <td rowspan="10">
      notifications
      </td>
</td> 
    <td>
      Userid 
      </td>
    <td>
     It stores the userid of the user who is engaged in performing thr activities such as follow, likes and comments. 
    </td>
    </tr>
  <tr>
    <td>
      activity
      </td>
    <td>
      Stores texts inorder to notify the activities such as follow, likes, comments. 
      </td>
    </tr>
   
   <tr>
    <td>
      contentid
      </td>
     <td>
       contentid stores postid or userid. 
       </td>
    </tr>
   <tr>
    <td>
      content_owner
      </td>
     <td>
      It stores the the userid of the post owner. The userid is stored in users table of our database.
       </td>
    </tr>
   <tr>
    <td>
      content_type
      </td>
     <td>
      Generally, it stores type of the content like post, profile and comment
       </td>
    </tr>
       <tr>
    <td>
      date
      </td>
     <td>
      It stores the date and time of notification. 
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
    Attributes  
     </td>
    <td>
    Сomments
</td>
    </tr>
  <tr>
    <td rowspan="10">
      following_content
      </td>
   
    
</td> 
    <td>
     Userid 
      </td>
   <td> is same column from users table. Its used here inorder to know which user is engaged in following the content. 
     </td>
    </tr>
  <tr>
    <td>
      contentid
      </td>
    <td>
     Stores either the postid or userid depending on the information provided by content_type
      </td>
    </tr>
   
   <tr>
    <td>
      content_type
      </td>
     <td>
       It stores information such as post, comment or profile.
       </td>
    </tr>
   <tr>
    <td>
     date
      </td>
     <td>
       Stores the date of following the post/user.
       </td>
    </tr>

  </table>
<h3> Thus, there are the following relationships between entities:</h3> <br>
- A one-to-many relationship(Post_creation) between users and posts. A single user can create multiple numbers of post.  <br>
- A one-to-many relationship (User_notification) between users and notifications. It means that a single user can get multiple number of notifications. <br>
- A many-to-one relationship (User_follow)between users and Following. Many followers can follow the same account. <br>
- A one-to-many relationship (Post_following) between Following_content and posts. Meaning, the following content may be one but the posts which include (likes, comments and many more ) can be multiple. <br>
- A one-to-many relationship(Post_like) between posts and likes. It means that one post can have multiple number of likes in it. <br>
- A one-to-many relationship(Post_notification) between posts and notifications. Meaning, single post can have multiple options such as likes, comments, etc resulting in multiple number of posts.<br>
- One-to-many relationshiop (User_like) between users and likes. A single user can have multiple number of likes in his/her photos/post.<br>
 
 
 <h2> :fire:ER Relational Diagram </h2>

<img width="100%" height = "150%" src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/ER-Relational%20Diagram.jpg" alt="cover" />



 <h2> :fire: ER Logical Diagram </h2>

<img width="100%" height = "150%" src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/ER%20Logical%20Diagram.jpeg" alt="cover" />

  
  
