
<?php
# Classes Page

require("dbconnect.php");
session_start();


?>

<!-- navigation -->
<html>
<title>Classes</title>
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
h3{
  border: dotted 1px ;
  padding: 2%;
  font-size: 30px;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
  color: red;
  background-color: yellow;
}
table{
  border-collapse:collapse ;
  /* border-bottom: 1px solid #ddd; */
}
tr{
  padding: 1%;
  text-align: center;
  height: 80px;
  border-bottom: solid 1px black;
    padding: 1%;

}

td{
  /* border: solid black 2px; */
  /* border-bottom: 1px solid black; */
  width: 380px;
}
.cname,.cdesc{
  background-color: pink;
}
.cprice{
  background-color: rgb(126 188 246);
}
.tcname,.tcprice,.tcdesc,.tbuy{
  font-size: 28px;
  text-align: center;
  font-weight: bold;
  border-collapse: collapse;
}
.buy{
  /* border-bottom: 1px; */
  background-color: rgb(204 236 255);
}
input[type="submit"]{
  width: 60%;
  height: 47;
  background-color: rgb(25, 144, 255);
  border-radius: 6px;
}
input[type="submit"]:hover{
  background-color: rgb(126 188 246);
}
input[type="text"]{
  width: 30%;
  height: 30;
  border-radius: 4px;
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
                        <a href="my_course.php" class="nav-link link">My Profile</a>
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
 <br>
 <center>
 <h3>Buy Your Faviorate Course and Get High Exprecence</h3>
 </center>
 <br>
<body>
    <center>

</br>
    <input type="text" id="live_search" placeholder="Search Course Name or Price" />                                  
</br>
  <?php
    echo "
    <table>
    <tr>
    <td class='tcname'>Corse Name</td>
    <td class='tcprice'>Price</td>
    <td class='tcdesc'>Description</td>
    <td class='tbuy'>Buy</td>
    </tr>
    ";
 echo "</table>";
?>
<div id="SearchResult"></div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        $("#live_search").keyup(function(){

            var input = $(this).val();
        //    alert(input);

            if(input != "")
            {
                $.ajax({
                    url:"Live_search.php",
                    method:"POST",
                    data:{input:input},

                    success:function(data){
                        $("#SearchResult").html(data);
                        /*The html() method sets or returns the content (innerHTML) of the selected elements.*/
                    }
                });
            }
            else{
                $("#SearchResult").html("");
                //alert("empty");
            }
        });
    });
</script>
</center>
</body>
 </html>

 <?php
   require("dbconnect.php");

   $select = "SELECT * FROM coursetbl";
   $result = mysqli_query($conn,$select);

   
  //  echo"<table >";

//    echo "
//    <tr>
//    <td class='tcname'>Corse Name</td>
//    <td class='tcprice'>Price</td>
//    <td class='tcdesc'>Description</td>
//    <td class='tbuy'>Buy</td>
//  </tr>
//    ";
//    echo "</table>";

   echo '<form action="user_login.php" method="post">';
   echo"<table>";
   while ($r=mysqli_fetch_array($result)) {
    $id = $r["cid"];

    echo"
    <tr>
    <td class='cname'>".$r["cname"]."</td>
    <td class='cprice'>".$r["cprice"]."</td>
    <td class='cdesc'>".$r["cdesc"]."</td>
    <td class='buy'><input type='submit' value='Buy' name='Buy'></td>
  </tr>
    ";
    
      // if (isset($_POST["Buy"])) {      
      //   header("Location:http://localhost:8080/tybca/Yoga_Php/user_login.php");
      // }
   }

   echo "</table>";

  

?>

<html>
  <style>
    .copyright{
  text-align: center;
  color: white;
  background: #2a2a2a;
  padding: 10px;
}

.svg{
  align-items: center;
  height: 100px;
  width: 100px;
}
  </style>
<div class="copyright">
            <div class="copy-text">
                Copyright &copy; 2020 Non Degree Programmer All Rights Reversed
            </div>
            <br>
            <div class="logos">
                <img src="img/IMG_20220101_114504.png" alt="facebook" srcset="">
                <img src="img/instagram-new.png" alt="instagram-new" srcset="">
                <img src="img/twitter.png" alt="twitter" srcset="">
                <img src="img/linkedin.png" alt="linkedin">
                <br>
             <img src="img/app-store-google-4d63c31a3e.svg" alt="" srcset="" class="svg">
             <img src="img/app-store-apple-f1f919205b.svg" alt="" srcset="" class="svg">
            </div>
        </div>   
</html>






