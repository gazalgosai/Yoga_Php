
 <!-- create table and insert data in course table -->
<?php
session_start();
require("header.html");
require("dbconnect.php");


$uname = $_SESSION["aname"];

if (isset($_SESSION["aname"])) {
    echo "</br>";
    echo "<h3> &nbsp; &nbsp; &nbsp; Welcome The Page: ". $uname ."</h3>";
    echo "
    <form action='' method='post' >
    <table>
    <tr>
    <td><p>&nbsp; &nbsp; &nbsp;If You Want Logout Please Press Button Logout 👉</p></td>
    <td><input type='submit' value='logout' name='logout'></td>
     </tr>
    </table>
    </form>
    ";
}


$query = "CREATE TABLE [IF NOT EXISTS] coursetbl (cid int AUTO_INCREMENT , cname varchar(25) , cdesc varchar(200) , cprice varchar(10) , cimg  BLOB , PRIMARY KEY(cid)) ";



// echo $query;

// mysqli_query($conn,$query);

// $result= mysqli_query($conn,$query);

// echo "<br>";

// if ($result) {
//     echo "table created";
// } else {
//     echo "not create table";
// }

// $query = "insert into course tbl (cname,cdesc,cprice,cimg) values "

// if (isset($_POST["save"])) {
    if (isset($_POST["cname"]) && isset($_POST["cprice"]) && isset($_POST["cdesc"]) && isset($_POST["cimg"])) {
        $cname = $_POST["cname"];
        $cprice = $_POST["cprice"];
        $cdesc = $_POST["cdesc"];
        $cimg = $_POST["cimg"];
     
        $insert = "INSERT INTO coursetbl (cname,cdesc,cprice,cimg) values ('{$cname}' , '{$cdesc}' , '{$cprice}' , '{$cimg}' )";
     
        // echo $insert;
        $result=mysqli_query($conn,$insert);
        if ($result) {
            echo "<center>insert successfully</center>";
        } else {
            echo "not insert";
        }
        
     
     } else {
         echo "<center class='warning'><h4>Please Enter All Field Value</h4></center>";
     }
// }
// else{
//     echo "<center class='warning'><h4>Plese Enter All Field Value</h4></center>";
// }


?>

<!-- logout functionality -->
<?php


if (isset($_POST["logout"])) {
    session_destroy();

    header("Location:http://localhost:8080/tybca/Yoga_Php/admin_login_page.php");
} else {
    "Not Logout (Somrthing was wrong)";
}


?>

<!-- input form design -->
<html>
<title>Admin Page</title>
    <style>
        .warning{
            color: red;
            background-color: white;
            border: none;
            margin: 0;
            padding: 0;
        }
        center{
            background-color: violet;
            padding: 20px;
            margin: 10px;
            margin-left: 100px;
            margin-right: 100px;
            border: black solid;
        }
        h4{
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
        html{
            font-family: Arial, Helvetica, sans-serif;
        }
        tr,td{
            padding: 5px;
        }
        input[type="text"],input[type="number"]{
            height: 4vh;
            width: 33vh;
        }
        textarea{
            width: 33vh;
        }
        input[type="submit"]{
            background-color: rgb(85 198 32);
            height: 5vh;
            width: 20vh;
            border-radius: 5px;
            color: white;
        }
        input[type="submit"]:hover{
            background-color: rgb(141 235 97);
        }
        input[type="file"]{
           color: black;
           font-weight: bold;

        }
        .course{
            width: 50%;
            border: 1;
        
        }
        table{
            text-align: left;
        }
        p{
            font-weight: bold;
        }
        .course_table{
            width: 30vh;
            height: 10vh;
        }
        .tbl{
            background-color:papayawhip;
        }
    </style>
    <body>
        <form action="" method="post" onsubmit = "return validation()" name="f1" >
        <center>
            <h4>Course Data Insert Form</h4>
            <br><br>
            <table>
                <tr>
                    <td><p>Course Name:</p></td>
                    <td><input type="text" name="cname" id="cname" require></td>
                </tr>
                <tr>
                    <td><p>Course Description</p></td>
                    <td><textarea name="cdesc" id="cdesc" cols="30" rows="5" require></textarea></td>
                </tr>
                <tr>
                    <td><p>Course Price</p></td>
                    <td><input type="number" name="cprice" id="cprice" require></td>
                </tr>
                <tr>
                    <td><p>Course Image</p></td>
                    <td><input type="file" name="cimg" id="cimg" require></td>
                </tr>
                <tr>
                    <td>       </td>
                    <td><input type="submit" value="save"></td>
                </tr>
                <!-- <tr>
                    <td><p>If You Want Logout </br>Please Press Button </br>Logout 👉</p></td>
                    <td><input type="submit" value="logout" name="logout"></td>
                </tr> -->
            </table> 
        </center>
        </form>
        <script>  
            function validation()  
            {  
                var id=document.f1.cname.value;  
                var ps=document.f1.cdesc.value;  
                var pr=document.f1.cprice.value;
                var ci=document.f1.cimg.value;

                if(id.length=="" && ps.length=="" && pr.length==""  ) {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                    if (pr.length==""){
                        alert("Price field is empty");
                        return false;
                    }
                    if (ci.length=="") {
                        alert("cimg field is empty");
                        return false;
                    }
                }                             
            }  
        </script> 
        <br>
        <br>
        <center class="tbl">
        <table border='1'>
            <tr>
                <td style='background-color: lightgreen;width:120vh'>Courses Deatils</td>
                <!-- <td>User Courses</td> -->
        

    </body>
</html>

<!-- show the value of course data table -->
<?php
$select = "SELECT * FROM coursetbl";
$result = mysqli_query($conn,$select);


echo"<table border=''>";
echo " <tr>
<td class='course_table' style='background-color:lightpink'; width:2%>Course Name</td>
<td class='course_table' style='background-color:lightpink'; width:2%>Course Price</td>
<td class='course_table' style='background-color:lightpink'; width:2%>Course Description</td>
<td colspan='2' class='course_table' style='background-color:lightpink'; width:2%>Action</td>
</tr>";
while ($r=mysqli_fetch_array($result)) {
    $id = $r["cid"];

    echo"
    <tr>
    <td class='course_table' style='background-color: lightcyan;'>".$r["cname"]."</td>
    <td class='course_table' style='background-color: lightcyan;'>".$r["cprice"]."</td>
    <td class='course_table' style='background-color: lightcyan;'>".$r["cdesc"]."</td>
    <td><a class='course_table' style='background-color: lightcyan;' href='update.php?cid={$id}'>Update</a></td>
    <td> <a class='course_table' style='background-color: lightcyan;' href='delete.php?cid={$id}'>Delete</a></td>
  </tr>
    ";
   }

   echo "
   </tr>";

   echo "</table>";
echo "</center>";
?>

