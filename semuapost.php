<?php 
include 'konek.php';
$que = mysqli_query($db,"SELECT * FROM posting");

 ?>

 <TABLE align="center">
 	<tr>
 		<td colspan="3" align="center">BROWSE POSTINGAN</td>
 	</tr>

 	<tr align="center">
 		<td>USERNAME</td>
 		<td>TANGGAL</td>
 		<td>JUDUL</td>
 		<td>ISI</td>
 		<td>GAMBAR</td>
 	</tr>

 	<?php 
 			while ($arr = mysqli_fetch_array($que)) {
 				$code = $arr['username'];
 				$query = mysqli_query($db,"SELECT * FROM user WHERE username='$code'");
 				$array = mysqli_fetch_array($query);
 				echo "<tr>";
 				echo "<td>".$arr['username']."<br>".$array['nama']."</td>";
 				echo "<td>".date('j, F Y',strtotime($arr['tanggal']))."</td>";
 				echo "<td>".$arr['judul']."</td>";
 				echo "<td>".$arr['isi']."</td>";
 				echo "<td><img src='gambar/".$arr['id_gambar']."' height='140'></td>";
 				
 				echo "<tr>";
 			}
 				 			
 		 ?>

 		 <tr>
 		 	<td colspan="3" align="center"><button><a href="print.php" style="text-decoration: none">KEMBALI</a></button></td>
 		 </tr>
 </TABLE>