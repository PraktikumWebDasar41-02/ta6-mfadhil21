<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td> Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr> 
				<td>Kelas :</td>
				<td> <input type="radio" name="kelas" value="01">01</td> 
				<td><input type="radio" name="kelas" value="02">02</td>>  
				<td><input type="radio" name="kelas" value="03">03</td>
				<td><input type="radio" name="kelas" value="null" checked hidden></td>
			</tr>
			 <tr> 
				<td>Jenis Kelamin :</td>
				<td> <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki</td>
				<td><input type="radio" name="jk" value="Perempuan"> Perempuan</td>
				<td><input type="radio" name="jk" value="null" checked hidden></td>
			</tr>
			<tr>
				<td>Hobi : </td>
				<td><input type="checkbox" name="hobi[]" value="Sepakbola">Sepakbola</td>
				<td><input type="checkbox" name="hobi[]" value="Basket">Basket</td>
				<td><input type="checkbox" name="hobi[]" value="Dota">Dota</td>
			</tr>
			<tr>
				<td> Masukkan Fakultas :</td>
				<td>
					<select name="fakultas">
						  <option value="null">Pilih..</option>
						  <option value="FIT">FIT</option>
						  <option value="FEB">FIK</option>
						  <option value="FKB">FKB</option>
						  <option value="FIK">FEB</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Masukkan Alamat :</td>
				<td><input type="textarea" name="alamat"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
include('konek.php');
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jk'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];

	if (strlen($nama)>=35) {
		echo "<br>";
		$err = "f";
		echo "Nama Maksimal 35 Karakter";
	}else{
	$err = "t";
			}
			if(empty($nama)){
			echo "Nama masih kosong.<br>";
			$err = "f";
			}else{
				$err = "t";
			}

			if (strlen($nim)==10) {
				echo "<br>";
				$nim_err = "t";
			}else{
				$nim_err = "f";
				echo "NIM Maksimal Minimal 10 Karakter";
			}

			if (!is_numeric($nim)) {
				echo "<br>";
				$nim_err = "f";
				echo "NIM Harus Angka";
			}else{
				$nim_err = "t";
			}

			if (isset($hobi)) {
			$tampung = "";
		for ($i=0; $i < count($hobi) ; $i++) { 
			$tampung .= "$hobi[$i] ";
			}
		}
		if(empty($tampung)){
			echo "Nama masih kosong.<br>";
			$err = "f";
			}else{
				$err = "t";
			}
		if(empty($alamat)){
			echo "Nama masih kosong.<br>";
			$err = "f";
			}else{
				$err = "t";
			}	
		if ($fakultas == 'null') {
			echo "<br>";
			$err = "f";
			echo "Isilah Fakultas";
		}else{
			$err = "t";
		}
		if ($kelas == 'null') {
			echo "<br>";
			$err = "f";
			echo "Isilah Fakultas";
		}else{
			$err = "t";
		}
		if ($jk == 'null') {
			echo "<br>";
			$err = "f";
			echo "Isilah Fakultas";
		}else{
			$err = "t";
		}
echo "$tampung";
		if ($err == "t" && $nim_err == "t") {
			session_start();
			$user = $_SESSION['username'];

	$sql = "UPDATE user SET nama='$nama',nim='$nim',kelas='$kelas',jk='$jk',hobi='$tampung',fakultas='$fakultas',alamat='$alamat' WHERE username='$user'";

if ($db->query($sql) === TRUE) {
	echo "<br>";
    echo "New record created successfully";
    header("Location: print.php");
} else {
	echo "<br>";
    echo "Error: ".$sql."<br>" . $db->error;
}
}else{
  echo "<script>
alert('Login Gagal');
  </script>";
	echo "<br>";
	echo "GAGAL";
}
$db->close();
}
?>		
		