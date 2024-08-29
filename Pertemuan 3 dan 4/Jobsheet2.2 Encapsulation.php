<?php
      // Mendefinisikan kelas Mahasiswa dengan atribut private untuk enkapsulasi data
      class Mahasiswa {
          private $nama;       // Atribut private untuk menyimpan nama mahasiswa
          private $nim;        // Atribut private untuk menyimpan NIM mahasiswa
          private $jurusan;    // Atribut private untuk menyimpan jurusan mahasiswa
  
          // Constructor untuk menginisialisasi objek Mahasiswa dengan nilai nama, nim, dan jurusan
          public function __construct($nama, $nim, $jurusan) {
              $this->nama = $nama;         // Menginisialisasi atribut nama
              $this->nim = $nim;           // Menginisialisasi atribut NIM
              $this->jurusan = $jurusan;   // Menginisialisasi atribut jurusan
          }
  
          // Getter untuk mendapatkan nilai nama mahasiswa
          public function getNama() {
              return $this->nama;   // Mengembalikan nilai atribut nama
          }
  
          // Getter untuk mendapatkan nilai NIM mahasiswa
          public function getNim() {
              return $this->nim;    // Mengembalikan nilai atribut NIM
          }
  
          // Getter untuk mendapatkan nilai jurusan mahasiswa
          public function getJurusan() {
              return $this->jurusan;   // Mengembalikan nilai atribut jurusan
          }
  
          // Setter untuk mengubah nilai nama mahasiswa
          public function setNama($nama) {
              $this->nama = $nama;   // Mengubah nilai atribut nama
          }
  
          // Setter untuk mengubah nilai NIM mahasiswa
          public function setNim($nim) {
              $this->nim = $nim;   // Mengubah nilai atribut NIM
          }
  
          // Setter untuk mengubah nilai jurusan mahasiswa
          public function setJurusan($jurusan) {
              $this->jurusan = $jurusan;   // Mengubah nilai atribut jurusan
          }
      }
  
      // Membuat objek Mahasiswa baru dengan nama "Ghina S.A", NIM "230102012", dan jurusan "Komputer dan Bisnis"
      $mahasiswa1 = new Mahasiswa("Ghina S.A", "230102012", "Komputer dan Bisnis");
  
      // Menampilkan data awal mahasiswa dengan memanggil metode getter
      echo "Nama : " . $mahasiswa1->getNama() . "<br>";      // Menampilkan nama mahasiswa
      echo "NIM : " . $mahasiswa1->getNim() . "<br>";        // Menampilkan NIM mahasiswa
      echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";// Menampilkan jurusan mahasiswa
  
      // Mengubah data mahasiswa menggunakan metode setter
      $mahasiswa1->setNama("Ghina");                  // Mengubah nama mahasiswa menjadi "Ghina"
      $mahasiswa1->setNim("240102012");                      // Mengubah NIM mahasiswa menjadi "240102012"
      $mahasiswa1->setJurusan("Teknik Informatika");         // Mengubah jurusan mahasiswa menjadi "Teknik Informatika"
  
      // Menampilkan data mahasiswa setelah perubahan dengan memanggil metode getter
      echo "<br>Setelah perubahan:<br>";                     // Mencetak teks "Setelah perubahan" untuk menunjukkan perubahan data
      echo "Nama : " . $mahasiswa1->getNama() . "<br>";      // Menampilkan nama mahasiswa yang telah diperbarui
      echo "NIM : " . $mahasiswa1->getNim() . "<br>";        // Menampilkan NIM mahasiswa yang telah diperbarui
      echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";// Menampilkan jurusan mahasiswa yang telah diperbarui
  ?>