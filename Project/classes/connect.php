<?php

class Database{
private $host = "localhost";
private $username="root";       // not needed public because only these function need these variables
private $password= "";
private $db="socialsite_db";
    
    
function connect(){
    $connection = mysqli_connect($this->host, $this->username,$this->password,$this->db);
    return $connection; 
    // to exit the function, we are using return. 
    //this is required becuase the variable are private and are outside of the function
}
function read($query){
$conn = $this->connect();   //  calling the function inorder to run $connection
  // capturing the connect() into $conn] 
  $result = mysqli_query($conn, $query);

  if(!$result){
    return false;
} else {
    $data= false;
    while($row = mysqli_fetch_assoc($result)){

        // each records come with an array
        // mysqli_fetch_array shows each array two times
        // assoc stands for associative array. 
        $data[] =$row;
    } 
    return $data;
    
}
}

function save($query){
    $conn = $this->connect();
    $result = mysqli_query($conn, $query);
 // query comes as an argument
    if(!$result){
        return false;
    } else {
        return true;
    }

}
}

// $query = "INSERT into users (first_name, last_name) values ($first_name , $last_name)";



// fetching record from database



