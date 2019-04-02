<?php
session_start();
require_once('config.php');
require_once('libraries/helpers.php');
render('header', array('title' => 'Update Saldo'));
$db = new Config();
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$users = $db->runQuery("SELECT * FROM users WHERE id='$id'");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
    $saldo = mysqli_real_escape_string($db->getCon(), $_POST['saldo']);
    
  	$db->runQuery("UPDATE users SET saldo='$saldo' WHERE id='$id'");
  	
  	$_SESSION['updatesaldo'] = 'Berhasil update data menu.';
	header("location:user.php");
  	exit;
}
?>
<html>
<body>
	<div class="row">
		<a href="tables.php" class="col-sm-6 col-sm-offset-4" style="display: flex; padding-top: 70px;">Back to Home</a>
			<div class="col-sm-6 col-sm-offset-4" style="display: flex; align-items: center; height: 65vh">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Update Saldo</strong></h3>
					</div>
					<div class="panel-body">
						<form action="updatesaldo.php?id=<?php echo $id ?>" method="post" name="update-saldo" class="col-sm-12" style="border: none">
							<div class="form-group">
								<?php foreach($users as $row) { ?>
								<div class="input-group">
									<label>Nama</label>
									<a type="text" name="nama"><?php echo $row['username']?></a>
								</div>
								<div class="input-group">
									<label>Email</label>
									<a type="text" name="email"><?php echo $row['email']?></a>
								</div>
								<div class="input-group">
									<label>Saldo</label>
									<input type="text" name="saldo" value="<?php echo $row['saldo']?>">
								</div>
								<input type="hidden" name="id" value="<?php echo $row['id']?>">
								<input type="submit" name="POST" class="btn btn-default" value="Update">
							<?php } ?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

</body>
</html>