<?php
    /*
    mysql> desc mahasiswa;
    +-----------+-------------+------+-----+---------+-------+
    | Field     | Type        | Null | Key | Default | Extra |
    +-----------+-------------+------+-----+---------+-------+
    | nim       | varchar(10) | NO   | PRI | NULL    |       |
    | nama      | varchar(45) | YES  |     | NULL    |       |
    | tmp_lahir | varchar(30) | YES  |     | NULL    |       |
    | tgl_lahir | date        | YES  |     | NULL    |       |
    | jk        | char(1)     | YES  |     | NULL    |       |
    | prodi_id  | int(11)     | NO   | MUL | NULL    |       |
    | ipk       | double      | YES  |     | NULL    |       |
    | thnmasuk  | int(11)     | YES  |     | NULL    |       |
    | email     | varchar(45) | YES  |     | NULL    |       |
    | rombel_id | int(11)     | NO   | MUL | NULL    |       |
    +-----------+-------------+------+-----+---------+-------+
    10 rows in set (0,00 sec)
    mysql> select *from mahasiswa;
    +-----------+-------------------------------------+-----------+-----------+------+----------+------+----------+-------+-----------+
    | nim       | nama                                | tmp_lahir | tgl_lahir | jk   | prodi_id | ipk  | thnmasuk | email | rombel_id |
    +-----------+-------------------------------------+-----------+-----------+------+----------+------+----------+-------+-----------+
    | 110116002 | Andhito Diaz Revandra               | NULL      | NULL      | L    |        1 | NULL |     2016 | NULL  |         1 |

    */
    require_once "DAOmahasiswa.php";
    class mahasiswa extends DAOmahasiswa
    {
        public function __construct()
        {
            parent::__construct("mahasiswa");
        }

        public function simpan($data){
            $sql = "INSERT INTO ".$this->tableName.
            " (nim, nama, tgl_lahir, jk, prodi_id, thnmasuk, rombel_id) ".
            " VALUES (?,?,?,?,?,?,?)";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            return $ps->rowCount();
        }

        public function ubah($data){
            $sql = "UPDATE ".$this->tableName.
            " SET nim=?,nama=?, tgl_lahir=?,jk=?, prodi_id=?, thnmasuk=?, rombel_id=?" .
            " WHERE nim=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            return $ps->rowCount();
        }
        //buat fungsi untuk menampilkan statistik

    }
?>
