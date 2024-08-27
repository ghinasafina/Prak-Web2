<?php

// Mendefinisikan kelas Animal
class Animal {
    // Mendeklarasikan atribut protected untuk menyimpan nama hewan
    // Protected berarti atribut ini hanya bisa diakses oleh kelas ini dan kelas turunannya
    protected $name;

    // Konstruktor untuk menginisialisasi nama hewan saat objek Animal dibuat
    public function __construct($name) {
        // Mengatur nilai nama hewan
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama hewan
    public function getName() {
        // Mengembalikan nama hewan
        return $this->name;
    }
}

// Mendefinisikan kelas Dog yang mewarisi dari kelas Animal
// Kelas ini merupakan turunan dari Animal dan menambahkan fungsi khusus untuk anjing
class Dog extends Animal {
    // Metode untuk menghasilkan suara khas anjing
    public function makeSound() {
        // Mengembalikan suara anjing
        return "Woof!";
    }
}

// Mendefinisikan kelas Cat yang mewarisi dari kelas Animal
// Kelas ini merupakan turunan dari Animal dan menambahkan fungsi khusus untuk kucing
class Cat extends Animal {
    // Metode untuk menghasilkan suara khas kucing
    public function makeSound() {
        // Mengembalikan suara kucing
        return "Meow!";
    }
}

// Membuat objek Dog dengan nama "Buddy"
$dog = new Dog("Buddy");

// Menampilkan nama anjing dan suara yang dihasilkan oleh anjing
// Menggunakan metode getName() dari kelas Animal untuk mendapatkan nama
// Menggunakan metode makeSound() dari kelas Dog untuk mendapatkan suara
// Outputnya adalah "Buddy says Woof!"
echo $dog->getName() . " says " . $dog->makeSound();

?>
