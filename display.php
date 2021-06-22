<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<style>
</style>
<body>
<section class="container-fluid">
  <form action="" method="post">
    <input type="text" class="mt-5 ml-2" name="emails" autocomplete="off">
    <br><br>
    <button class="btn btn-outline-info ml-2 mb-4" name="submit" type="submit">Submit</button>


    <table class="table table-hover w-50 ml-2 table-bordered ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Degree</th>
      <th class="tbl ">Update</th>
      <th class="tbl">Delete</th>
    </tr>
  </thead>
  <tbody>

 <?php

include "connection.php";


if(isset($_POST['submit'])){

$emails=$_POST['emails'];

$select_query="select * from students_data where email='$emails' ";

$query=mysqli_query($con,$select_query);

$nums=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){

  ?> 

  
    <tr>
    <td class="tb2 text-align-self-start"><?php echo $res['id']?> </td>
      <td class="tb2 text-align-self-start"><?php echo $res['name']?> </td>
     
      <td class="tb2 text-align-self-start"><?php echo $res['phone']?></td>
      <td class="tb2 text-align-self-start"><?php echo $res['password']?></td>
      <td class="tb2 text-align-self-start"><?php echo $res['degree']?></td>
      <td class="tb2 pl-5"><a href="update.php?id=<?php echo $res['id']?>" data-toggle="tooltip" data-placement="right" title="Update"><i class="fa fa-pencil-square-o  faug"></i></a>
      </td>
      <td class="tb2 pl-5"><a href="delete.php?id=<?php echo $res['id']?>" data-toggle="tooltip" data-placement="right" title="Update"> <i class="fa fa-trash-o faur" ></i></i></a>
      </td>
     
    </tr>
    
  </tbody>
</table>
</div>
<?php

}
}
?> 
    
  </tbody>
</table>
  </form>
</section>


<script>
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
