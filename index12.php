<?php

require("dbconnect.php");



?>
<html>
<body>
    <center>
    <h2>jQuery Live Search</h2>
</br>
    <input type="text" id="live_search" placeholder="Search....." />                                  
        
  
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
            // else{
            //     $("#SearchResult").html("");
            //     //alert("empty");
            // }
        });
    });
</script>
</center>
</body>
</html>


