<?php

require_once('libraries/helpers.php');

render('header', array('title' => 'Sesi Habis'));

?>

<style>
    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 36px;
        padding: 20px;
    }
</style>

<div class="flex-center position-ref full-height">
	<div class="title">
	Sesi pemesanan anda habis. Silakan lakukan pemesanan kembali.
	</div>
</div>