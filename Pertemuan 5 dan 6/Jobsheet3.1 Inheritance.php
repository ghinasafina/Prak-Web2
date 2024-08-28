<?php
// Kelas Person yang memiliki atribut name dan metode getName()
class Person {
    // Atribut untuk menyimpan nama
    private $name;

    // Konstruktor untuk menginisialisasi atribut name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai atribut name
    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari kelas Person
class Student extends Person {
    // Atribut tambahan untuk menyimpan studentID
    private $studentID;

    // Konstruktor untuk menginisialisasi name (dari kelas Person) dan studentID
    public function __construct($name, $studentID) {
        // Memanggil konstruktor dari kelas induk (Person) untuk mengatur name
        parent::__construct($name);
        // Mengatur nilai studentID
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai atribut studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// Contoh penggunaan kelas-kelas tersebut
$student = new Student("Ghina", "230102012");

// Menampilkan nama dan studentID dari objek Student
echo "Name: " . $student->getName() . "\n";
echo "<br>";
echo "Student ID: " . $student->getStudentID() . "\n";
?>
