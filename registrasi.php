<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="username1" placeholder="Username">
      <br>
      <input type="password" name="password1" placeholder="Password">
      <br>
      <input type="password" name="password2" placeholder="Konfirmasi password" >
      <br>
      <input type="submit" name="submit" value="DAFTAR">
      <br><br>
      Sudah Memiliki Akun?
      <a href="login.php">Masuk</a>

    </form>
  </body>
</html>

<?php
include('konek.php');
if (isset($_POST['submit'])) {
  $username1 = $_POST['username1'];
  $password1 = md5($_POST['password1']);
  $password2 = md5($_POST['password2']);
  if(empty($password1)){
      echo "Password masih kosong.<br>";
      $err = "f";
      }else{
        $err = "t";
      }
  if(empty($password2)){
      echo "Password masih kosong.<br>";
      $err = "f";
      }else{
        $err = "t";
      }
  if(empty($username1)){
      echo "Username masih kosong.<br>";
      $err = "f";
      }else{
        $err = "t";
      }
  
  echo "<br>";
  if ($err == 't') { 
  if ($password1==$password2) {
    $sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username1', '$password1');";

    if ($db->query($sql) === TRUE) {
        echo "<br>REGISTRASI BERHASIL";
        header("location:login.php");
    } else {
        echo "<br>Error Registration: " . $db->error;
    }
  }else {
    echo "<br>Password Harus Sama";
  }
   }
}
 ?>