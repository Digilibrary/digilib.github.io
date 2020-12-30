<?php
require '../includes/db-inc.php';
$sql = "select * from books";
// eksekusi kueri
$data = mysqli_query($conn, $sql);
while ($baris = $data->fetch_object()) {
    // mengemas kedalam sebuah array dengan indeks numerik
    // agar mudah di olah di frontend
    $tabel[] = $baris;
}
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

				<?php foreach ($tabel as $brs): ?>
					<tr>
						<th scope="row"><?php echo $brs->No ?></th>
						<td><?php echo $brs->Title ?></td>
						<td><?php echo $brs->Authors ?></td>
						<td><?php echo $brs->Edition ?></td>
						<td><?php echo $brs->Status ?></td>

					</tr>
				<?php endforeach ?>

			</tbody>
		</table>
    <script src="assets/js/main.js"></script>
  </body>
</html>
