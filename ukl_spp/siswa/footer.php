<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin SPPku</title>
  <!-- <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'> -->
  <script src="https://kit.fontawesome.com/24b47ebcca.js" crossorigin="anonymous"></script>

</head>
<body>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>SPPku</h3>

				<p class="footer-links">
					<a href="dashboard.php" class="link-1">Home</a>
					
					<a href="historipembayaran.php">Histori Pembayaran</a>
				
					<a href="upload.php">Upload Bukti Pembayran</a>
				
					<a href="#">Profile</a>
					
					<a href="logout.php">Log Out</a>
					
</p>

				<p class="footer-company-name">SPPku © <?= date("Y")?></p>
                
			</div>

			<div class="footer-center">

				<div>
					<i class="fa-sharp fa-solid fa-location-dot"></i>
					<p><span>Ngasem</span> Kediri</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>086456275672</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:reyhandiansa@gmail.com">sppku@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Tentang SPPku</span>
					SPPku adalah aplikasi berbasis website yang difunakan untuk mempermudah siswa dalam melakukan pembayaran dan juga mengonfirmasinya.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</body>
</html>