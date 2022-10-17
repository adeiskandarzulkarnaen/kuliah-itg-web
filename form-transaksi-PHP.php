<html>
	<head>
		<title>2006043 - Form Transaksi</title>
	</head>
	<body>
		<h1>Form Transaksi</h1>
		<form method="POST">
			<table>
				<tr>
					<td><label for="name">Nama Barang</label></td>
					<td><input type="text" id="name" name="name"></td>
				</tr>
				<tr>
					<td><label for="price">Harga</label></td>
					<td><input type="number" id="price" name="price"></td>
				</tr>
				<tr>
					<td><label for="qty">Jumlah Item Barang</label></td>
					<td><input type="number" id="qty" name="qty"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" name="submit">hitung</button> <button type="reset" name="reset">reset</button></td>
				</tr>
			</table>
		</form>
		<hr>
		<h2>Hasil :</h2>
		<?php
			if(isset($_POST['submit'])){  // Check if form was submitted
				$name = $_POST['name'];
				$price =$_POST['price'];
				$qty = $_POST['qty'];
				$result = $price * $qty;
				echo "
					<table border='1'>
						<tr>
							<td>Nama Barang</td>
							<td>Harga</td>
							<td>Banyak</td>
							<td>Total Harga</td>
						</tr>
						<tr>
							<td>$name</td>
							<td>$price</td>
							<td>$qty</td>
							<td>$result</td>
						</tr>
					</table>
				";
			};
		?>
	</body>
</html>