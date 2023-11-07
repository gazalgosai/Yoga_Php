<?php
#delete course details

require("dbconnect.php");

if (isset($_GET["cid"])) {
   
    $id = $_GET["cid"];

    $delete = "DELETE FROM coursetbl WHERE cid={$id}";

    echo $delete;
    mysqli_query($conn,$delete);

    header("Location:http://localhost:8080/tybca/Yoga_Php/admin.php");
}
?>