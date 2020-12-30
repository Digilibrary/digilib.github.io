<?php

require '../includes/snippet.php';
require '../includes/db-inc.php';

error_reporting(0);
session_start();
$student = $_SESSION['student-name'];

    if (isset($_POST['check'])) {
        $id = $_POST['id'];

        $sql = "SELECT returnDate from borrow where borrowId = '$id'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);

        $now = date('j/m/Y');
        "<br>";
        $prev =  $row['returnDate'];
        "<br>";
        $diff = $now - $prev;
        "<br>";

        if ($diff > 0) {
            // echo "greater";
            $fine = 1000 * $diff;
            $add = "UPDATE `borrow` SET `fine`= '$fine' WHERE borrowId = '$id'";
            $query = mysqli_query($conn, $add);
        } elseif ($now <= $prev) {
            // echo "lesser";
            $add = "UPDATE `borrow` SET `fine`= '0' WHERE borrowId = '$id'";
            $query = mysqli_query($conn, $add);
        }
    }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Main page</title>
  </head>
  <body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class="fas fa-book-reader" style="font-size: 24; color:#59ffa0"></i>
                    <span class="nav__logo-name">DIGILIB</span>
                </a>

                <div class="nav__list">
                    <a href="../Main page/index.php" class="nav__link active">
                    <i class='bx bx-grid-alt nav__icon' ></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="../profile/profile.php" class="nav__link">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__name">Profile</span>
                    </a>

                    <a href="../book/book2.php" class="nav__link">
                        <i class="fas fa-book"></i>
                        <span class="nav__name">Books</span>
                    </a>

                    <a href="../book/return.php" class="nav__link">
                        <i class='bx bx-bookmark nav__icon' ></i>
                        <span class="nav__name">Return Book</span>
                    </a>
                </div>
            </div>
            <a href="../Main page/logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon' ></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
<div class="container">
	<!-- navbar ends -->
	<!-- info alert -->
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">

		<span class="glyphicon glyphicon-book"></span>
	    <strong>Return</strong> Table
	</div>

	</div>
	<div class="container">
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	 <?php if (isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Deleted Successfully!</strong>
            </div>
            <?php } ?>
		  </div>
		  <table class="table table-bordered">
		          <thead>
		               <tr>
		                  <th>ID Borrow</th>
		                  <th>Books ID</th>
		                  <th>Student Name</th>
		                  <th>Student ID</th>
		                  <th>Book Title</th>
		                  <th>Borrow date</th>
		                  <th>Return Date</th>
		                  <th>Fines</th>
		                </tr>
		          </thead>

		           <?php
                          $sql = "SELECT * FROM borrow where StudentName = '$student'";
                          $query = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_assoc($query)) {
                              ?>

		          <tbody>
		            <tr>
		             <td><?php echo $row['borrowId']; ?></td>
		             <td><?php echo $row['BooksId'] ?></td>
		             <td><?php echo $row['StudentName']; ?></td>
		             <td><?php echo $row['id_student']; ?></td>
		             <td><?php echo $row['bookName']; ?></td>
		             <td><?php echo $row['borrowDate']; ?></td>
		             <td><?php echo $row['returnDate']; ?></td>
		    	       <td>
		             	<?php echo $row['fine']; ?><form action="return.php" method="post">
		             		<input type="hidden" name="id" value="<?php echo $row['borrowId']; ?>">
		             <button name="check" type="submit" class="btn btn-warning">CHECK</button>
		             </form>
		             </td>
		            </tr>
		            <?php
                          } ?>
		         </tbody>
		   </table>

	  </div>
	</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
 <script src="assets/js/main.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
