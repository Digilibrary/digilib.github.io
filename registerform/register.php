<?php
session_start();
require '../includes/snippet.php';
require '../includes/db-inc.php';

if(isset($_POST['submit'])){

    $nama = sanitize(trim($_POST['nama']));
   // $id_student = sanitize(trim($_POST['id_student']));
    $password = sanitize(trim($_POST['password']));
    $password2 = sanitize(trim($_POST['password2']));
    $email = sanitize(trim($_POST['email']));


    // menyiapkan query
     if ($password == $password2) {
    $sql = "INSERT INTO tb_user (password, nama, email)
 VALUES ('$password','$nama','$email') ";

      $query = mysqli_query($conn, $sql);
      $error = false;
      if($query){
       $error = true;
       header("Location: ../login/student.php");
      }
      else{
        echo "<script>alert('Not Registered successful!! Try again.');
                    </script>"; 
      }
    } else {
    echo  "<script>alert('Password mismatched!')</script>";
   }
   
          
  }
  if(isset($_POST['cancel'])){
    header('Location:../home.php');
  }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>register form</title>
  </head>
  <body class="text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
    <div class="card mt-5">
      <div class="card-title pt-5 pb-4">
        <h3>Register</h3>
        <h3>Form</h3>
      </div>
  <div class="card-body">
 <form class="form text-left" action="" method="post">
   <div class="form-group text-left">
      <label for="name">Full Name</label>
      <input name="nama" type="text" value="" class="form-control"/>
     </div>
     <div class="form-group text-left">
        <label for="Email">E-Mail</label>
        <input name="email" type="email" value="" class="form-control"/>
       </div>
     <div class="form-group text-left">
      <label for="password">Password</label>
      <input name="password" type="password" value=""class="form-control" />
     </div>
     <div class="form-group text-left">
      <label for="password">Confirm Password</label>
      <input name="password2" type="password" value=""class="form-control" />
     </div>
      <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
  <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
  </div>
</form>
</div>
</div>
</div>
  </div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
