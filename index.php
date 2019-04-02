<?php
require_once('config.php');
$db = new Config();
$makanan = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Makanan'");
$minuman = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Minuman'");
$snack = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Snack'");
$alamat = $db->runQuery("SELECT * FROM alamat");
?>
<?php require_once('libraries/helpers.php') ?>

<?php render('header', array('title' => 'Home')); ?>
<title>Nasi Goreng Kebon Sirih</title>
<body>
	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">

									<h1 class="to-animate">Nasi Goreng Kambing Kebon Sirih</h1>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/slide_1.png);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_2.png);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_3.png);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home">Beranda</a>
						<a href="#" data-nav-section="menu">Menu</a>
					</div>
					<div class="fh5co-logo">
						<a href="index.html">NGKKS</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="events">Outlet</a>
						<a href="login.php" onclick="window.location.href='login.php'">Order</a>
					</div>
				</div>				
			</div>
		</div>

		<div id="fh5co-menus" data-section="menu">
			<div class="container">
					<div class="row text-center fh5co-heading row-padded">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="heading to-animate">Food Menu</h2>
							<p class="sub-heading to-animate">Pergi ke pasar sore-sore, ketemu bu RT lagi belanje buah, kalo mau makan kambing yang gak ada baunye, mending mampir ke NASGORKAMBONSIR dah!</p>
						</div>
					</div>
					
						<div class="col-md-6">
							<div class="fh5co-food-menu to-animate-2">
								<h2 class="fh5co-dishes">FOOD</h2>
								<ul>
										<?php 
											foreach($makanan as $row) {
										?>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="<?php echo $row['gambar']; ?>" >
											</figure>
											<div>
												<h3><?php echo $row['nama']; ?></h3>
												<p><?php echo $row['deskripsi']; ?></p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											<?php echo $row['harga']; ?>
										</div>
									</li>
										<?php		
											}
										?>
								</ul>
							</div>
						</div>
						<div class="row row-center">
							<div class="col-md-6">
								<div class="fh5co-food-menu to-animate-2">
									<h2 class="fh5co-drinks">Drinks</h2>
									<ul>
									<?php 
									foreach($minuman as $row) {
									?>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="<?php echo $row['gambar']; ?>">
												</figure>
												<div>
													<h3><?php echo $row['nama']; ?></h3>
													<p><?php echo $row['deskripsi']; ?></p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												<?php echo $row['harga']; ?>
											</div>
										</li>
										<?php		
											}
										?>
									</ul>
								</div>
							</div> 
						<div class="row row-center">
							<div class="col-md-6">
								<div class="fh5co-food-menu to-animate-2">
									<h2 class="fh5co-snacks">Snack</h2>
									<ul>
									<?php 
									foreach($snack as $row) {
									?>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="<?php echo $row['gambar']; ?>">
												</figure>
												<div>
													<h3><?php echo $row['nama']; ?></h3>
													<p><?php echo $row['deskripsi']; ?></p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												<?php echo $row['harga']; ?>
											</div>
										</li>
										<?php		
											}
										?>
										</ul>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
		<div id="fh5co-events" data-section="events" style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h2 class="heading">Our Outlet</h2>
						<p class="sub-heading">Buat semuanye yang mau dateng ke lapak kite nih catet alamat-alamatnye.</p>
					</div>
				</div>
				<div class="row">
					<?php 
						foreach($alamat as $row) {
					?>
						<div class="col-md-4">
							<div class="fh5co-event to-animate-2">
								<h3><?php echo $row['cabang'] ?></h3>
								<span class="fh5co-event-meta"><?php echo $row['telp'] ?></span>
								<p><?php echo $row['alamat'] ?><br>
									<?php echo $row['keterangan'] ?> </p>
								<p><a href="map.php?lat=<?php echo $row['lat']?>&lng=<?php echo $row['lng']?>" class="btn btn-primary btn-outline">See Map</a></p>
							</div>
						</div>
					<?php		
						}
					?>
				</div>
			</div>
		</div>

	<?php include('partials/footer.php'); ?>
</body>
</html>

