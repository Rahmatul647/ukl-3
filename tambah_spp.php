<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah SPP</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("header.php"); ?>
    <!-- Konten -->
    <h3>Tambah SPP</h3>
    <form action="" method="POST">
        <table cellpadding="5">
            <tr>
                <td>Tahun :</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr>
                <td>Nominal :</td>
                <td><input type="text" name="nominal"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
<hr />
            <!-- Panggil footer -->
    <?php require("footer.php"); ?>
</body>
</html>
<?php
// Proses Simpan
if(isset($_POST['simpan'])){
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $simpan = mysqli_query($db, "INSERT INTO spp VALUES(NULL, '$tahun', '$nominal')");
        if($simpan){
            header("location: spp.php");
        }else{
            echo "<script>alert('Data sudah ada');</script>";
        }
}
?>