<?php
    include_once 'top.php';
    //panggil file yang melakukan operasi db
    require_once 'db/class_prodi.php';
    //buat variabel untuk memanggil class
    $obj_kegiatan = new prodi();
    //buat variabel utk menyimpan id
    $_idedit = $_GET['id'];
    //buat pengecekan apakah datanya ada atau tidak
    if(!empty($_idedit)){
        $data = $obj_kegiatan->findByID($_idedit);
    }else{
        $data = [];
    }
?>

<script type="text/javascript" src="js/form_validasi_prodi.js"></script>
<form class="form-horizontal" method="POST" name="form_prodi" action="proses_prodi.php" >
<fieldset>
  <div id="book" class="page-section">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="section-heading">
  <!-- Form Name -->
  <legend align="center"><h1>Form Prodi</h1></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kode">Kode</label>
  <div class="col-md-4">
  <input id="kode" name="kode" type="text" placeholder="Masukkan Kode" class="form-control input-md" value="<?php echo $data['kode']?>">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Nama</label>
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Masukkan nama" class="form-control input-md" value="<?php echo $data['nama']?>" >

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
