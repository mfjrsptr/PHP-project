<?php
/*
+----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+
| id | tanggal    | bimbingan_presensi                 | bimbingan_keuangan | bimbingan_akademik          | kategori_id | semester | nim       |
+----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+

*/
    include_once 'top.php';
    require_once 'db/class_bimbingan.php';
    $obj = new bimbingan_akademik();
    $rows = $obj->getAll();
    ?>

    <!-- Buat code javascript untuk memanggil table dan menggunakan fungsi datatable-->
    <h2 align="center">Daftar bimbingan Akademik</h2>
    <div class="line-dec"></div>
    <script type="text/javascript">
        $(document).ready(function(){
          $('#bimbingan').DataTable();
        });
    </script>

    <table id="bimbingan" class="table table-striped table-bordered"><!-- Beri id pada tag table untuk dideteksi javascript-->
        <thead>
        <tr class="danger">
            <th>NO</th><th>ID</th><th>Tanggal</th><th>Bimbingan Presensi</th><th>Bimbingan Keuangan</th>
            <th>Bimbingan Akademik</th><th>Kategori ID</th><th>Semester</th><th>NIM</th><th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        foreach($rows as $row){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td class="success">'.$row['id'].'</td>';
            echo '<td>'.$row['tanggal'].'</td>';
            echo '<td class="success">'.$row['bimbingan_presensi'].'</td>';
            echo '<td>'.$row['bimbingan_keuangan'].'</td>';
            echo '<td class="success">'.$row['bimbingan_akademik'].'</td>';
            echo '<td>'.$row['kategori_id'].'</td>';
            echo '<td class="success">'.$row['semester'].'</td>';
            echo '<td >'.$row['nim'].'</td>';
            echo '<td class="success"><a href="view_bimbingan.php?id='.$row['id']. '">View</a> |';
            echo '<a href="form_bimbingan.php?id='.$row['id']. '">Update</a></td>';
            echo '</tr>';
           $nomor++;
        }
        ?>
        </tbody>
    </table>
    <div class="panel-header" class="col-md-3">
        <a class="btn icon-btn btn-primary" href="form_bimbingan.php">
        <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-warning"></span>Tambah Bimbingan Akademik</a>
      <!--  <a class="btn icon-btn btn-primary" href="formmahasiswa.php">
        <span class="glyphicon btn-glyphicon  img-circle text-warning"></span>Persentase</a> -->
</div>
