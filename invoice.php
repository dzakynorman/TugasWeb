
<?php

session_start();
require_once('libraries/helpers.php');
render('header', array('title' => 'Invoice'));
include 'config.php';
$db = new Config();

$total_harga = 0;
// mengambil isi dari session menu_cart lalu foreach seluruh variabel yang diperlukan
foreach($_SESSION["menu_cart"] as $keys => $values) {
    $menu = $values['nama'];
    $id_menu = $values['id'];
    $jumlah = $values['jumlah'];
    $harga = $values['harga'] * $values['jumlah'];
    $total_harga = $total_harga + $harga;
}

// melakukan query terhadap variabel yang dibutuhkan pada invoice
$username = $_SESSION['username'];
$email = $db->runQuery("SELECT email FROM users WHERE username = '$username'");
$orderBaru = $db->runQuery("SELECT id FROM orders WHERE username = '$username' ORDER BY waktu_ambil 
    DESC LIMIT 1");
$id_order = reset($orderBaru)['id'];
$notes = $db->runQuery("SELECT catatan FROM orders WHERE id = '$id_order'");
$waktu = $db->runQuery("SELECT waktu_ambil FROM orders WHERE id = '$id_order'");
$waktuu = $db->runQuery("SELECT created_at FROM orders WHERE id = '$id_order'");
$waktu_ambil = date("d/m/y g:i A",strtotime($waktu[0]['waktu_ambil']));
$waktu_pesan = date("d/m/y g:i A",strtotime($waktuu[0]['created_at']));

if (isset($_SESSION['menu_cart'])):
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Nasi Goreng Kambing Kebon Sirih</h2><h3 class="pull-right">Order # <?php echo $id_order; ?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
                    <address>
                    <strong>Nama Pemesan:</strong><br>
                        <?php echo $username; ?><br>
                    </address>
                </div>
    			<div class="col-xs-6 text-right">
                    <address>
                        <strong>Waktu Pesan:</strong><br>
                        <?php echo $waktu_pesan; ?><br><br>
                    </address>
                </div>
    		</div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Metode Pembayaran:</strong><br>
                        eMoney NGKKS<br>
                        <?php echo $email[0]['email']; ?>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Waktu Ambil:</strong><br>
                        <?php echo $waktu_ambil; ?><br><br>
                    </address>
                </div>
            </div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<th><strong>Menu</strong></th>
                                    <th class="text-center"><strong>Jumlah</strong></th>
                                    <th class="text-center"><strong>Harga</strong></th>
                                    <th class="text-right"><strong>Total</strong></th>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							 <?php
                                if(!empty($_SESSION["menu_cart"]))
                                {
                                foreach($_SESSION["menu_cart"] as $keys => $values)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $values["nama"] ?> </td>
                                    <td class="text-center"><?php echo $values["jumlah"] ?> </td>
                                    <td class="text-center">Rp <?php echo $values["harga"] ?> </td>
                                    <td class="text-right">Rp <?php echo $values["jumlah"] * $values["harga"] ?></td>
                                </tr>
                                <?php
                                }
                                ?>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">Rp <?php echo $total_harga ?></td>
    							</tr>
                                <?php
                                }
                                ?>
    						</tbody>
    					</table>
                    </div>
                </div>
            </div>
            <button class="btn btn-default" onClick="window.print()">Print Invoice</button>
        </div>
    </div>
    <span>Saldo anda akan otomatis terpotong sesuai total harga pesanan anda.</span>
    <br>
    <span>Anda puas? Beri tahu teman anda. Anda tidak puas? Beri tahu kami :)</span>
</div>

<?php
else:
// redirect ke halaman session-empty ketika sesi kosong atau sudah habis
header('location: session-empty.php');
endif
?>

<?php
// menghapus sesi setelah masuk invoice
unset($_SESSION['menu_cart']);

?>