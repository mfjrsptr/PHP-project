<?php
/*
    mysql> desc bimbingan_akademik;
    +--------------------+-------------+------+-----+---------+----------------+
    | Field              | Type        | Null | Key | Default | Extra          |
    +--------------------+-------------+------+-----+---------+----------------+
    | id                 | int(11)     | NO   | PRI | NULL    | auto_increment |
    | tanggal            | date        | YES  |     | NULL    |                |
    | bimbingan_presensi | text        | YES  |     | NULL    |                |
    | bimbingan_keuangan | text        | YES  |     | NULL    |                |
    | bimbingan_akademik | text        | YES  |     | NULL    |                |
    | kategori_id        | int(11)     | NO   | MUL | NULL    |                |
    | semester           | int(11)     | YES  |     | NULL    |                |
    | nim                | varchar(10) | NO   | MUL | NULL    |                |
    +--------------------+-------------+------+-----+---------+----------------+
*/
    require_once "DAOBAkademik.php";
    class bimbingan_akademik extends DAOBAkademik
    {
        public function __construct()
        {
            parent::__construct("bimbingan_akademik");
        }

        public function simpan($data){
            $sql = "INSERT INTO ".$this->tableName.
            " (id,tanggal, bimbingan_presensi, bimbingan_keuangan, bimbingan_akademik, kategori_id, semester, nim) ".
            " VALUES (?,?,?,?,?,?,?,?)";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            return $ps->rowCount();
        }

        public function ubah($data){
            $sql = "UPDATE ".$this->tableName.
            " SET id=?,tanggal=?, bimbingan_presensi=?, bimbingan_keuangan=?, bimbingan_akademik=?, kategori_id=?, semester=?, nim=?".
            " WHERE id=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            return $ps->rowCount();
        }
        //buat fungsi untuk menampilkan statistik
        public function getStatistik(){
          $sql = "select a.nama, count(b.id) as jumlah from kategori a left join kegiatan b on a.id=b.kategori_id group by a.nama";
          $ps = $this->koneksi->prepare($sql);
          $ps->execute();
          return $ps->fetchAll();
        }
    }
?>
