<?php
// proses memasukkan isi pesanan pada keranjang ke dalam sesi menu_cart

session_start();

if(isset($_POST["aksi"]))
{
	if($_POST["aksi"] == "add")
	{
		if(isset($_SESSION["menu_cart"]))
		{

			if (isset($_SESSION["username"])) 
			{
				$is_available = 0;
				foreach($_SESSION["menu_cart"] as $keys => $values)
				{
					if($_SESSION["menu_cart"][$keys]['id'] == $_POST["id"])
					{
						$is_available++;
						$_SESSION["menu_cart"][$keys]['jumlah'] = $_SESSION["menu_cart"][$keys]['jumlah'] + $_POST["jumlah"];
					}
				}
				if($is_available == 0)
				{
					$item_array = array(
						'id'               =>     $_POST["id"],  
						'nama'             =>     $_POST["nama"],  
						'harga'            =>     $_POST["harga"],  
						'jumlah'         =>     $_POST["jumlah"]
					);
					$_SESSION["menu_cart"][] = $item_array;
				}
			}
		}
		else
		{
			$item_array = array(
				'id'               =>     $_POST["id"],  
				'nama'             =>     $_POST["nama"],  
				'harga'            =>     $_POST["harga"],  
				'jumlah'         =>     $_POST["jumlah"]
			);
			$_SESSION["menu_cart"][] = $item_array;
		}
	}

	if($_POST["aksi"] == 'remove')
	{
		foreach($_SESSION["menu_cart"] as $keys => $values)
		{
			if($values["id"] == $_POST["id"])
			{
				unset($_SESSION["menu_cart"][$keys]);
			}
		}
	}
	if($_POST["aksi"] == 'empty')
	{
		unset($_SESSION["menu_cart"]);
	}
}

?>