<?php
    /*
    mysql> desc kategori_bimbingan;
    +-------+-------------+------+-----+---------+----------------+
    | Field | Type        | Null | Key | Default | Extra          |
    +-------+-------------+------+-----+---------+----------------+
    | id    | int(11)     | NO   | PRI | NULL    | auto_increment |
    | nama  | varchar(45) | YES  |     | NULL    |                |
    +-------+-------------+------+-----+---------+----------------+


    */
    require_once "DAOBimbingan.php";
    class kategori_bimbingan extends DAOBimbingan
    {
        public function __construct()
        {
            parent::__construct("kategori_bimbingan");
        }

        public function simpan($data){
            $sql = "INSERT INTO ".$this->tableName.
            " (id,nama) ".
            " VALUES (?,?)";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            return $ps->rowCount();
        }

        public function ubah($data){
            $sql = "UPDATE ".$this->tableName.
            " SET id=?,nama=?".
            " WHERE id=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            return $ps->rowCount();
        }
        //buat fungsi untuk menampilkan statistik
    }
?>
