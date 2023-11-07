<?php
   #update course details

   require("dbconnect.php");

   $cid = "";
   $cname = "";
   $cdesc = "";
   $cprice = "";
   $cimg = "";
   
    if (isset($_GET["cid"])) {
       
     
        $id = $_GET["cid"];
        $query = "SELECT * FROM coursetbl WHERE cid={$id}";

        $result  = mysqli_query($conn,$query);
        $r = mysqli_fetch_array($result);
       
        $cid = $r["cid"];
        $cname = $r["cname"];
        $cprice = $r["cprice"];
        $cdesc = $r["cdesc"];
        $cimg = $r["cimg"];
    }
?>

<html>
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
        input,textarea{
            color: black;
        }
    </style>
    <body>
        <form action="" method="post">
        <center>
            <h4>Course Data Insert Form</h4>
            <table>
                <tr>
                    <td><p>Course Name:</p></td>
                    <td><input type="text" name="cname" id="cname" value=<?php if (isset($cname)) {
                        echo $cname;
                    }?>></td>
                </tr>
                <tr>
                    <td><p>Course Description</p></td>
                    <td><textarea name="cdesc" id="cdesc" cols="30" rows="5" value=<?php if (isset($cdesc)) {
                        echo $cdesc;
                    }?>><?php if (isset($cdesc)) {
                        echo $cdesc;
                    }?> </textarea></td>
                </tr>
                <tr>
                    <td><p>Course Price</p></td>
                    <td><input type="number" name="cprice" id="cprice" value=<?php if (isset($cprice)) {
                        echo $cprice;
                    }?>></td>
                </tr>
                <tr>
                    <td><p>Course Image</p></td>
                    <td><input type="file" name="cimg" id="cimg" value=<?php if (isset($cprice  )) {
                        echo $cprice;
                    }?>></td>
                </tr>
                <tr>
                    <td>       </td>
                    <td><input type="submit" value="update" name="update"></td>
                </tr>
            </table>

    </body>
</html>


<?php
  
 if (isset($_POST["update"])) {
    $id = $_GET["cid"];
  echo "in";
    $cname = $_POST["cname"];
    $cprice = $_POST["cprice"];
    $cdesc = $_POST["cdesc"];
    $cimg = $_POST["cimg"];

    $update = "UPDATE coursetbl set cname='{$cname}' , cdesc='{$cdesc}' , cprice='{$cprice}' , cimg='{$cimg}'  WHERE cid={$id}";

    echo $update;
    mysqli_query($conn,$update);

    header("Location:http://localhost:8080/tybca/Yoga_Php/admin.php");
 }
?>