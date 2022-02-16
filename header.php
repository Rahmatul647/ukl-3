<div class="container-fluid p-5 bg-primary text-white text-center">
<h1>Selamat datang di Aplikasi Pembayaran SPP</h1>
            <hr />
</div>
<!-- Logika kita, Jika Level Admin Maka Fitur apa saja yang dapat diakses -->
<?php
$panggil = mysqli_query($db, "SELECT * FROM petugas WHERE username='$username'");
$hasil = mysqli_fetch_assoc($panggil);
    if($hasil['level'] == "Administrator"){ ?>
    <a href="siswa.php">Data Siswa</a> | 
    <a href="petugas.php">Data Petugas</a> | 
    <a href="kelas.php">Data Kelas</a> | 
    <a href="spp.php">Data SPP</a> | 
    <a href="transaksi.php">Transaksi</a> | 
    <a href="history.php">History Pembayaran</a> | 
    <a href="logout.php">LogOut</a>
<?php
    }else{ ?>
    <a href="transaksi.php">Transaksi</a> | 
    <a href="history.php">History Pembayaran</a> | 
    <a href="logout.php">LogOut</a>
<?php } ?>
            <hr />