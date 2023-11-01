<html>
	<head>
		<title>2006043 - Ade Iskandar Zulkarnaen</title>
	</head>
	<body>
		<h1>Transaksi Penjualan</h1>
		<form method="POST">
			<table>
				<tr>
					<td><label for="name">Nama Barang</label></td>
					<td><input type="text" id="name" name="name"></td>
				</tr>
				<tr>
					<td><label for="typeHardware">Jenis Barang</label></td>
					<td><input type="text" id="typeHardware" name="typeHardware"></td>
				</tr>
				<tr>
					<td><label for="qty">Qty</label></td>
					<td><input type="number" id="qty" name="qty"></td>
				</tr>
				<tr>
					<td><label for="price">Harga</label></td>
					<td><input type="number" id="price" name="price"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" name="submit">hitung</button> <button type="reset" name="reset">reset</button></td>
				</tr>
			</table>
		</form>
		<br>
		
		<?php
			function countDiscount($pricesAfterDicount){
				if ($pricesAfterDicount >= 300000){
					return $pricesAfterDicount * 0.05 ;
				} elseif ($pricesAfterDicount >= 700000) {
					return $pricesAfterDicount * 0.1 ;
				}elseif ($pricesAfterDicount >= 1000000) {
					return $pricesAfterDicount * 0.15 ;
				} else {
					return 0 ;
				}
			}

			if(isset($_POST['submit'])){  // Check if form was submitted
				$name = $_POST['name'];
				$typeHardware = $_POST['typeHardware'] ;
				$qty = $_POST['qty'];
				$price =$_POST['price'];
				$result = $price * $qty;
				$discount = countDiscount($result);
				$priceAfterDiscount = $result - $discount ;
				echo "
					<table border='1'>
						<tr>
							<td>Nama Barang</td>
							<td>Jenis Barang</td>
							<td>Qty</td>
							<td>Harga</td>
							<td>Total Harga</td>
							<td>Discount</td>
							<td>Total Harga Setelah Discount</td>
						</tr>
						<tr>
							<td>$name</td>
							<td>$typeHardware</td>
							<td>$qty</td>
							<td>$price</td>
							<td>$result</td>
							<td>$discount</td>
							<td>$priceAfterDiscount</td>
						</tr>
					</table>
				";
			};
		?>
	</body>
</html>