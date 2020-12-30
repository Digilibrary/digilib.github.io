<?php
require '../includes/snippet.php';
require '../includes/db-inc.php';

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
                        <i class='fas fa-swatchbook'></i>
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
        <h3>Borrowed Books</h3>

		  <table class="content-table">
		  <thead>
					<tr> 
					<th>Borrow ID</th>
					<th>Student ID</th>
					<th>Book Name</th>
					 <th>Student Name</th>
					<th>Action</th>
				  </tr>    
					</thead>
					 <?php

					$sql = "SELECT * FROM borrow"; 	
					
					$query = mysqli_query($conn, $sql);
					$counter =1;
						while($row = mysqli_fetch_array($query)){
							
							?>
							<tbody>
							<tr>
							<td><?php echo $row['borrowId'] ?></td>
							<td><?php echo $row['id_student'];?></td>
							 <td><?php echo $row['bookName']; ?></td>
				             <td><?php echo $row['StudentName']; ?></td>
                            <td>   <form method='post' action='borrowedbooks.php'>
                        <input type='hidden' value="<?php echo $row['borrowId']; ?>" name='borrowId'>
                        <button class="delete-button" name='delete' type='submit' value='Delete' class='btn btn-warning' onclick='return Delete()'>DELETE</button>
                        </form>
                    </td>
							</tr>
							</tbody>
							<?php }
					
					 ?>
					 </table>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
<script type="text/javascript">
//$(".show-in").on("click", function(e){
	e.preventDefault();
	var book_id = $(this).find(".book-id"); //Get the id of the book;
	book_id = book_id.val();

	var book_name = $(this).find(".book-name"); //Get the name of the book;
	book_name = book_name.val();

	var purpose = $(this).find(".purpose"); //Get the purpose of the passing the value;
	purpose = purpose.val();

	if(purpose == "show"){
		alert(book_name);
	}
//})

</script>
    <script src="main.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>