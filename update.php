<?php
session_start();
require_once('config.php');
require_once('libraries/helpers.php');
render('header', array('title' => 'Update Menu'));
$db = new Config();
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$menu = $db->runQuery("SELECT * FROM menu WHERE id='$id'");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$nama = mysqli_real_escape_string($db->getCon(), $_POST['nama']);
    $deskripsi= mysqli_real_escape_string($db->getCon(), $_POST['deskripsi']);
    $harga = mysqli_real_escape_string($db->getCon(), $_POST['harga']);
    
  	$db->runQuery("UPDATE menu SET nama='$nama', deskripsi='$deskripsi', harga='$harga' WHERE id='$id'");
  	
  	$_SESSION['update'] = 'Berhasil update data menu.';
	header("location:tables.php");
  	exit;
}
?>
<html>
<body>
	<div class="row">
		<a href="tables.php" class="col-sm-6 col-sm-offset-3" style="display: flex; padding-top: 70px;">Back to Home</a>
			<div class="col-sm-6 col-sm-offset-3" style="display: flex; align-items: center; height: 65vh">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Update Menu</strong></h3>
					</div>
					<div class="panel-body">
						<form action="update.php?id=<?php echo $id ?>" method="post" name="update-menu" class="col-sm-12" style="border: none">
							<div class="form-group">
								<?php foreach($menu as $row) { ?>
								<div class="input-group">
									<label>Nama</label>
									<input type="text" name="nama" value="<?php echo $row['nama']?>">
								</div>
								<div class="input-group">
									<label>Deskripsi</label>
									<input type="text" name="deskripsi" value="<?php echo $row['deskripsi']?>">
								</div>
								<div class="input-group">
									<label>Harga</label>
									<input type="text" name="harga" value="<?php echo $row['harga']?>">
								</div>
								<input type="submit" name="POST" class="btn btn-default glyphicon glyphicon-shopping-cart" value="Update">
							<?php } ?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</body>
</html>