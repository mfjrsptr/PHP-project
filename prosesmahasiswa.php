<?php
    require_once 'db/classmahasiswa.php';
/*
" (nim,nama,tgl_lahir,jk,prodi_id,thnmasuk,rombel_id) ".
*/
    $obj = new mahasiswa();

    $_nim = $_POST['nim'];
    $_nama = $_POST['nama'];
    $_tgl_lahir = $_POST['tgl_lahir'];
    $_jk = $_POST['jk'];
    $_prodi_id = $_POST['prodi_id'];
    $_thnmasuk = $_POST['thnmasuk'];
    $_rombel_id = $_POST['rombel_id'];
    $_proses = $_POST['proses'];

    $ar_data[] = $_nim;
    $ar_data[] = $_nama;
    $ar_data[] = $_tgl_lahir;
    $ar_data[] = $_jk;
    $ar_data[] = $_prodi_id;
    $ar_data[] = $_thnmasuk;
    $ar_data[] = $_rombel_id;

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
