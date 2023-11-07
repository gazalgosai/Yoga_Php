<?php

require("dbconnect.php");

    if(isset($_POST['input']))
    {
        $input=$_POST['input'];
        $query = "SELECT * FROM coursetbl WHERE cname LIKE '%{$input}%' OR 
        cdesc LIKE '%{$input}%' OR cprice LIKE '%{$input}%'";
        
        // echo $query;
        
    //     $result=mysqli_query($conn,$query);

    //     echo "<table border='1'> 
    //             <th>Course Name</th>
    //             <th>Course Discripton</th>
    //             <th>Course Price</th>
    //             ";

    //     while(
    //         $r=mysqli_fetch_array($result))
            
    //     {
    //         echo "<tr><td>".$r["cname"]."</td><td>".$r["cdesc"]."</td><td>".$r["cprice"]."</td> </tr>";
    //     }
        
    //     echo "</table>";
    // }
    $result = mysqli_query($conn,$query);

   
//    echo"<table >";

//    echo "
//    <tr>
//    <td class='tcname'>Corse Name</td>
//    <td class='tcprice'>Price</td>
//    <td class='tcdesc'>Description</td>
//    <td class='tbuy'>Buy</td>
//  </tr>
//    ";
//    echo "</table>";

   echo '<form action="" method="post">';
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
    
    if (isset($_POST["Buy"])) {      
      header("Location:http://localhost:8080/tybca/Yoga_Php/user_login.php");
    }
   }

   echo "</table>";
}
else{
    $select = "SELECT * FROM coursetbl";
    $result = mysqli_query($conn,$select);
 
    
    echo"<table >";
 
    echo "
    <tr>
    <td class='tcname'>Corse Name</td>
    <td class='tcprice'>Price</td>
    <td class='tcdesc'>Description</td>
    <td class='tbuy'>Buy</td>
  </tr>
    ";
    echo "</table>";
 
    echo '<form action="" method="post">';
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
     
     if (isset($_POST["Buy"])) {      
       header("Location:http://localhost:8080/tybca/Yoga_Php/user_login.php");
     }
    }
 
    echo "</table>";
}
?>
