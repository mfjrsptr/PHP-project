<?php
/*
" (nim,nama,tgl_lahir,jk,prodi_id,thnmasuk,rombel_id) ".
*/
    include_once 'top.php';
    require_once 'db/classmahasiswa.php';
    $obj = new mahasiswa();
    $rows = $obj->getAll();
    ?>

    <!-- Buat code javascript untuk memanggil table dan menggunakan fungsi datatable-->
    <h2 align="center">Daftar Mahasiswa</h2>
    <div class="line-dec"></div>
    <script type="text/javascript">
        $(document).ready(function(){
          $('#mahasiswa').DataTable();
        });
    </script>

    <table id="mahasiswa" class="table table-striped table-bordered"><!-- Beri id pada tag table untuk dideteksi javascript-->
        <thead>
        <tr class="danger">
            <th>NO</th><th>NIM</th><th>Nama</th><th>Tanggal Lahir</th><th>Jenis Kelamin</th><th>Prodi ID</th><th>Tahun Masuk</th><th>Rombel ID</th><th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        foreach($rows as $row){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td class="success">'.$row['nim'].'</td>';
            echo '<td>'.$row['nama'].'</td>';
            echo '<td class="success">'.$row['tgl_lahir'].'</td>';
            echo '<td>'.$row['jk'].'</td>';
            echo '<td class="success">'.$row['prodi_id'].'</td>';
            echo '<td>'.$row['thnmasuk'].'</td>';
            echo '<td class="success">'.$row['rombel_id'].'</td>';
            echo '<td><a href="view_mahasiswa.php?id='.$row['nim']. '">View</a> |';
            echo '<a href="formmahasiswa.php?id='.$row['nim']. '">Update</a></td>';
            echo '</tr>';
           $nomor++;
        }
        ?>
        </tbody>
    </table>
    <div class="panel-header" class="col-md-3">
        <a class="btn icon-btn btn-primary" href="formmahasiswa.php">
        <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-warning"></span>Tambah Mahasiswa</a>

</div>
