<?php
// tampilan cart pada popover di pojok kiri atas
// dinamis sesuai ada atau tidaknya isi dari sesi menu_cart
// semua pesanan akan disimpan dalam sesi menu_cart dalam bentuk array

session_start();

$total_harga = 0;
$total_item = 0;

$output = '
<div class="table-responsive" id="order_table">
    <table class="table table-bordered table-striped">
        <tr>  
            <th width="40%">Menu</th>  
            <th width="10%">Jumlah</th>  
            <th width="20%">Harga</th>  
            <th width="15%">Total</th>  
            <th width="5%">Aksi</th>  
        </tr>
';
if(!empty($_SESSION["menu_cart"]))
{
    // foreach semua isi dari sesi menu_cart
    foreach($_SESSION["menu_cart"] as $keys => $values)
    {
        // menyimpan tampilan html dalam variabel output
        $output .= '
        <tr>
            <td>'.$values["nama"].'</td>
            <td>'.$values["jumlah"].'</td>
            <td align="right">Rp '.number_format($values["harga"], 2,',','.').'</td>
            <td align="right">Rp '.number_format($values["jumlah"] * $values["harga"], 2,',','.').'</td>
            <td><button name="hapus" class="btn btn-danger btn-xs delete" id="'. $values["id"].'">Hapus</button></td>
        </tr>
        ';
        $total_harga = $total_harga + ($values["jumlah"] * $values["harga"]);
        $total_item = $total_item + 1;
    }
    $output .= '
    <tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">Rp '.number_format($total_harga,2,',','.').'</td>  
        <td></td>  
    </tr>
    ';
}
else
{
    $output .= '
    <tr>
        <td colspan="5" align="center">
            Keranjang anda kosong!
        </td>
    </tr>
    ';
}
$output .= '</table></div>';
// deklarasi variabel dengan array yang berisi tampilan tabel, kalkulasi total harga dan total item
$data = array(
    'cart_details'      =>  $output,
    'total_harga'       =>  'Rp' . number_format($total_harga,2,',','.'),
    'total_item'        =>  $total_item
);  

// menyimpan data array dalam bentuk JSON
echo json_encode($data);


?>