<?php
require '../includes/snippet.php';
require '../includes/db-inc.php';


if(isset($_POST['del'])){
	$id = trim($_POST['del-btn']);
	$msg = "Paid";
	$sql = "UPDATE borrow set `fine` = '$msg' where borrowId = '$id'";
	$query = mysqli_query($conn, $sql);
	$error = false;
	if($query){
		$error = true;
	}

	
}
if(isset($_POST['delete'])){
    $id = sanitize(trim($_POST['borrowId']));

    $sql_del = "DELETE from borrow where borrowId = $id"; 
    $error = false;
    $result = mysqli_query($conn,$sql_del);
            if ($result)
            {
            $error = true;
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
                    <a href="dashboard.php" class="nav__link active">
                    <i class='bx bx-grid-alt nav__icon' ></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="users.php" class="nav__link">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__name">Admins</span>
                    </a>

                    <a href="bookstable.php" class="nav__link">
                        <i class="fas fa-book"></i>
                        <span class="nav__name">Books</span>
                    </a>

                    <a href="viewstudents.php" class="nav__link">
                        <i class='bx bx-bookmark nav__icon' ></i>
                        <span class="nav__name">Students</span> 
                    </a>

                    <a href="borrowedbooks.php" class="nav__link">
                        <i class='fas fa-swatchbook' ></i>
                        <span class="nav__name">Borrowed Books</span> 
                    </a>
                    <a href="fines.php" class="nav__link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
  <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
</svg>
                        <span class="nav__name">Fines</span> 
                    </a>
                </div>
            </div>
            <a href="../Main page/logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon' ></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <h3>Fines</h3>
	<div class="container">
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	 <?php if(isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button class="delete-record" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Updated Successfully!</strong>
            </div>
            <?php } ?>

		  </div>
		  <table class="content-table-fines">
		          <thead>
		               <tr> 
		                  <th>Borrow ID</th>
		                  <th>Member Name</th>
		                  <th>Student ID</th>
		                  <th>Book Name</th>
		                  <th>Borrow date</th>
		                  <th>Return Date</th>
		                  <th>Fines</th>
                          <th>ACTION</th>
                          <th></th>
		                </tr>    
		          </thead>  
                  
		           <?php 
                  		$sql = "SELECT * FROM borrow";
                  		$query = mysqli_query($conn, $sql);
                  		while($row = mysqli_fetch_assoc($query)) { 
                   ?>

		          <tbody> 
		            <tr> 
		             <td><?php echo $row['borrowId']; ?></td>
		             <td><?php echo $row['StudentName']; ?></td>
		             <td><?php echo $row['id_student']; ?></td>
		             <td><?php echo $row['bookName']; ?></td>
		             <td><?php echo $row['borrowDate']; ?></td>
		             <td><?php echo $row['returnDate']; ?></td>
		             <td><?php echo $row['fine']; ?></td>
		             <td><form action="fines.php" method="post"> 
                     		<input type="hidden" value="<?php echo $row['borrowId']; ?>" name="del-btn">
                      <button class="stop-count" class="btn btn-warning" name="del">STOP COUNT</button>
                     	</form>
		             </td>
                     <form method='post' action='fines.php'>
                        <input type='hidden' value="<?php echo $row['borrowId']; ?>" name='borrowId'>
                        <td><button class="delete-button-fines" name='delete' type='submit' value='Delete' class='btn btn-warning' onclick='return Delete()'>DELETE</button></td>
                        </form>
		            </tr> 
		            <?php } ?> 
		         </tbody> 
		   </table>
		 
	  </div>
	</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
   <script src="main.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>