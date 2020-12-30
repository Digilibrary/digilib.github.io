<?php
require '../includes/db-inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pertemuan 5</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
 <body id="body-pd">
	<div class="container">
		<!-- navbar -->
		</nav>

		<!-- heading -->
		<h1>Daftar Buku</h1>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Main page</title>
  </head>
<body>
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

                    <a href="book2.php" class="nav__link">
                        <i class="fas fa-book"></i>
                        <span class="nav__name">Books</span>
                    </a>

                    <a href="../book/return.php" class="nav__link">
                        <i class='bx bx-bookmark nav__icon' ></i>
                        <span class="nav__name">Return</span>
                    </a>
                </div>
            </div>
            <a href="../Main page/logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon' ></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <table class="table table-hover">
			<thead class="bg-dark text-white">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Title</th>
					<th scope="col">Authors</th>
					<th scope="col">Edition</th>
					<th scope="col">Status</th>
						<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
					<?php
                                    $sql = "select * from books";

                    $query = mysqli_query($conn, $sql);
                    $counter = 1;
                    while ($row = mysqli_fetch_array($query)) {
                        $_SESSION['Title'] = $row['BooksTitle']; ?>
					<tr>
						<td><?php echo $counter++; ?></td>
						<td><?php echo $row['BooksTitle']; ?></td>
						<td><?php echo $row['Authors']; ?></td>
						<td><?php echo $row['Edition']; ?></td>
						<td><?php echo $row['Status']; ?></td>

						<td><a href="lend-student.php" id="show" class="show-in"><button class="btn btn-success">Borrow Now

							</button>
							<input type="hidden" class="book-id" value="<?php echo $row['bookId']; ?>">
							<input type="hidden" class="book-name" value="<?php echo $row['Title']; ?>">
							<input type="hidden" class="purpose" value="show">
							</a></td>

					</tr>
			</tbody>
			<?php
                    }
            ?>
		</table>
    <script src="assets/js/main.js"></script>
  </body>
</html>
