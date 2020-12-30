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
    <link rel="stylesheet" href="assets/css/main.css">
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
            <a href="logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon' ></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <div class="card">
        <div class="card__inner">
            <div class="card__face card__face--front">
                <h2>Fun fact</h2>
            </div>
            <div class="card__face card__face--back">
                <div class="card__content">
                    <div class="card__header">
                        <img src="img/rendang-web.jpg" alt="" class="pp" />
                        <h2>Fun fact</h2>
                    </div>
                    <div class="card__body">
                        <h3>Foods</h3>
                        <p><strong>Rendang is the number 1 world's best-loved cuisines</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
