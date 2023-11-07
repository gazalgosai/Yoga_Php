<?php
session_start();
require("dbconnect.php");



if (isset($_POST["uname"]) && isset($_POST["pwd"])) {
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];

 
    $query = "SELECT * FROM usertbl WHERE uname = '{$uname}' and upwd ='{$pwd}'  ";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    $r = mysqli_fetch_array($result);

    if ($num == 1) { 
        $_SESSION["uname"] = $r["uname"];
        $_SESSION["uid"] = $r["uid"];
        $_SESSION["uemail"] = $r["uemail"];
        $_SESSION["uphone"] = $r["uphone"];
        $_SESSION["uage"] = $r["uage"];
        $_SESSION["upwd"] = $r["upwd"];
        
        if ($r["uname"] == $_POST["uname"] && $r["upwd"] == $_POST["pwd"]) {
            header("Location:http://localhost:8080/tybca/Yoga_Php/my_course.php");
        }
    } else {
        echo "</br>";
        echo "<div class='warning'><h4 style='background-color:red;'> &nbsp;&nbsp;&nbsp;Please Enter Right Value</h4></div>";
    }
}
?>

<!-- navigation -->
<html>
    <title>User Login</title>
<header>
    <style>*{
   
   margin: 0;
   padding: 0;
   box-sizing: border-box;
 }
 html{
   font-family: Arial, Helvetica, sans-serif;
 }
 .link{
   text-decoration: none;
   font-family: inherit;
   color: inherit;
 }
 .main-header{
  
 
   background-position: center;
   height: 100vh;
   width: 100%;
   position: relative;
 }

 .header-nav{
   color: black;
   display: flex;
   justify-content: space-between;
   align-items: center;
   padding: 10px 30px;
 }
 .nav-list{
   list-style-type: none;
   display: flex;
   
 }
 .logo{
   font-weight: bolder;
   /* color: #febc1d; */
   
   font-size: 35px;
 }
 .nav-link{
   font-size: 18px;
  
 
   letter-spacing: 2px;
   font-weight: bold;
 }
 .nav-link:hovor{
   color: #ccc;
 }
 .nav-item{
   margin-left: 50px;
 }
 .nav-linklink{
     color: white;
     
 }

header{
   
   box-shadow:  -2px -2px 16px 4px palevioletred;
}
</style>
        <div class="header-nav">
            <a href="#" class="logo link">YOGA</a>
            <nav class="main-nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="main.html" class="nav-link link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="classes.php" class="nav-link link">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.html" class="nav-link link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="my_course.php" class="nav-link link">My Course</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin_login_page.php" class="nav-link link">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-linkl ink">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
 </header>

 </html>

 <html>

<style>
    .warning{
            color: white;
            
            border: none;
            margin: 0;
            padding: 0;
        }
   html{
      font-family: Arial, Helvetica, sans-serif;
      background-color: palegreen;
   }
    center{
      padding: 20px;
            margin: 5%;
            margin-left: 100px;
            margin-right: 100px;
      background-color: white;
      
    }
    input{
      
           padding-left: 10px;
            width: 130%;
            border-radius: 10px;
            height: 4vh;
            
        }
        p{
          font-size: 20px;
            text-align: center;
            align-items: center;
            font-weight: bold;
            font-size: 20px;
        }
        input[type="submit"]{
           
            background: rgb(83 146 255);
        }
        input[type="submit"]:hover{
            background: rgb(161 196 255);
        }
        ::placeholder{
            align-items: center;
            text-align: center;
        }
        
</style>

<!-- login_form -->
<center>
<form action="" method="POST">
<table>
   <tr>
      <td>
      <img src="img/phone.png" alt="">
      </td>
   </tr>
   <tr>
      <p>User Login Page</p>
   </tr>
    <tr>
       
       <td> <input type="text" name="uname" id="uname" placeholder="username" require></td>
    </tr>
    <tr>
      
       <td><input type="text" name="pwd" id="pwd" placeholder="Password" require></td>
    </tr>
    <tr>
       
       <td> <input type="submit" value="login" name="login"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>If You Not Have Account </td>
      <td><a href="user_signup.php">Create Account</a></td>
    </tr>
</table>
</form>
   
</center>

</html>

<!-- compare data with usertbl -->

<!-- php
session_start();
require("dbconnect.php");
//  error_reporting(0);


if (isset($_POST["uname"]) && isset($_POST["pwd"])) {
 
 $uname = $_POST["uname"];
 $pwd = $_POST["pwd"];

 $query = "SELECT * FROM usertbl WHERE uname = '{$uname}' and upwd ='{$pwd}'  ";

 $result = mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
 $r = mysqli_fetch_array($result);
 echo $query;
//  print_r($r);
 if ($num == 1) {
    
  $_SESSION["uname"] = $r["uname"];

    if ($r["uname"] == $_POST["uname"] && $r["upwd"] == $_POST["pwd"] ) {
      
      echo "Login Successfully";
      header("Location:http://localhost:8080/tybca/Yoga_Php/main.html");
        
     }  
 } 
 
 else {
    echo "</br>";
    echo "<div class='warning'><h4> &nbsp;&nbsp;&nbsp;Please Enter Right Value</h4></div>";
 }
}

 -->

