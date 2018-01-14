<?php
    include_once 'top.php';
    require_once 'db/class_kategoribimbingan.php';
    $obj = new kategori_bimbingan();
    $rows = $obj->getAll();
    ?>
    <!-- Buat code javascript untuk memanggil table dan menggunakan fungsi datatable-->
    <h2 align="center">Kategori Bimbingan</h2>
    <div class="line-dec"></div>
    <script type="text/javascript">
        $(document).ready(function(){
          $('#katbim').DataTable();
        });
    </script>

    <table id="katbim" class="table table-striped table-bordered"><!-- Beri id pada tag table untuk dideteksi javascript-->
        <thead>
        <tr class="danger">
            <th>NO</th><th>Kode</th><th>Nama</th><th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        foreach($rows as $row){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td class="success">'.$row['id'].'</td>';
            echo '<td>'.$row['nama'].'</td>';
            echo '<td class="success"><a href="view_katBimbingan.php?id='.$row['id']. '">View</a> |';
            echo '<a href="form_katbimbingan.php?id='.$row['id']. '">Update</a></td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
        </tbody>
    </table>
    <div class="panel-header" class="col-md-3" align="left">
        <a class="btn icon-btn btn-primary" href="form_katbimbingan.php">
        <span class="glyphicon btn-glyphicon glyphicon-plus img-
        circle text-warning"></span>
        Tambah Kategori bimbingan
        </a>
      <!--  <a class="btn icon-btn btn-primary" href="formmahasiswa.php">
        <span class="glyphicon btn-glyphicon  img-circle text-warning"></span>Persentase</a> -->
</div>
