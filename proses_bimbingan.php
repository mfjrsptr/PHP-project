<?php
    require_once 'db/class_bimbingan.php';
/*
+----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+
| id | tanggal    | bimbingan_presensi                 | bimbingan_keuangan | bimbingan_akademik          | kategori_id | semester | nim       |
+----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+

*/
    $obj = new bimbingan_akademik();

    //$_id = $_POST['id'];
    $_tanggal = $_POST['tanggal'];
    $_bimbingan_presensi = $_POST['bimbingan_presensi'];
    $_bimbingan_keuangan = $_POST['bimbingan_keuangan'];
    $_bimbingan_akademik = $_POST['bimbingan_akademik'];
    $_kategori_id = $_POST['kategori_id'];
    $_semester = $_POST['semester'];
    $_nim = $_POST['nim'];
    $_proses = $_POST['proses'];

    //$ar_data[] = $_id;
    $ar_data[] = $_tanggal;
    $ar_data[] = $_bimbingan_presensi;
    $ar_data[] = $_bimbingan_keuangan;
    $ar_data[] = $_bimbingan_akademik;
    $ar_data[] = $_kategori_id;
    $ar_data[] = $_semester;
    $ar_data[] = $_nim;

    //buat operasi jika memilih button simpan, update atau hapus
    $row = 0;
    if($_proses == "Simpan"){
        $row = $obj->simpan($ar_data);
    }elseif($_proses == "Update"){
        $_idedit = $_POST['idedit'];
        $ar_data[] = $_idedit;
        $row = $obj->ubah($ar_data);
    }elseif($_proses == "Hapus"){
        unset($ar_data);
        $_idedit = $_POST['idedit'];
        $row = $obj->hapus($_idedit);
    }
    //handeler jika gagal atau sukses
    if($row==0){
        echo "Gagal Proses";
    }else{
        //echo "Proses Sukses";
        //langsung direct ke daftar_kegiatan.php
        header('Location:bimbim.php');
    }
