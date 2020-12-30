<?php
require '../includes/db-inc.php';
    session_start();
$student_name = $_SESSION['student-id'];
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
                    <a href="../Main page/dashboard.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="profile.php" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Profile</span>
                    </a>

                    <a href="../book/book2.php" class="nav__link">
                        <i class="fas fa-book"></i>
                        <span class="nav__name">Books</span>
                    </a>

                    <a href="../book/return.php" class="nav__link">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__name">Return Book</span>
                    </a>
                </div>
            </div>
            <a href="../home.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <div>
        <h2>My Profile</h2>
        <img id = "profiles" src="assets/img/drawing-4.1.svg" alt="profile" style="width:15% ">
    </div>
    <div>
 		<table class='table'>
                   <?php
                    $sql = "SELECT * from tb_user where id_student = '$student_name'";
                    $query = mysqli_query($conn, $sql);
                    while ($show = mysqli_fetch_assoc($query)) { ?>

        <tbody>
            <tr>
                <td>
                    <b> Full Name: </b>
                </td>
                <td><?php echo $show['StudentName'] ?></td>

            </tr>
            <tr>
                <td>
                    <b> Student ID: </b>
                </td>
                <td><?php echo $show['id_student'] ?></td>
            </tr>
            <tr>
                <td>
                    <b> Email                  : </b>
                </td>
                <td><?php echo $show['email'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
 		</table>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
