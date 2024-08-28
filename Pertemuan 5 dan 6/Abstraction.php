<?php

// Mendefinisikan kelas abstrak Shape
// Kelas ini tidak bisa diinstansiasi langsung dan hanya sebagai dasar untuk kelas lain
abstract class Shape {
    // Mendeklarasikan metode abstrak 'area'
    // Metode ini harus diimplementasikan di semua kelas yang mewarisi kelas Shape
    abstract public function area();
}

// Mendefinisikan kelas Rectangle yang merupakan turunan dari Shape
class Rectangle extends Shape {
    // Mendeklarasikan atribut untuk menyimpan lebar dan tinggi persegi panjang
    private $width;
    private $height;
    
    // Konstruktor untuk menginisialisasi lebar dan tinggi saat objek Rectangle dibuat
    public function __construct($width, $height) {
        // Mengatur nilai lebar dan tinggi untuk objek Rectangle
        $this->width = $width;
        $this->height = $height;
    }
    
    // Implementasi metode area yang menghitung luas persegi panjang
    public function area() {
        // Menghitung luas dengan mengalikan lebar dan tinggi
        return $this->width * $this->height;
    }
}

// Mendefinisikan kelas Circle yang juga merupakan turunan dari Shape
class Circle extends Shape {
    // Mendeklarasikan atribut untuk menyimpan radius lingkaran
    private $radius;
    
    // Konstruktor untuk menginisialisasi radius saat objek Circle dibuat
    public function __construct($radius) {
        // Mengatur nilai radius untuk objek Circle
        $this->radius = $radius;
    }
    
    // Implementasi metode area yang menghitung luas lingkaran
    public function area() {
        // Menghitung luas lingkaran dengan rumus pi * radius kuadrat
        // pi() adalah fungsi PHP untuk nilai pi, pow() digunakan untuk menghitung pangkat
        return pi() * pow($this->radius, 2);
    }
}

// Membuat objek Rectangle dengan lebar 5 dan tinggi 10
$rectangle = new Rectangle(5, 10);

// Menampilkan hasil perhitungan luas persegi panjang dengan menggunakan metode area
// Outputnya adalah "Area of Rectangle: 50"
echo "Area of Rectangle: " . $rectangle->area();

// Membuat objek Circle dengan radius 7
$circle = new Circle(7);

// Menampilkan hasil perhitungan luas lingkaran dengan menggunakan metode area
// Outputnya adalah "Area of Circle: 153.9380400259"
echo "Area of Circle: " . $circle->area();

?>
