<?php
session_start();
require_once("koneksi.php");
if(isset($_SESSION['nisn'])){
    header("location: index_siswa.php");
}
?>
<html>
    <head>
        <title>LOG IN</title>
    </head>
<body>
<center>
    <h1>Silahkan Login</h1>
            <hr />
<form action="" method="POST">
    <table>
        <tr>
<?php
// Kita akan membuat proses login nya disini
if(isset($_POST['login'])){
    $nisn = $_POST['nisn'];
    $cari = mysqli_query($db, "SELECT * FROM siswa WHERE nisn='$nisn'");
    $hasil = mysqli_fetch_assoc($cari);
        // Jika data yang dicari kosong
        if(mysqli_num_rows($cari) == 0){
            echo "<td colspan='2'><center>NISN belum terdaftar!</center></td>";
        }else{
        // Jika nisn siswa sesuai dengan database maka akan redirect ke halaman utama dan akan dibuatkan sesi
            $_SESSION['nisn'] = $_POST['nisn'];
            header("location: index_siswa.php");
        }
}
?>
        <tr>
            <td>NISN :</td>
            <td><input type="text" name="nisn"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="LOG IN" name="login"></td>
        </tr>
        <tr>
            <td colspan="2"><center>Apakah anda seorang petugas? login 
                                    <a href="login.php">disini</a>
                            </center>
            </td>
        </tr>
    </table>
</form>
</center>
</body>
</html>