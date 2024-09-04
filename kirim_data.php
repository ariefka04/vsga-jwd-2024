<?php
include ("koneksi.php");

//Cek apakah ada pengiriman data dari Formulir
if (isset($_POST['simpan'])){
    //Ambil data dari formulir
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $durasi = $_POST['durasi'];
    $peserta = $_POST['peserta'];
    $diskon = $_POST['diskon'];
    $paket = ($_POST['pilihan']);
    $harga_paket = $_POST['harga_paket'];
    $total_biaya = $_POST['total_biaya'];

    $sql = "INSERT INTO pesanan (nama_pemesan, no_telp, durasi, jmlh_peserta, diskon, paket, harga, jumlah) VALUE ('$nama', '$nohp', '$durasi', '$peserta', '$diskon', '$paket', '$harga_paket', '$total_biaya')";

    $query = mysqli_query($connect, $sql);

        if($query) {
            echo "Data Berhasil disimpan Wir";
        }
        else {
            echo "Data Gagal Disimpan Wir";
        }

    }
    else {
        die ("Akses Dilarang Wir...");
    }
?>
