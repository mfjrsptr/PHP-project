<?php
    require_once 'db/class_prodi.php';

    $obj = new prodi();

    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_proses = $_POST['proses'];

    $ar_data[] = $_kode;
    $ar_data[] = $_nama;
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
        header('Location:prodmah.php');
    }
?>
