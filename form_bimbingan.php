<?php
    include_once 'top.php';
    //panggil file yang melakukan operasi db
    require_once 'db/class_bimbingan.php';
    //buat variabel untuk memanggil class
    $obj_kegiatan = new bimbingan_akademik();
    //buat variabel utk menyimpan id
    $_idedit = $_GET['id'];
    //buat pengecekan apakah datanya ada atau tidak
    if(!empty($_idedit)){
        $data = $obj_kegiatan->findByID($_idedit);
    }else{
        $data = [];
    }
    /*
    +----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+
| id | tanggal    | bimbingan_presensi                 | bimbingan_keuangan | bimbingan_akademik          | kategori_id | semester | nim       |
+----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+
|  1 | 2017-12-20 | Kehadiran PBO kurang               | ok                 | ok                          |           3 |    20171 | 110116059 |

    */
?>

<script type="text/javascript" src="js/form_validasi_bimbingan.js"></script>
<form class="form-horizontal" method="POST" name="form_bimbingan" action="proses_bimbingan.php" >
<fieldset>
  <div id="book" class="page-section">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="section-heading">
<!-- Form Name -->
<legend align="center"><h1>Form Bimbingan</h1></legend>

<!-- Text input-->
<!--div class="form-group">
  <label class="col-md-4 control-label" for="id">ID</label>
  <div class="col-md-4">
  <input id="id" name="id" type="number" placeholder="Masukkan ID" class="form-control input-md" value="<?php echo $data['id']?>">

  </div>
</div>-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Tanggal (MM/DD/YYYY)</label>
  <div class="col-md-4">
  <input id="tanggal" name="tanggal" type="date" placeholder="Masukkan tanggal" class="form-control input-md" value="<?php echo $data['tanggal']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Bimbingan Presensi</label>
  <div class="col-md-4">
  <input id="bimbingan_presensi" name="bimbingan_presensi" type="text" placeholder="Masukkan keterangan Bimbingan Presensi" class="form-control input-md" value="<?php echo $data['bimbingan_presensi']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Bimbingan Keuangan</label>
  <div class="col-md-4">
  <input id="bimbingan_keuangan" name="bimbingan_keuangan" type="text" placeholder="Masukkan keterangan bimbingan Keuangan" class="form-control input-md" value="<?php echo $data['bimbingan_keuangan']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Bimbingan Akademik</label>
  <div class="col-md-4">
  <input id="bimbingan_akademik" name="bimbingan_akademik" type="text" placeholder="Masukkan keterangan Bimbingan Akademik" class="form-control input-md" value="<?php echo $data['bimbingan_akademik']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Kategori ID</label>
  <div class="col-md-4">
  <input id="kategori_id" name="kategori_id" type="number" placeholder="Masukkan ID kategori" class="form-control input-md" value="<?php echo $data['kategori_id']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Semester</label>
  <div class="col-md-4">
  <input id="semester" name="semester" type="number" placeholder="Masukkan semester" class="form-control input-md" value="<?php echo $data['semester']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">NIM</label>
  <div class="col-md-4">
  <input id="nim" name="nim" type="number" placeholder="Masukkan nim" class="form-control input-md" value="<?php echo $data['nim']?>" >
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proses"></label>
  <div class="col-md-8">
  <?php
    if(empty($_idedit)){
    ?>
      <input type="submit" id="form-submit" class="btn" name="proses" class="btn" value="Simpan"/>
    <?php
    }else{
      ?>
      <input type="hidden" name="idedit" value="<?php echo $_idedit?>"/>
      <input type="submit" name="proses" class="btn btn-primary" value="Update"/>
      <input type="submit" name="proses" class="btn btn-danger" value="Hapus"/>
    <?php
    }?>
  </div>
</div>
</fieldset>
</form>

<?php
    include_once 'bottom.php';
?>
