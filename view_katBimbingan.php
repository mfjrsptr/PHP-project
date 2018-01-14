<?php
    include_once 'top.php';
    require_once 'db/class_kategoribimbingan.php';
    //panggil file untuk operasi db
    //buat variabel utk menyimpan id
    //buat variabel untuk mengambil id
    $objKegiatan = new kategori_bimbingan();
    $_id = $_GET['id'];
    $data = $objKegiatan->findByID($_id);
?>
<!--Buat tampilan dengan tabel-->
<div id="book" class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                <h2 align="center">Kategori Bimbingan</h2>
            </div>
            <div class="panel-body">
                <table class="table">
                <tr>
                <td>Kode</td><td>:</td><td><?php echo
                $data['id']?></td>
                </tr>
                <tr>
                <td>Nama</td><td>:</td><td><?php echo
                $data['nama']?></td>
                </tr>
                <tr
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
