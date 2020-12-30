<?php
require '../includes/db-inc.php';

session_start();
    //$book = $_SESSION['book_Title'];
    $name = $_SESSION['student-name'];
    $number = $_SESSION['student-id'];

if (isset($_POST['submit'])) {
    $bn = trim($_POST['bookTitle']);
    $bdate = trim($_POST['borrowDate']);
    $due = trim($_POST['dueDate']);
    $sql_book = "SELECT BooksId FROM books where BooksTitle = '$bn'";

    $q = mysqli_query($conn, $sql_book);
    while ($row = mysqli_fetch_assoc($q)) {
        $book = $row['BooksId'];
    }

    $sql_book = "SELECT adminId FROM admin";

    $qa = mysqli_query($conn, $sql_book);
    while ($row = mysqli_fetch_assoc($qa)) {
        $a = $row['adminId'];
    }


    $sql = "INSERT INTO borrow( BooksId,adminId ,StudentName,id_student , bookName, borrowDate, returnDate) values('$book','$a' ,'$name','$number', '$bn', '$bdate', '$due')";
    $query = mysqli_query($conn, $sql);
    $error = false;
    if ($query) {
        $error = true;
    } else {
        echo "
		<script>
		alert('Unsuccessful');
		</script>
	";
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

	<div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 30px">
		<div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
			 <?php if (isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Added Successfully!</strong>
            </div>
            <?php } ?>
			<p class="page-header" style="text-align: center">LEND BOOK</p>

			<div class="container">
				<form class="form-horizontal" role="form" action="lend-student.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Book Title" class="col-sm-2 control-label">BOOK TITLE</label>
						<div class="col-sm-10">
							<select class="form-control" name="bookTitle">
								<option>SELECT BOOK</option>
								<?php
                                $sql = "SELECT BooksTitle FROM books";
                                $query = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($query)) {
                                    ; ?>
                                <option><?php echo $row['BooksTitle']; ?></option>
                                <?php
                                } ?>
								 ?>

							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="Book Title" class="col-sm-2 control-label">Student Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="member" id="bookTitle" value="<?php echo $name; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="Member Card ID" class="col-sm-2 control-label">Student ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="matric" value="<?php echo $number; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="Borrow Date" class="col-sm-2 control-label">BORROW DATE</label>
						<div class="col-sm-10">
             			 <input type="date" class="form-control" name="borrowDate" id="brand">
						</div>
					</div>
					<div class="form-group">
						<label for="Password" class="col-sm-2 control-label">RETURN DATE</label>
						<div class="col-sm-10" id="show_product">
              			<input type='date' class='form-control' name='dueDate'>
						</div>
					</div>



					<div class="form-group ">
						<div class="col-sm-offset-2 col-sm-10 ">
							<button type="submit" class="btn btn-info col-lg-4 " name="submit">
								Submit
							</button>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

 <script>
 $(document).ready(function(){
      $('#brand').change(function(){
           var brand_id = $(this).val();
           $.ajax({
                url:"load_data.php",
                method:"POST",
                data:{brand_id:brand_id},
                success:function(data){
                     $('#show_product').html(data);
                }
           });
      });
 });
 </script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
 <script src="assets/js/main.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
