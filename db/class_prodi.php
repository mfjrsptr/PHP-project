<?php
    /*
    mysql> desc prodi;
+-------+-------------+------+-----+---------+----------------+
| Field | Type        | Null | Key | Default | Extra          |
+-------+-------------+------+-----+---------+----------------+
| id    | int(11)     | NO   | PRI | NULL    | auto_increment |
| kode  | varchar(3)  | YES  |     | NULL    |                |
| nama  | varchar(45) | YES  |     | NULL    |                |
+-------+-------------+------+-----+---------+----------------+


    */
    require_once "DAO.php";
    class prodi extends DAO
    {
        public function __construct()
        {
            parent::__construct("prodi");
        }

        public function simpan($data){
            $sql = "INSERT INTO ".$this->tableName.
            " (id,kode,nama) ".
            " VALUES (default,?,?)";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            return $ps->rowCount();
        }

        public function ubah($data){
            $sql = "UPDATE ".$this->tableName.
            " SET kode=?,nama=?".
            " WHERE id=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            return $ps->rowCount();
        }
        //buat fungsi untuk menampilkan statistik
        public function getStatistik(){
          $sql = "select prodi.nama, count(mahasiswa.nim) as jumlah from prodi left join mahasiswa on prodi.id = mahasiswa.prodi_id group by prodi.nama";
          $ps = $this->koneksi->prepare($sql);
          $ps->execute();
          return $ps->fetchAll();
        }
        }
?>
