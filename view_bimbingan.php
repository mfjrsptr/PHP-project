<?php
    include_once 'top.php';
    require_once 'db/class_bimbingan.php';
    //panggil file untuk operasi db
    //buat variabel utk menyimpan id
    //buat variabel untuk mengambil id
    $objKegiatan = new bimbingan_akademik();
    $_id = $_GET['id'];
    $data = $objKegiatan->findByID($_id);
    /*
    +----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+
    | id | tanggal    | bimbingan_presensi                 | bimbingan_keuangan | bimbingan_akademik          | kategori_id | semester | nim       |
    +----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+

    */
?>
<!--Buat tampilan dengan tabel-->
<div id="book" class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
<!--<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">-->
                <h2 align="center">Bimbingan Akademik</h2>
            </div>
            <div class="panel-body">
                <table class="table">
                <tr>
                <td>ID</td><td>:</td><td><?php echo
                $data['id']?></td>
                </tr>

                <tr>
                <td>Tanggal</td><td>:</td><td><?php echo
                $data['tanggal']?></td>
                </tr>

                <tr>
                <td>Bimbingan Presensi</td><td>:</td><td><?php echo
                $data['bimbingan_presensi']?></td>
                </tr>

                <tr>
                <td>Bimbingan Keuangan</td><td>:</td><td><?php echo
                $data['bimbingan_keuangan']?></td>
                </tr>

                <tr>
                <td>Bimbingan Akademik</td><td>:</td><td><?php echo
                $data['bimbingan_akademik']?></td>
                </tr>

                <tr>
                <td>Kategori ID</td><td>:</td><td><?php echo
                $data['kategori_id']?></td>
                </tr>

                <tr>
                <td>Semester</td><td>:</td><td><?php echo
                $data['semester']?></td>
                </tr>

                <tr>
                <td>NIM</td><td>:</td><td><?php echo
                $data['nim']?></td>
                </tr>

                <tr
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php
    include_once 'bottom.php';
?>
