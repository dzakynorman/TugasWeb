<?php
    session_start();
	require_once('config.php');
	$db = new Config();
    // ambil session user
    $namapengguna = $_SESSION["username"];
    $email = $db->runQuery("SELECT email FROM users WHERE username = '".$namapengguna."'");
    $saldo = $db->runQuery("SELECT saldo FROM users WHERE username = '".$namapengguna."'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Akun Saya</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="shortcut icon" href="images/food-menu.png">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  
        <div class="row">

            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu" >
                    <li></li>
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                    <br>
                    <li>
                        <div class="text-center">
                            <img src="images/profilePicture.png" class="avatar img-circle" alt="avatar">
                        </div>
                    </li>
                    <br>
                    <li><a href="home.php" data-target-id="home"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="logout.php" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i>Logout</a></li>
                </ul>
            </div>

            <div class="col-md-9  admin-content" id="profile">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Username</h3>
                    </div>
                    <div class="panel-body">
                    
                    <?php
                    echo $namapengguna;
                    ?>

                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                    <?php
                    echo $email[0]['email'];
                    ?>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Saldo</h3>

                    </div>
                    <div class="panel-body">
                    <?php
                    echo "Rp ".$saldo[0]['saldo'];
                    ?>
                    </div>
                </div>

            </div>
        <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->      
                          <div class="modal-content" id="logout">
                                    <div class="panel panel-info" style="margin: 1em;">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Confirm Logout</h3>
                                        </div>
                                        <div class="panel-body">
                                            Do you really want to logout ?  
                                            <a  href="logout.php" class="label label-danger"
                                                onclick="window.location.href='logout.php'">
                                                <span >   Yes   </span>
                                            </a>    
                                            <a href="" class="label label-success"> <span >  No   </span></a>
                                        </div>
                                        <form id="logout-form" action="#" method="POST" style="display: none;">
                                        </form>
                                    </div>
                           </div>
                          
                        </div>
                    </div>
</div>

</body>
</html>