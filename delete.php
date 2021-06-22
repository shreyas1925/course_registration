<?php

include "connection.php";

$id=$_GET['id'];

$deletequery="delete from students_data where id=$id ";

$query=mysqli_query($con,$deletequery);

if($query){
    ?>
    <script>
    alert("Deleted Successfully");
    </script>
<?php
}else{
    ?>
     <script>
    alert(" Not Deleted");
    </script>
    <?php
}
header("location:display.php");




?>