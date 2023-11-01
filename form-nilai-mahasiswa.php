<html>
	<head>
		<title>2006043 - Ade Iskandar Zulkarnaen</title>
		<style>
			input  {
				width: 100%;
			}
		</style>
		<script type="text/javascript">
			function clearTable() {
				document.getElementById('result-table').innerHTML = "";
			}
    	</script>
		
	</head>
	<body>
		<h1>Konversi Nilai AKhir</h1>
		<form method="POST">
			<table>
				<tr>
					<td><label for="name">Nama Mahasiswa</label></td>
					<td>:</td>
					<td>
						<input 
							type="text" 
							id="name" 
							name="name" 
							placeholder="isi nama Mahasiswa" 
							required
						>
					</td>
				</tr>
				<tr>
					<td><label for="matkul">Nama Matakuliah</label></td>
					<td>:</td>
					<td>
						<input 
							type="text" 
							id="price" 
							name="matkul" 
							placeholder="isi matakuliah"
							required
						>
					</td>
				</tr>
				<tr>
					<td><label for="jurusan">Jurusan</label></td>
					<td>:</td>
					<td>
						<input 
							type="text" 
							id="jurusan" 
							name="jurusan" 
							placeholder="isi Nama jurusan"
							required
						>
					</td>
				</tr>
				<tr>
					<td><label for="tugas">Tugas</label></td>
					<td>:</td>
					<td>
						<input 
							type="number" 
							id="tugas" 
							name="tugas" 
							min="0" max="100"
							placeholder="Bobot 25%"
							required
						>
					</td>
				</tr>
				<tr>
					<td><label for="quis">Quis</label></td>
					<td>:</td>
					<td>
						<input 
							type="number" 
							id="quis" 
							name="quis" 
							min="0" max="100"
							placeholder="Bobot 10%"
							required
						>
					</td>
				</tr>
				<tr>
					<td><label for="uts">UTS</label></td>
					<td>:</td>
					<td>
						<input 
							type="number" 
							id="uts" 
							name="uts" 
							min="0" max="100"
							placeholder="Bobot 30%"
							required
						>
					</td>
				</tr>
				<tr>
					<td><label for="uas">UAS</label></td>
					<td>:</td>
					<td>
						<input 
							type="number" 
							id="uas" 
							name="uas" 
							min="0" max="100"
							placeholder="Bobot 35%"
							required
						>
					</td>
				</tr>
				<tr>
					<td>
						<button type="submit" name="submit">hitung</button>
						<button type="reset" name="reset" onclick="clearTable()">reset</button>
					</td>
					<td></td>
					<td></td>
				</tr>	
			</table>
		</form>
		<hr>
		<h2>Hasil :</h2>
		<div id="result-table">
			<?php
				if(isset($_POST['submit'])){  // Check if form was submitted
					$name = $_POST['name'];
					$matkul = $_POST['matkul'];
					$jurusan = $_POST['jurusan'];
                    
					$tugas = $_POST['tugas'];
					$quis = $_POST['quis'];
					$uts = $_POST['uts'];
					$uas = $_POST['uas'];
					
					$nilai_akhir = ($tugas * 0.25) + ($quis * 0.1) + ($uts * 0.3) + ($uas * 0.35);
                    
					$grade = '';
					switch (true) {
						case ($nilai_akhir >= 80):
							$grade = "A";
							break;
						case ($nilai_akhir >= 70):
							$grade = "B";
							break;
						case ($nilai_akhir >= 60):
							$grade = "C";
							break;
						case ($nilai_akhir >= 40):
							$grade = "D";
							break;
						default:
							$grade = "E";
					}
                    
					echo "
						<table border='1'>
							<tr>
								<td>Nama Mahasiswa</td>
								<td>Mata Kuliah</td>
								<td>Jurusan</td>
								<td>Tugas</td>
								<td>Quis</td>
								<td>UTS</td>
								<td>UAS</td>
								<td>Nilai AKhir</td>
								<td>Grade Akhir</td>
							</tr>
							<tr>
								<td>$name</td>
								<td>$matkul</td>
								<td>$jurusan</td>
								<td>$tugas</td>
								<td>$quis</td>
								<td>$uts</td>
								<td>$uas</td>
								<td>$nilai_akhir</td>
								<td>$grade</td>
							</tr>
						</table>
					";
				};
			?>
		</div>
	</body>
</html>