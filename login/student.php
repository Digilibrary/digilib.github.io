<?php
session_start();
require '../includes/snippet.php';
require '../includes/db-inc.php';

if(isset($_POST['submit'])){
  $id        = sanitize(trim($_POST['id']));
  $password = sanitize(trim($_POST['password']));

  $sql_admin = "SELECT * from admin where username = '$id' and  password = '$password' ";
  $query = mysqli_query($conn, $sql_admin);
  // echo mysqli_error($conn);
  if(mysqli_num_rows($query) > 0){

        while($row = mysqli_fetch_assoc($query)){
          $_SESSION['auth'] = true;
          $_SESSION['admin'] = $row['adminId'];
          }
          if ($_SESSION['auth'] === true) {
        header("Location: ../admin/dashboard.php");
        exit();
          }
  }

    else{
      $sql_stud = "SELECT * from tb_user where id_student ='$id' and password = '$password'";
        $query = mysqli_query($conn, $sql_stud);
        $row = mysqli_fetch_assoc($query);
        if($row['id_student'] == $id && $row['password'] == $password){
          $_SESSION['student-id'] = $row['id_student'];
          $_SESSION['student-name'] = $row['StudentName'];
          $_SESSION['student-email'] = $row['email'];
           header("Location:../Main page/dashboard.php");
          }
          else {
            echo"<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <strong style='text-align: center'> Login Failed.  Please check your details.</strong>
          </div>";
          }

      }


}

if(isset($_POST['cancel'])){
  header('location:../home.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>login form</title>
  </head>
  <body class="text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
    <div class="card mt-5">
      <div class="card-title pt-5 pb-4">
        <h3>Login System</h3>
      </div>
  <div class="card-body">
 <form class="" action="" method="post">
   <div class="form-group text-left">
      <label for="login">ID</label>
      <input name="id" type="text" value="" class="form-control" required="" />
     </div>
     <div class="form-group text-left">
      <label for="password">Password</label>
      <input name="password" type="password" value=""class="form-control" required="" />
     </div>
     <div class="form-group text-left">
     <input type="checkbox" name="remember"/>
     <label for="remember-me">remember me</label>
    </div>
  <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
  <h4 class="text-left">*If you don't have an account</h4>
  <div class="register text-left">
    <a href="../registerform/register.php">register</a>
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
