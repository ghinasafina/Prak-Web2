<?php

//Class Pengguna adalah Class abstrak yang mendefinisikan metode aksesFitur()
//Class abstrak tidak bisa dibuat langsung dan harus diwarisi oleh kelas lain
abstract Class Pengguna {
    //Metode ini harus diimplementasikan oleh kelas turunan
    abstract public function aksesFitur();
}

//Kelas Dosen adalah turunan dari kelas Pengguna
Class Dosen extends Pengguna {
    //Mengimplementasikan metode aksesFitur() untuk Dosen
    Public function aksesFitur() {
        //Mengembalikan pesan yang menunjukkan fitur yang bisa diakses oleh Dosen
        Echo "Akses fitur sebagai Dosen. Anda bisa melihat nilai dan mengedit materi.";
    }
}

//Class Mahasiswa adalah turunan dari Class Pengguna
Class Mahasiswa extends Pengguna {
    //Mengimplementasikan metode aksesFitur() untuk Mahasiswa
    Public function aksesFitur() {
        //Mengembalikan pesan yang menunjukkan fitur yang bisa diakses oleh Mahasiswa
        Echo "Akses fitur sebagai Mahasiswa. Anda bisa melihat jadwal dan mengumpulkan tugas.";
    }
}

//Membuat object baru untuk Dosen dan Mahasiswa
$dosen = new Dosen(); //Membuat object Dosen
$mahasiswa = new Mahasiswa(); //Membuat object Mahasiswa

//Memanggil metode aksesFitur() untuk masing-masing object
$dosen->aksesFitur(); //Menampilkan fitur yang bisa diakses oleh Dosen      
$mahasiswa->aksesFitur(); //Menampilkan fitur yang bisa diakses oleh Mahasiswa

?>
