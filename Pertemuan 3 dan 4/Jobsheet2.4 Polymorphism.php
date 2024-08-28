<?php

Class pengguna{
    Public function __construct(){
    //Tidak ada inisialisasi khusus saat membuat object Mahasiswa
    }
    
    // Metode ini untuk mendapatkan akses fitur yang bisa digunakan semua pengguna
    Public function aksesFitur(){
        return "Akses fitur untuk semua Pengguna.";
    }
}

//Class Dosen adalah turunan dari Class Pengguna
//Class ini menambahkan fitur khusus untuk dosen
Class Dosen extends Pengguna{
    Public function __construct(){
    
    }
    
    //Ini memberikan akses fitur khusus untuk dosen
    Public function aksesFitur(){
        return "Akses fitur khusus untuk Dosen: Mengelola nilai mahasiswa dan mengajar.";
    }
}

//Class Mahasiswa adalah turunan dari Class Pengguna
//Class ini menambahkan fitur khusus untuk mahasiswa
Class Mahasiswa extends Pengguna{
    Public function __construct(){
    
    }
    
    //Ini memberikan akses fitur khusus untuk mahasiswa
    Public function aksesFitur(){
        return "Akses fitur khusus untuk Mahasiswa: Melihat jadwal, mengumpulkan tugas, dan melihat nilai.";
    }
}

//Membuat object baru dari masing-masing kelas: Pengguna, Dosen, dan Mahasiswa
$pengguna = new Pengguna();
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

//Menampilkan hasil dari metode aksesFitur() untuk setiap object
//Ini akan menunjukkan fitur yang bisa diakses oleh Pengguna, Dosen, dan Mahasiswa
Echo $pengguna->aksesFitur() . "<br>"; //Menampilkan fitur untuk Pengguna
Echo $dosen->aksesFitur() . "<br>";   //Menampilkan fitur khusus untuk Dosen
Echo $mahasiswa->aksesFitur();         //Menampilkan fitur khusus untuk Mahasiswa

?>