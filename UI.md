# Designing ways to interact with the application #
### List of Interface ###
1. HomePage
2.   Login<br>  
- If email and password is wrong, the message displays no such email/password found.
- if either email or password is wrong, it displays error in email/password. It's done to protect from hackers <br>
3.  Sign Up ▶️: Authorized sign Up.  <br>
- No space after first and last name  <br>
- All the sections of sign Up are compulsory required to fill up. Shows error if is not filled 
- First and last name cannot be number  
- Confirm password and password must match. 

<h2>Registered/Authorized User  </h2>

### Profile page consists of following things: ###  
 4. Header bar: It consists of:
  - Search people design: People can search for the registered users in our site <br>
  - Notification bell
  - Logout: Logout option can be found in the header area of each page in our site.
  - SocialHood text in the top right corner of header. On clicking it, people navigate to their profile page.
 

5. Settings: <br>
 ---> Change First and Last name <br>
 ---> Change Email <br>
 ---> Change password <br>
 ---> Change gender <br>
 ---> Update About me <br>
* View Timeline/profile of other people's(Load profile by userid) : People can search the name of other registered users and view their timeline. Like, comments can be done in their timeline as well <br>
 --->Same interface as registered user
 
6. About: The thing that you type in the about textarea in the setting appears here. <br>
7. Follow <br>
8.Following: People can get to know who is following them.  <br>
9.Photos: People can view all the photos that they have uploaded in our site in this section. <br> 
10.Web Portfolio: A beautiful web portfolio based on the informations provided by the user is generated.  <br>
 * Inside Web Portfolio, there are 3 forms:<br>
 --->indexResume, biodata1, biodata2: People enter their names and other informations. The data entered here is transferred to next form. Again, the data entered in the next form is transferred into the next form and so on the data reaches to the final web portfolio. No data is saved in our database because we care about your privacy.  
 
 
### Post Section  ### 
 11. (Post Section) Profile photo and Cover Section: The change will effect on four places:  <br>
  ---> On the header section: the small icon on the header section changes to your profile picture. <br>
  ---> The top right profile picture corner below header changes to profile picture <br>
  ---> the small icon on the post input form changes to profile picture <br>
  ---> The picture on Web portfolio changes to your recent profile picture.
  12.Post: People can post photos and text (Photos of jpg format is only allowed in other case, it shows error)
 * Like
 * Comment <br>
---> People can view the comments done by other users. They can also edit, delete their comment. <br>
---> The person viewing the comment dont have right to edit and delete the comment. <br>
---> Interface to see the comments done by the users
---> Buttom to go back to profile page. 

 *  Edit  <br>
 ---> After clicking the edit button, user navigate to different section where they can edit their comment/post. <br>
 ---> Button to go back to the profile page
*   Delete
---><h4>The header is located in all the pages of our site. People can easily navigate to their profile page whenever they want. </h4>
--->Additionaly, the user has theme section in the menu bar, where they can change the theme of the site in future. 
 <h4>14. Admin </h4>
 - Has all the functions same as registered user.
 - Additionally, admin can delete any post/comments. 
 :fire:Sketches of interfaces:
 
  <table>
 <tr>
  <td>
  1. Homepage
<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_20.png"> 
   </td>
 

 </table>
 
---------------------------------------
 <table>
 <tr>
  <td>
  3. Signup
<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_21.png"> 
   </td>
 
<td> 2. Login <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/login.png"> </td> 
 </table>
-----------------------------------------
 
 <table>
 <tr>
  <td>
  3. Header Bar
<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_1.png"> 
   </td>
 
<td>- Search people with result<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/search%20with%20result.png"> </td> 
  </tr>
  <td>- Notification without result<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/search%20without%20result.png"> </td> 
 
 </table>
-----------------------------------------

 <table>
 <tr>
  <td>
  5.Profile Page Original (Profile photo and cover section)
<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/finaloriginal.png"> 
   </td>
 
<td> 5.Profile Page after Changing cover and profile images (Profile photo and cover section)<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_5.png"> </td> 
 </table>  
-----------------------------------------

 <table>
 <tr>
  <td>
  5.Setting
<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Setting.png"> 
   </td>
 
<td> 7.About <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_6.png"> </td> 
 </table>
-----------------------------------------

  <table>
 <tr>
  <td>
  8.Follow (Before Following)
<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_9.png"> 
   </td>
 
<td> 9.Following<img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_10.png"> </td> 
 </table>
 
 
 
-----------------------------------------
 
 
 <table>
 <tr>
  <td>
  11.Web  Portfolio
   <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Biodata1.png"> 
   </td>
 
<td>  <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Biodata2.png"> </td> 
  <td>  <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Biodata3.png"> </td> 
  <td> <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/FinalCV.png"> </td> 
 </table>
 
-----------------------------------------


  <table>
 <tr>
  <td>
  10.Photos
   <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_11.png"> 
   </td>
 
<td> 11.Post <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_12.png"> </td> 
  <td> -Comment <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_13.png"> </td> 
 </table>
 
-----------------------------------------

 
  <table>
 <tr> 
<td> *Edit <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_16.png"> </td> 
  <td>
  15. *Delete
   <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_14.png"> 
   </td>
 </table>
 
 
 
  <table>
 <tr> 
<td> 14.Admin-can delete any post  <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Screenshot_24.png"> </td> 
  <td>
 </table>
 
 <h2>Interface Diagram </h2>
 <h3>Login/SignUp Diagram</h3>
 <img src="https://github.com/Nikesh16/Social-Site-/blob/main/Pictures/Inactive%20Users.jpeg"> 
<h3> Registred Users/Admins</h3>
 





