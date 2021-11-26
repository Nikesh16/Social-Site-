

<html>
    

<head>
<title>

</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- header area -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<!-- content area -->

<div>

<form name="dataPersonal" action="biodata1.php" method="POST">
    

<table>
<th> </th>
<tr>
Biodata Information
<td> Name: </td>
<td><input type ="text" name ="txtName" required></td>

</tr>
<tr>
<td>Father name: </td>
<td><input type ="text" name ="txtFName" required></td>
</td>
</tr>
<tr>
<td>Gender: </td>
<td><input type ="radio" name ="rdogender" value="Male" required> Male
<input type ="radio" name ="rdogender" value="Female" required> Female 
</td>
</tr>
<tr>
<td> Religion: </td>
<td><input type ="text" name ="txtReligion" required></td>
</tr>
</tr>
<tr>
<td><input type="submit" name ="submit">
</tr>
</td>
</tr>
</table>   


<!-- They will not be visible to the users -->
<!--  this is the tricky way to provide info to another file by hiding it from database -->
<!-- Trick to hide the database .. all these things will be hidden now -->

</form>
</div>



</body>
</html>