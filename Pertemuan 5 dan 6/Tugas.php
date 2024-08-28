<?php

// Kelas Person sebagai induk dari Dosen dan Mahasiswa
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // Metode getRole yang akan dioverride oleh kelas turunan
    public function getRole() {
        return "Unknown Role";
    }
}

// Kelas Dosen yang mewarisi dari Person
class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Override metode getRole untuk menampilkan peran Dosen
    public function getRole() {
        return "Dosen";
    }

    // Metode untuk mendapatkan NIDN dengan Encapsulation
    public function getNidn() {
        return $this->nidn;
    }

    // Metode untuk mengatur NIDN dengan Encapsulation
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}

// Kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Override metode getRole untuk menampilkan peran Mahasiswa
    public function getRole() {
        return "Mahasiswa";
    }

    // Metode untuk mendapatkan NIM dengan Encapsulation
    public function getNim() {
        return $this->nim;
    }

    // Metode untuk mengatur NIM dengan Encapsulation
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Kelas abstrak Jurnal sebagai template untuk jurnal dosen dan mahasiswa
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function submit();
}

// Kelas JurnalDosen yang mewarisi dari Jurnal
class JurnalDosen extends Jurnal {
    public function submit() {
        // Logika untuk pengajuan jurnal oleh Dosen
        return "Jurnal Dosen dengan judul '{$this->judul}' telah diajukan.";
    }
}

// Kelas JurnalMahasiswa yang mewarisi dari Jurnal
class JurnalMahasiswa extends Jurnal {
    public function submit() {
        // Logika untuk pengajuan jurnal oleh Mahasiswa
        return "Jurnal Mahasiswa dengan judul '{$this->judul}' telah diajukan.";
    }
}

// Contoh penggunaan
$dosen = new Dosen("Chaska", "1796352");
$mahasiswa = new Mahasiswa("Ghina", "230202017");

echo $dosen->getName() . " adalah " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";

$jurnalDosen = new JurnalDosen("Penelitian Limbah");
$jurnalMahasiswa = new JurnalMahasiswa("Studi Kasus PHP OOP");

echo $jurnalDosen->submit() . "<br>";
echo $jurnalMahasiswa->submit() . "<br>";
?>