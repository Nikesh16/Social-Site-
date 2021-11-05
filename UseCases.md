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
  -View timeline <br> 
  -Change setting/about <br>
  -Generate Web portfolio <br>
  -Check notification bar <br>
  -Add/edit/delete comments <br>
  -View profile/timeline of following account <br>
 <h2>UseCase Diagram(UML diagram)</h2> 
  <div align="center">
<img width="500px;" height = "600px" src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/UseCaseDiagram.png" alt="cover" />
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
  ---- will edit this-----
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
 
 ---- will edit this-----
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
    <td> Users</td>
</tr>
   <tr>
  <td> Preconditions</td>
    <td>Users who want to send messages to other registered users in the system</td>
</tr>
    <tr>
  <td> Main stream</td>
    <td> Users have a different messaging option where they can type messages(message type: photo/text) and send it to other</td>
</tr>
    <tr>
  <td> Alternate streams</td>
    <td> none </td>
</tr>
    <tr>
  <td>Postconditions</td>
    <td>After clicking send option, the message delivers to the concerned user and he/she can reply the message</td>
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
      <td> The follow option </tr>
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
 
 ---- will edit this-----
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">View Timeline</td> 
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
 
 ---- will edit this-----
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Post Images/Text</td> 
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
 
 ---- will edit this-----
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Change About</td> 
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
 
 ---- will edit this-----
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Generate Web Portfolio</td> 
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
 
 ---- will edit this-----
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">add/edit/delete Comments </td> 
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
 
 ---- will edit this-----
  <table>
  <tr>
    <td>Use Case</td>
     <td colspan="2">Check Notification bar</td> 
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
  
  


