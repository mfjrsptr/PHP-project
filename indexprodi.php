<?php
    include_once 'top.php';
    require_once 'db/class_prodi.php';
    $obj = new prodi();
    $rows = $obj->getAll();
    ?>
    <!-- Buat code javascript untuk memanggil table dan menggunakan fungsi datatable-->
    <h2 align="center" id="portfolio">Daftar Prodi</h2>
    <div class="line-dec"></div>
    <script type="text/javascript">
        $(document).ready(function(){
          $('#prodi').DataTable();
        });
    </script>

    <table id="prodi" class="table table-striped table-bordered"><!-- Beri id pada tag table untuk dideteksi javascript-->
        <thead>
        <tr class="danger">
            <th>No</th><th>Kode</th><th>Nama</th><th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        foreach($rows as $row){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td class="success">'.$row['kode'].'</td>';
            echo '<td>'.$row['nama'].'</td>';
            echo '<td class="success"><a href="view_prodi.php?id='.$row['id']. '">View</a> |';
            echo '<a href="form_prodi.php?id='.$row['id']. '">Update</a></td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
        </tbody>
    </table>
    <div class="panel-header" class="col-md-3" align="left">
        <a class="btn icon-btn btn-primary" href="form_prodi.php">
        <span class="glyphicon btn-glyphicon glyphicon-plus img-
        circle text-warning"></span>
        Tambah Prodi
        </a>
        <a class="btn icon-btn btn-primary" href="grafik_prodi.php">
        <span class="glyphicon btn-glyphicon  img-circle text-warning"></span>Grafik Mahasiswa</a>
</div>
