<?php
require_once "dbkoneksi.php";
class DAOMahasiswa // Data Access Object
{
    protected $tableName = "";
    protected $koneksi = null ;

    public function __construct($nama_table)
    {
        $this->tableName= $nama_table;
        $database = new DBKoneksi();
        $this->koneksi = $database->getKoneksi();
    }

    public function getAll(){
        $sql = "SELECT * FROM " . $this->tableName;
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        return $ps->fetchAll();
    }

    public function hapus($pk){
        $sql = "DELETE FROM " . $this->tableName . " WHERE nim=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$pk]);
        return $ps->rowCount(); // jika 1 sukses
    }

    public function findByID($pk){
        $sql = "SELECT * FROM " . $this->tableName . " WHERE nim=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$pk]);
        return $ps->fetch();
    }

}
