<!DOCTYPE html>
<html>
  <head>
    <title>Students Registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap  animate__animated  animate__pulse animate__infinite "></i>
        <h1 class="animate__animated  animate__pulse animate__infinite">Register to our courses</h1>
        <!-- <p>W3docs provides free learning materials for programming languages like HTML, CSS, Java Script, PHP etc.</p> -->
        <div class="btn-group">
        <a type="button"  class="btn btn-info mt-1" href="display.php" >Check your Info</a>
          
        </div>
      </div>
      <form  method="post">
     
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
        <?php

                      include 'connection.php' ;

                      $ids=$_GET['id'];

                      $showquery="select * from students_data where id={$ids}";

                      $showdata=mysqli_query($con,$showquery);

                      $arraydata=mysqli_fetch_array($showdata);


                      if(isset($_POST['submit']))
                      
                      {


                      $idupdate=$_GET['id'];
                      $name=$_POST["name"];
                      $email=$_POST["email"];
                      $phone=$_POST["phone"];
                      $password=$_POST["password"];
                      $degree=$_POST["degree"];

                        


                     

                      $update_query="update students_data set id=$idupdate , name='$name' ,  email='$email', phone='$phone', password='$password', degree='$degree' where id=$idupdate " ;

                      $res=mysqli_query($con,$update_query);

                      if($res)
                      {
                        ?>
                        <script>
                        alert( "Data Updated successfully");
                        </script>
                        
                        <?php
                    }

                    else{


                        ?>
                        
                      <script>
                      alert( "Data not Updated");
                      </script>
                      <?php
                    }


                    }


                    ?>
            <input class="fname" type="text" name="name" required placeholder="Full name"  autocomplete="off" value="<?php echo $arraydata['name']?>">
            <input type="text" name="email" required placeholder="Email"  autocomplete="off" value="<?php echo $arraydata['email']?>">
            <input type="text" name="phone" required placeholder="Phone number"   autocomplete="off" value="<?php echo $arraydata['phone']?>">
            <input type="password" name="password" required placeholder="Password"   autocomplete="off" value="<?php echo $arraydata['password']?>">
            <select name="degree"  autocomplete="off" value="<?php echo $arraydata['degree']?>">
            <option value="course-type" selected>Course type</option>
            <option value="short-courses">Computer Science</option>
            <option value="featured-courses">Information Science</option>
            <option value="undergraduate">Mettalurgy</option>
            <option value="diploma">Data Science</option>
            <option value="certificate">Ruby on Rails</option>
            <option value="masters-degree">App Development</option>
            <option value="postgraduate">Android Development</option>
            <option value="postgraduate">Full Stack Web Developer</option>
          </select>
        </div>
        <!-- <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Poalicy for W3Docs.</a></span>
        </div> -->
        <button type="submit" name="submit" class="btn btn-info p-2" >Update</button>
      </form>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>





