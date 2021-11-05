<h2>List of actors </h2>
  1.Administration <br> 
  - Delete the user in case of violation of our   
  <a href="https://github.com/Nikesh16/Social-Site-/blob/main/siteRules" onclick="window.open('example.html', '_self');"> terms and policies

</a>
<br>
  - Check the posts/comments <br>
  - View/delete the messages <br>
  - View/Delete the About section <br>
  - View the photos uploaded by the users <br>
  - Check the followers of the users <br>
  - Edit the post if required <br>
  - Edit the name of the user if required. <br>
  2.Guests <br>
  -Allowed to view the login and registration section <br>
  -Allowed to View terms and Policies  <br>
  -Allowed to read about the author of the site <br>
  3.Users <br>
  -Update profile and cover images <br>
  -Post images/text <br>
  -Follow users <br>
  -Send messages (message format: text/picture) <br>
  -Change setting/about <br>
  -Generate Web portfolio <br>
  -Check notification bar <br>
  -Add/edit/delete comments <br>
  -View profile/timeline of following account <br>
 <h2>UseCase Diagram(UML diagram)</h2> 
  <div align="center">
<img width="500px;" height = "600px" src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/UseCaseDiagram2.png" alt="cover" />
</div>

<h2>Use case specifications</h2>
<table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Registration</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> New users open their account to use our inside functionalities</td>
</tr>
  <tr>
  <td> Characters</td>
    <td> Guests</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Guests who want to register account in our site</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> Guest need to fill up the form which includes first name, last name, email, Password and confirm password. Under successful registration, the<b> Registration</b> case ends and the guest is redirected to login page</td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> Guest who uses long character first and last name, invalid email format and invalid password length  will be redirected to the same page with error message.</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>Under successful registration, the guest no longer remains guest but becomes our user whose registration details will be saved in our database</td>
</tr>
 </table>

  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Login</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> Newly registered users/guests enter their email</td>
</tr>
  <tr>
  <td> Characters</td>
    <td>Guests/Users </td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Guests/Users who want to login to our system</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> Login new Case consists of a form which includes email and password with login buttom. The guest redirects to their profile page under successful login attempt.  Guest need to fill up the form which includes first name, last name, email, Password and confirm password. Under successful registration, the<b> Registration</b> case ends and the guest is redirected to login page</td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> Guest who uses long character first and last name, invalid email format and invalid password length  will be redirected to the same page with error message.</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>Under successful registration, the guest no longer remains guest but becomes our user whose registration details will be saved in our database</td>
</tr>
 </table>
 
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2"> Change Settings</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> Allows the user/admin to change the email, password and about section. </td>
</tr>
  <tr>
  <td> Characters</td>
    <td> User/Admin</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Users who want to change email/password and wish to write about themselves. Admin monitors the settings done by the clients. The updated data's will be automatically saved into the database</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> Users need to click on the Setting option on their profile page. It contains password, name and about me section. User can update their information which will appear in about section </td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> The length of about is fix. Users are allowed to type about themselve within that range.</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>After saving, the About section will be updated using setting </td>
</tr>
 </table>
 

  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Update profile and cover images</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td>It lies in profile section. User can upload photos(formats: jpeg/png). The photo shouldnot exceed the maximum size</td>
</tr>
  <tr>
  <td> Characters</td>
    <td>Users</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Users who want to change their profile and cover images</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> Users need to click on the change profile photo/ change cover photo. After that, they are redirected to the page where they can upload photo. The successful attempt leads changing of their photos </td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td>Users trying to use other photo formats than jpg/png and high resolution photos which exceed our maximum photo size will be redirected to the same page with a prompt message. </td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>Under successful attemp, the user redirects to their profile page where they can see the changes they made.</td>
</tr>
 </table>
 
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Send Messages</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> This Use case allows user to send message to other registered users in our system</td>
</tr>
  <tr>
  <td> Characters</td>
    <td> Users/Admin</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Users/admin who want to send messages to  registered users in the system</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> Users have a different messaging option where they can type messages(message type: photo/text) and send it to other. Admins can send mails to their users.</td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> none </td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>The users can click send option, the message delivers to the concerned user and he/she can reply the message. Admin uses mailing system to mail the clients.</td>
</tr>
 </table>
 

  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Follow Users</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> Follow Users makes you see the activities done by him/her </td>
</tr>
  <tr>
  <td> Characters</td>
    <td> Users</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Users who want to see the activities of followed peoples </td>
</tr>
    <tr>
  <td> Main stream</td>
      <td> The follow option lie on the timeline section where user can check the number of followers. The number of follower increases as soon as you or someone else start following. </tr>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> none</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>After the user follow him/her,  he/she can be able to view the activities such as change of photos and posts. </td>
</tr>
 </table>
 
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">View Timeline</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> User can view their own timeline as well as the timeline of other registered users</td>
</tr>
  <tr>
  <td> Characters</td>
    <td> Users</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td> Users who want to view registered users timeline</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td>Users can click on the name of other registered users which redirects them to their timeline.</td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> None</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>The user redirects to other registered users timeline where they can check their activities.</td>
</tr>
 </table>
 


  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Post Images/Text</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> Function which allows to post images/photos</td>
</tr>
  <tr>
  <td> Characters</td>
    <td> Users</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Users who want to share their thoughts and daily activities on their timeline. </td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> After loggin in to our system, the profile page consists of textbar and upload section where they can type post and post in the system </td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> None </td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>After clicking post buttom, the pictures/posts posted by the users will appear on the same page</td>
</tr>
 </table>
 

  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Generate Web Portfolio</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> Generate Web Portfolio is completely new functionality which none of the social medias has used till date. In this modern era, nobody wants to carry a Resume paper and apply for job. They like to show their web portfolio. So, our site is the best place where you can generate the web portfolio. Note that, we donot save the user's information in our database because we respect user's privacy.
    </td>
</tr>
  <tr>
  <td> Characters</td>
    <td> Users</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Users who want to generate their web portfolio</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td>  User's need to fill up the forms and go further. The system will automatically generate the beautiful web portfolio.</td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> The forms consists of email, school , university and many more. Under valid or successful attempt, user can move further and generate their portfolio else the error messages pops up.</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>The successful entry of the form leads them to beautiful automatically generated web portfolio</td>
</tr>
 </table>
 
 
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">add/edit/delete Comments </td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> The funciton allows users to make changes in their comments/post  </td>
</tr>
  <tr>
  <td> Characters</td>
    <td> Users</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Users who wants to edit/delete posts and comments</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> Users are allowed to edit as well as delete their comments. They can also delete their post.</td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> None</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>The deleted post no longer appears on the user's profile page. </td>
</tr>
 </table>
 
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Notification bar</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> Notification bar notifies user about the activities that other users did on their profile. For example: Like,comment and many more</td>
</tr>
  <tr>
  <td> Characters</td>
    <td> Users</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>None</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> The notification bar allows user to check the recent activities. </td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> none</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>After clicking the notification option, the user can check activities of other users on their profile.</td>
</tr>
 </table>
  
  
   
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Delete Profile</td> 
    </tr>
  <tr>
  <td> Short Description</td>
    <td> Notification bar notifies user about the activities that other users did on their profile. For example: Like,comment and many more</td>
</tr>
  <tr>
  <td> Characters</td>
    <td>Admin </td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>None</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> The Admin has right to delete the profile incase of misuse of our site.</td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> none</td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td> After deletion of account, the user cannot login with the same account into our system.</td>
</tr>
 </table>
  
  


