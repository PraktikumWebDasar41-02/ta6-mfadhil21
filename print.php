<?php
include('konek.php');
session_start();
$usr = $_SESSION['username'];

$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$usr'");
$row = mysqli_fetch_array($result);

echo "Nama : ";
printf("%s",$row['nama']);
echo "<br>";
echo "NIM : ";
printf("%s",$row['nim']);
echo "<br>";
echo "Kelas : ";
printf("%s",$row['kelas']);
echo "<br>";
echo "Jenis Kelamin : ";
printf("%s",$row['jk']);
echo "<br>";
echo "hobi : ";
printf("%s",$row['hobi']);
echo "<br>";
echo "Fakultas : ";
printf("%s",$row['fakultas']);
echo "<br>";
echo "alamat : ";
printf("%s",$row['alamat']);

?>
<br>
<a href="login.php">LOG OUT</a><br/>
<a href="regist.php">EDIT</a><br/>
<a href="posting.php">POSTING</a><br/>
<a href="semuapost.php">BROWSE POSTINGAN</a><br/>
<a href="allpost.php">POSTINGAN ANDA</a>
