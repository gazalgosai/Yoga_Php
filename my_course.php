
<?php
#User Profile Page

require("header.html");
error_reporting(0);
session_start();

$uname = $_SESSION["uname"];
$uid = $_SESSION["uid"];
$uemail= $_SESSION["uemail"];
$uphone= $_SESSION["uphone"];
$uage=$_SESSION["uage"];
$upwd=$_SESSION["upwd"];

if (isset($_SESSION["uname"])) {
    echo "</br>";
    echo "<center><h3> &nbsp; &nbsp; &nbsp; Welcome To The Profile Page   :   ". $uname ."</h3></center>
    </br>
    </br>
    </br>
    ";
    
    echo '
    <html>
    <style>
      h3{
        font-size:30px;
      }
      img{
        width: 350;
        border-radius: 28px;
        border-color: black;
      }
      p{
        font-size:18px;
      }
     
    </style>
  <center>
    <div class="profile">
    <center>
    <img src="img\istockphoto-1425483418-170667a.webp" alt="">
    <form action="" method="post">
    <table style=" margin: 10px;">
      
      <tr><td>==============</td><td>==============</td></tr>
      <tr><td>Name: </td>
      <td> <p>'. $uname .'</p> </td></tr>
      <tr>
      <tr><td>==============</td><td>==============</td></tr>
      <td>Email: </td>
     <td><p>'. $uemail .'</p> </td></tr>
     <tr>
     <tr><td>==============</td><td>==============</td></tr>
     <td>Phone: </td>
     <td><p>'. $uphone .'</p> </td></tr>
     <tr><td>==============</td><td>==============</td></tr>
     <tr><td>Age: </td>
     <td><p>'. $uage .'</p> </td></tr>
    </div>
  </center>
  </html>
    ';


    echo '<tr><td>==============</td><td>==============</td></tr>
    <tr>
      <td><p>If You Want Logout<br> Please Press Button <br>Logout 👉</p></td>
      <td><input  style="width: 100px;
      height: 30px;
      border-radius: 5px;
      background-color: lightskyblue; " type="submit" value="logout" name="logout"></td>
  </tr>
    </table>
    </form></center>';
}
else{
  echo "
   
   <center>
   <br>
   <a style=' font-size: 20px;
   background-color: yellow;
   font-weight: bold;
   color: red;' href='user_login.php' >Please Login Here</a>
   </center>
  ";
}
?>


<!-- logout functionality -->
<?php


if (isset($_POST["logout"])) {
  
    session_destroy();

  
    header("Location:http://localhost:8080/tybca/Yoga_Php/main.html");
} else {
    "Not Logout (Somrthing was wrong)";
}


?>

