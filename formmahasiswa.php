<?php
    include_once 'top.php';
    //panggil file yang melakukan operasi db
    require_once 'db/classmahasiswa.php';
    //buat variabel untuk memanggil class
    $obj_kegiatan = new mahasiswa();
    //buat variabel utk menyimpan id
    $_idedit = $_GET['id'];
    //buat pengecekan apakah datanya ada atau tidak
    if(!empty($_idedit)){
        $data = $obj_kegiatan->findByID($_idedit);
    }else{
        $data = [];
    }
?>

<script type="text/javascript" src="js/form_validasi_mahasiswa.js"></script>
<form class="form-horizontal" method="POST" name="formmahasiswa" action="prosesmahasiswa.php" >
<fieldset>
  <div id="book" class="page-section">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="section-heading">
  <!-- Form Name -->
  <legend align="center"><h1>Form Mahasiswa</h1></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kode">NIM</label>
  <div class="col-md-4">
  <input id="nim" name="nim" type="number" placeholder="Masukkan nim" class="form-control input-md" value="<?php echo $data['nim']?>">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Nama</label>
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Masukkan nama" class="form-control input-md" value="<?php echo $data['nama']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Tanggal Lahir</label>
  <div class="col-md-4">
  <input id="tgl_lahir" name="tgl_lahir" type="date" placeholder="Masukkan tanggal lahir" class="form-control input-md" value="<?php echo $data['tgl_lahir']?>" >
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Jenis Jelamin</label>
  <div class="col-md-4">
  <input id="jk" name="jk" type="text" placeholder="Masukkan jenis kelamin" class="form-control input-md" value= >
  </div>
</div>-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">Jenis kelamin</label>
  <div class="col-md-4">
    <select id="jk" name="jk" class="form-control">
      <option value="0">Pilih Jenis kelamin</option>
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Prodi ID</label>
  <div class="col-md-4">
  <input id="prodi_id" name="prodi_id" type="number" placeholder="Masukkan prodi" class="form-control input-md" value="<?php echo $data['prodi_id']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Tahun Masuk</label>
  <div class="col-md-4">
  <input id="thnmasuk" name="thnmasuk" type="number" placeholder="Masukkan tahun masuk" class="form-control input-md" value="<?php echo $data['thnmasuk']?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Rombel ID</label>
  <div class="col-md-4">
  <input id="rombel_id" name="rombel_id" type="number" placeholder="Masukkan rombel id" class="form-control input-md" value="<?php echo $data['rombel_id']?>" >
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
