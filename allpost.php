<?php 
include 'konek.php';
session_start();
$usr = $_SESSION['username'];
$query = mysqli_query($db,"SELECT * FROM `posting` WHERE username='$usr'");

 ?>
<form method="post">
 <table border="1">
 	<tr>
 		<td>POSTINGAN ANDA</td>
 	</tr>
 	<tr align="center">
 		<td>JUDUL</td>
 		<td>ISI</td>
 		<td>GAMBAR</td>
 		<td>AKSI</td>
 	</tr>

 	
 		<?php 
 			while ($arr = mysqli_fetch_array($query)) {
 				$id = $arr['id_file'];
 				echo "<tr>";
 				echo "<td>".$arr['judul']."</td>";
 				echo "<td>".$arr['isi']."</td>";
 				echo "<td><img src='gambar/".$arr['id_gambar']."' height='140'></td>";
 				echo "<td>
 						<button><a href=editpost.php?id=".$id." style='text-decoration: none'>EDIT</a>
 						</button>/
 						<button><a href=hapus.php?id=".$id." style='text-decoration: none'>HAPUS</a>
 						</button>
 					 </td>";
 				echo "<tr>";
 			}
 				 			
 		 ?>

 		 <tr>
 		 	<td><button><a href="print.php" style="text-decoration: none">KEMBALI</a></button></td>
 		 </tr>
 	
 </table>
 </form>

 <?php 
  ?>