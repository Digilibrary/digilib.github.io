<?php 
		require '../includes/snippet.php';
	require '../includes/db-inc.php';


	// echo "Hello Uche";

	if (isset($_POST['submit'])) {
		//Getting the values from the forms
		$username = sanitize(trim($_POST['username']));
		$password1 = sanitize(trim($_POST['password1']));
		$password2 = sanitize(trim($_POST['password2']));


//Check if the password matches
		if ($password1 == $password2) {
			//create an sql statement
		$sql =
		 "INSERT into admin (Username, Password) values ('$username', '$password1')";
		 

		//query the database
		$query = mysqli_query($conn, $sql);
		$error = false;

		if ($query) {
		$error = true;
		}
		else {
		echo "<script>alert('Admin not added!');
					</script>";	
		}

		}

		else {
			echo  "<script>alert('Password mismatched!')</script>";
		}

		
	}

 ?>

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
<div class="container">
	<div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 30px">
		<div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
			<?php if(isset($error)) { ?>
		<div class="alert alert-success alert-dismissable">
				  <button class="delete-record" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  <strong>Record Added Successfully!</strong>
			</div>
			<?php } ?>
			<p class="header-form">ADD ADMIN</p>

			<div class="container">
				<form class="form" class="form-horizontal" role="form" method="post" action="adduser.php" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Username" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10">
							<input class="input" type="text" class="form-control" name="username" placeholder="Enter Username" id="username" required>
						</div>		
					</div>
					<div class="form-group"><br>
						<label for="Password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input class="input" type="password" class="form-control" name="password1" placeholder="Enter Password" id="password" required>
						</div>		
					</div>
					<div class="form-group"><br>
						<label for="Password" class="col-sm-2 control-label">Confirm Password</label>
						<div class="col-sm-10">
							<input class="input" type="password" class="form-control" name="password2" placeholder="Enter Password" id="password" required>
						</div>		
					</div>
					
					<div class="form-group ">
						<div class="col-sm-offset-2 col-sm-10 "><br>
							<button class="submit" type="submit" class="btn btn-info col-lg-4 " name="submit">
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
<script type="text/javascript">
 	window.onload = function () {
		var input = document.getElementById('name').focus();
	}
 </script>
    <script src="main.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>