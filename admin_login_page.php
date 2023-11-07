<!-- navigation -->
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
   color: white;
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
   
   box-shadow:  -2px -2px 16px 4px white;
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

 <!-- admin login functionality -->
<?php

  session_start();
  require("dbconnect.php");
   error_reporting(0);


  if (isset($_POST["aname"]) && isset($_POST["pwd"])) {
   // echo "redy";

   $uname = $_POST["aname"];
   $pwd = $_POST["pwd"];

   $query = "SELECT * FROM admintbl WHERE arole= '{$uname}' and apwd='{$pwd}'  ";
 
   $result = mysqli_query($conn,$query);
   $num = mysqli_num_rows($result);
   $r = mysqli_fetch_array($result);
   // echo $query;
   // print_r($r);
   if ($num==1) {
      $_SESSION["aname"] = $r["aname"];
      $_SESSION["role"] = $r["arole"];

      if ($r["arole"] == "admin") {
         header("Location:http://localhost:8080/tybca/Yoga_Php/admin.php");
      }
   }
    else {
      echo "</br>";
      echo "<div class='warning'><h4> &nbsp;&nbsp;&nbsp;Please Enter Right Value</h4></div>";
   }
   
} 
elseif ($_SESSION["aname"]) {
  header("Location:http://localhost:8080/tybca/Yoga_Php/admin.php");
}

else {
   echo "</br>";
   echo "<div class='warning'><h4>&nbsp;&nbsp;&nbsp;User Dosn't Exit or Fill Data</h4><div>";
  }
  
?>

<html>

<title>Admin Login Page</title>
<style>
    .warning{
            color: white;
            
            border: none;
            margin: 0;
            padding: 0;
        }
   html{
      font-family: Arial, Helvetica, sans-serif;
      background-color: blueviolet;
   }
    center{
      padding: 20px;
            margin: 10px;
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
          color: black;
          font-size: 20px;
            text-align: center;
            align-items: center;
            font-weight: bold;
            font-size: 20px;
        }
        input[type="submit"]{
           
            background: rgb(112, 230, 112);
        }
        input[type="submit"]:hover{
            background: rgb(152, 182, 152);
        }
        ::placeholder{
            align-items: center;
            text-align: center;
        }
</style>
<form action="" method="post">
<center>
<table>
   <tr>
      <td>
      <img src="img/phone.png" alt="">
      </td>
   </tr>
   <tr>
      <p>Admin Login Page</p>
   </tr>
    <tr>
       
       <td> <input type="text" name="aname" id="uname" placeholder="username"></td>
    </tr>
    <tr>
      
       <td><input type="text" name="pwd" id="pwd" placeholder="Password"></td>
    </tr>
    <tr>
       
       <td> <input type="submit" value="login" name="login"></td>
    </tr>
</table>
  
   
</center>

</form>
</html>