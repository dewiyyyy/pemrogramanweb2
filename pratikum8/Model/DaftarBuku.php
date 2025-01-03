<<<<<<< HEAD
<?php

require_once "Buku.php";
require_once "Database/Database.php";

class DaftarBuku
{
    private $koneksi;

    public function __construct(){
        $db = new Database();
        $this->koneksi = $db->getKoneksi();
    }



    public function getData()
    {
        $db = new Database();
        $this->koneksi = $db->getKoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $this->koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $buku = new buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                $buku->setId($row['id']);
                array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;
    }

    public function getKolomTabel()
    {
        return array('no', 'judul', 'pengarang', 'penerbit', 'tahun');
    }

    public function simpan($buku)
    {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun) VALUES ('" . $buku->getJudul() . "', '" . $buku->getPengarang() . "', '" . $buku->getPenerbit() . "', '" . $buku->getTahun() . "')";
        
        $query = $koneksi->query($sql);
        return $query;
        
    }

    public function hapus($id)
    {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "DELETE FROM buku WHERE id = " . $id;

        $query = $koneksi->query($sql);
        return $query;
    }

    public function update($buku)
    {
        $sql = "UPDATE buku SET judul = '" . $buku->getJudul() . "', pengarang = '" . $buku->getPengarang() . "', penerbit = '" . $buku->getPenerbit() . "', tahun = '" . $buku->getTahun() . "' WHERE id = " . $buku->getId();
        $query = $this->koneksi->query($sql);

        return $query;
    }

    public function getBukuById($id){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku WHERE id = ". $id;

        $query = $koneksi->query($ql);

        if($query->num_rows>0){
            $data = $query->fetch_assoc();

            $buku = new Buku($data['judul'],$data['prngarang'],$data['penerbit'],$data['tahun']);
            $buku->setId($data['id']);

            return $buku;
}
          return false;

}

=======
<?php

require_once "Buku.php";
require_once "Database/Database.php";

class DaftarBuku
{
    private $koneksi;

    public function __construct(){
        $db = new Database();
        $this->koneksi = $db->getKoneksi();
    }



    public function getData()
    {
        $db = new Database();
        $this->koneksi = $db->getKoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $this->koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $buku = new buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                $buku->setId($row['id']);
                array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;
    }

    public function getKolomTabel()
    {
        return array('no', 'judul', 'pengarang', 'penerbit', 'tahun');
    }

    public function simpan($buku)
    {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun) VALUES ('" . $buku->getJudul() . "', '" . $buku->getPengarang() . "', '" . $buku->getPenerbit() . "', '" . $buku->getTahun() . "')";
        
        $query = $koneksi->query($sql);
        return $query;
        
    }

    public function hapus($id)
    {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "DELETE FROM buku WHERE id = " . $id;

        $query = $koneksi->query($sql);
        return $query;
    }

    public function update($buku)
    {
        $sql = "UPDATE buku SET judul = '" . $buku->getJudul() . "', pengarang = '" . $buku->getPengarang() . "', penerbit = '" . $buku->getPenerbit() . "', tahun = '" . $buku->getTahun() . "' WHERE id = " . $buku->getId();
        $query = $this->koneksi->query($sql);

        return $query;
    }

    public function getBukuById($id){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku WHERE id = ". $id;

        $query = $koneksi->query($ql);

        if($query->num_rows>0){
            $data = $query->fetch_assoc();

            $buku = new Buku($data['judul'],$data['prngarang'],$data['penerbit'],$data['tahun']);
            $buku->setId($data['id']);

            return $buku;
}
          return false;

}

>>>>>>> 642ff65 (menambahkan tugas)
}