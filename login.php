<html>
  <head>
    <title></title>
  </head>
  <body>
    <form action="login.php" method="post">
      <table>
        <tr>
          <td><input type="text" name="username" placeholder="Username"></td>
        </tr>
        <tr>
          <td><input type="password" name="password" placeholder="Password"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="MASUK"></td>
        </tr>
        Registrasi disini---><a href="registrasi.php">Daftar</a>
      </table>
    </form>
  </body>
</html>

<?php
session_start();
include('konek.php');
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  if(empty($username)){
      echo "Username masih kosong<br>";
      $err = "f";
      }else{
        $err = "t";
      }
  if(empty($password)){
      echo "Password masih kosong.<br>";
      $err = "f";
      }else{
        $err = "t";
      }

if ($err == "t") {

$data = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
  $_SESSION['username'] = $username;
  header("Location:regist.php");
}
else {
  echo "<script>
alert('Login Gagal');
  </script>";
}
}else{echo "<br>GAGAL";}
}

 ?>