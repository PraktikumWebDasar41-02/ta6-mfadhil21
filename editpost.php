<?php 
include 'konek.php';
$id = $_GET['id'];

$query = mysqli_query($db,"SELECT * FROM `datastory` WHERE id_file='$id'");
$act = mysqli_fetch_array($query);

 ?>

 <form method="post" enctype="multipart/form-data">
 	<table align="center" border="1">
 		<tr>
 			<td>EDIT POSTINGAN</td>
 		</tr>
 		<tr>
 			<td>JUDUL : </td>
 			<td><textarea name="judul" size=30><?php echo $act['judul']; ?></textarea></td>
 		</tr>
 		<tr>
 			<td>ISI : </td>
 			<td><textarea name="isi" rows="20" cols="80"><?php echo $act['isi']; ?></textarea></td>
 		</tr>

 		<tr>
 			<td>GAMBAR:</td>
 			<td align="center"><input type="file" name="file"></td>
 		</tr>
 		<tr>
 			<td colspan="2" align="center"><input type="submit" name="simpan" value="submit"><button><a href="allpost.php" style="text-decoration: none;">Kembali</a></button></td>

 		</tr>
 	</table>
 </form>

 <?php 
if (isset($_POST['simpan'])) {
	$judul = $_POST['judul'];
	if (str_word_count($_POST['isi'])<=30) {
		$story = $_POST['isi'];
	}else{echo "ISI POSTINGAN MAKSIMUM 30 KATA";}

	if ($file = $_FILES['file']['name']!=" ") {
		$file = $_FILES['file']['name'];
	}

	$que = mysqli_query($db,"UPDATE posting SET judul='$judul', isi='$isi',id_gambar='$file' WHERE id_file='$id'");
	if (isset($que)) {
		echo "berhasil";
	}else{echo "Gagal";}
}
  ?>