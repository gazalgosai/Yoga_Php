<!-- create table and insert data in user table -->
<?php

#signup create user

require("dbconnect.php");

// $query = "CREATE TABLE usertbl (uid int AUTO_INCREMENT , uname varchar(25) , uemail varchar(200) , uphone varchar(10) , uage varchar(2) , upwd varchar(4) , PRIMARY KEY(uid)) ";

// echo $query;

// mysqli_query($conn,$query);

// $result= mysqli_query($conn,$query);

// echo "<br>";

// if ($result) {
//     echo "table created";
// } else {
//     echo "not create table";
// }

if (isset($_POST["uname"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["age"]) && isset($_POST["pwd"])) {
  
  $uname = $_POST["uname"];
  $uemail = $_POST["email"];
  $uphone = $_POST["phone"] ;
  $uage = $_POST["age"];
  $upwd = $_POST["pwd"] ;

  //preg match only string name are allowed
  $name = $_POST["uname"];

  if (!preg_match('/^[a-zA-Z]*$/',$name)) {

    $ErrMsg = "<center class='warning'><h4 style='background-color:red;'>Only Aplphabets and Whitespaces are allowed</h4></center>";
    echo $ErrMsg;

  }
  
  else {

    echo $name;
    $insert = "INSERT INTO usertbl (uname , uemail , uphone , uage , upwd ) values ('{$uname}' , '{$uemail}' , '{$uphone}' , '{$uage}' , '{$upwd}' )";
     
  echo $insert;
  $result=mysqli_query($conn,$insert);
              if ($result) {
                         header("Location:http://localhost:8080/tybca/Yoga_Php/user_login.php");
                         echo "<center>insert successfully</center>";
              } else {
                         echo "not insert";
              }
  }
  
  

} else {
  echo "<center class='warning'><h4 style='background-color:red;'>Plese Enter All Field Value</h4></center>";
}


?>

<!-- navigation -->
<html>
    <title>User Create Account</title>
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

<!-- sign up form -->
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
            align-items:center;
            text-align: left;
        }
        
</style>

<center>
<form action="" method="post">
<table>
   <tr>
      <td>
      <img src="img/phone.png" alt="">
      </td>
   </tr>
   <tr>
      <p>User SignUp Page</p>
   </tr>
    <tr>
       
       <td> <input type="text" name="uname" id="uname" placeholder="Username" require></td>
    </tr>
    <tr>
        <td><input type="email" name="email" id="email" placeholder="Email" required></td>
    </tr>
    <tr>
        <td><input type="number" name="phone" id="phone" placeholder="Phone-Number" require></td>
    </tr>
    <tr>
        <td><input type="number" name="age" id="age" placeholder="Age" require></td>
    </tr>
    <tr>
       <td><input type="text" name="pwd" id="pwd" placeholder="Password" require></td>
    </tr>
    <tr>
       
       <td> <input type="submit" value="signup" name="signup" require></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>If You Have Account </td>
      <td><a href="user_login.php">Login</a></td>
    </tr>
</table>
</form>
   
</center>

</html>


