<?php
require_once "Buku.php";
require_once "Database/Database.php";

class ListBuku {

    public function getData() {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        $daftar_buku = [];

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                // Pastikan setiap kunci memiliki nilai default
                $judul = $row['Judul'] ?? 'Judul tidak tersedia';
                $pengarang = $row['Pengarang'] ?? 'Pengarang tidak tersedia';
                $penerbit = $row['Penerbit'] ?? 'Penerbit tidak tersedia';
                $tahun = $row['Tahun'] ?? 'Tahun tidak tersedia';

                // Buat objek Buku menggunakan nilai yang sudah diperiksa
                $buku = new Buku($judul, $pengarang, $penerbit, $tahun);
                $buku->setId($row['id']); // Asumsi 'id' ada dalam tabel

                array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;
    }

    public function getKolomTabel() {
        return array('id', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }

    public function simpan($buku) {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "INSERT INTO buku (Judul, Pengarang, Penerbit, Tahun) VALUES (?, ?, ?, ?)";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("ssss", $buku->getJudul(), $buku->getPengarang(), $buku->getPenerbit(), $buku->getTahun());

        $query = $stmt->execute();
        $stmt->close();

        return $query;
    }

    public function hapus($id) {
        $db = new Database();
        $koneksi = $db->getKoneksi();
        $sql = "DELETE FROM buku WHERE id = ?";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("i", $id);

        $query = $stmt->execute();
        $stmt->close();

        return $query;
    }

    public function update($buku) {
        $db = new Database();
        $koneksi = $db->getKoneksi();
        $sql = "UPDATE buku SET Judul=?, Pengarang=?, Penerbit=?, Tahun=? WHERE id=?";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("ssssi", $buku->getJudul(), $buku->getPengarang(), $buku->getPenerbit(), $buku->getTahun(), $buku->getId());

        $query = $stmt->execute();
        $stmt->close();

        return $query;
    }

    public function getBukuById($id) {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku WHERE id = ?";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $query = $stmt->get_result();

        if ($query->num_rows > 0) {
            $data = $query->fetch_assoc();
            $buku = new Buku($data['Judul'], $data['Pengarang'], $data['Penerbit'], $data['Tahun']);
            $buku->setId($data['id']);
            $stmt->close();
            return $buku;
        }

        $stmt->close();
        return false;
    }
}
?>
