<?php
session_start();
require_once('config.php');
$db = new Config();
$id = $_GET['id'];
$db->cekLogin();
// mengambil id dari database
$orders_detail = $db->runQuery("SELECT * FROM orders_detail WHERE id_order = '$id'");
$orders = $db->runQuery("SELECT * FROM orders WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    NASI GORENG KEBON SIRIH
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

</head>
<body>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Order Detail</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                      <thead class="">
                        <th>
                          <strong>ID Order</strong> 
                        </th>
                        <th>
                          <strong>Nama User</strong> 
                        </th>
                        <th>
                          <strong>Nama Makanan</strong> 
                        </th>
                        <th>
                          <strong>Harga</strong> 
                        </th>
                        <th>
                          <strong>Jumlah</strong> 
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($orders_detail as $row) 
                        {
                          $harga = number_format($row['harga'], 0,',','.');
                          ?>
                       <tr>
                        <td>
                          <?php echo $row['id_order'];?>
                        </td>
                        <td>
                          <?php echo $row['username'];?>
                        </td>
                        <td>
                          <?php echo $row['nama'];?>
                        </td>
                        <td>
                          <?php echo 'Rp ' . $harga; ?>
                        </td>
                        <td>
                          <?php echo $row['jumlah'];?>
                        </td>
                      </tr>
                        <?php }
                        ?>
                      </tbody>
                      </tr>
                      </table> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>