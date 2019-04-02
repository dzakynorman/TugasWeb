<?php
session_start();
require_once('config.php');
require_once('libraries/helpers.php');
render('header', array('title' => 'Tambah Menu'));
$db = new Config();
$menu = $db->runQuery("SELECT * FROM menu");

// Check If form submitted, insert form data into menu table.
  // Proses add.php untuk menambahkan menu
  if(isset($_POST['submit'])) {
    $jenis = mysqli_real_escape_string($db->getCon(), $_POST['jenis']);
    $nama = mysqli_real_escape_string($db->getCon(), $_POST['nama']);
    $deskripsi= mysqli_real_escape_string($db->getCon(), $_POST['deskripsi']);
    $harga = mysqli_real_escape_string($db->getCon(), $_POST['harga']);
    
    // checking empty fields
  if(empty($jenis) || empty($nama) || empty($deskripsi) || empty($harga)) {
        
    if(empty($jenis)) {
      echo "<font color='red'>Jenis field is empty.</font><br/>";
    }
    
    if(empty($nama)) {
      echo "<font color='red'>nama field is empty.</font><br/>";
    }

    if(empty($deskripsi)) {
      echo "<font color='red'>deskripsi field is empty.</font><br/>";
    }

    if(empty($harga)) {
      echo "<font color='red'>harga field is empty.</font><br/>";
    }
    
    //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
  } else {
        
    // Insert user data into table
    $result = "INSERT INTO menu (jenis,nama,deskripsi,harga) VALUES('$jenis','$nama','$deskripsi','$harga')";
    
    // Show message when user added
    $db->runQuery($result);
    $_SESSION['add'] = 'Berhasil menambahkan menu ' . $nama . '!';
    header('location: tables.php');
    }

  }
?>
<html>
	<body>
		<a href="tables.php">Home</a>
		<br/><br/>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3" style="display: flex; align-items: center; height: 65vh">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Tambah Menu</strong></h3>
					</div>
					<div class="panel-body">
						<form action="add.php" method="post" name="tambah-menu" class="col-sm-12" style="border: none">
							<div class="form-group">
								<div class="input-group">
									<label>Jenis</label>
									<!-- <input type="text" name="jenis"> -->
									<select name="jenis">
			                            <option value="Makanan">Makanan</option>
			                            <option value="Minuman">Minuman</option>
			                            <option value="Snack">Snack</option>
			                        </select>
								</div>
								<div class="input-group">
									<label>Nama Menu</label>
									<input type="text" name="nama">
								</div>
								<div class="input-group">
									<label>Deskripsi</label>
									<input type="text" name="deskripsi" size="40">
								</div>
								<div class="input-group">
									<label>Harga</label>
									<input type="text" name="harga">
								</div>
								<input type="submit" name="submit" class="btn btn-default glyphicon glyphicon-shopping-cart" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>