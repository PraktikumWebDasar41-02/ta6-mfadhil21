<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			Judul Artikel<br>
			<input type="text" name="judul" size="30"><br>
			Isi Artikel<br>
			<textarea name="isi" cols="80" rows="20"></textarea><br>
			<input type="file" name="file">
			<input type="submit" name="submit" value="Posting">
			<button><a href="print.php" style="text-decoration: none">Kembali	</a></button>
		</form>
	</body>
</html>

<?php 
include 'konek.php';
session_start();
if (isset($_POST['submit'])) {
	if ($_FILES['file']['name'] != "") {
		$username = $_SESSION['username'];
		$gambar = $_FILES['file']['name'];
		$judul = $_POST['judul'];
		$tgl = date('Y-m-d');
		if (str_word_count($_POST['isi'])<=30) {
			$isi = $_POST['isi'];
		}else{echo "ISI POSTINGAN MAKSIMUM 30 KATA";}
		
		if (isset($judul)&&isset($isi)&&isset($gambar)) {
			/*$query = mysqli_query($db,"INSERT INTO posting(username, id_file, judul, isi, tanggal, id_gambar) VALUES ('$username','','$judul', '$isi', $tgl, '$gambar')");*/
			$query = mysqli_query($db,"INSERT INTO posting(username, id_file, judul, isi, tanggal, id_gambar) VALUES ('$username','','$judul', '$isi', $tgl, '$gambar')");
		if (!$query) {
			die("GAGAL");
		}else{echo "BERHASIL";}	
		}
		
	}
}
 ?>

