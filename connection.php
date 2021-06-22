<?php

$username="root";
$password="";
$server="localhost";
$db="students_register";


$con=mysqli_connect($server,$username,$password,$db);

if($con){
    ?>
    <script>

    alert( "Connection Successfull");
    </script>
    <?php
}
else{
    ?>
    <script>

    alert("No Connection");

    </script>
    <?php
}





?>