<?php
// Kelas Person yang memiliki atribut name dan metode setter/getter untuk name
class Person {
    // Atribut name diubah menjadi private
    private $name;

    // Konstruktor untuk menginisialisasi atribut name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nilai name
    public function getName() {
        return $this->name;
    }

    // Metode untuk mengubah nilai name
    public function setName($name) {
        $this->name = $name;
    }
}

// Kelas Student yang mewarisi dari Person dan memiliki atribut tambahan studentID
class Student extends Person {
    // Atribut studentID diubah menjadi private
    private $studentID;

    // Konstruktor untuk menginisialisasi name (dari Person) dan studentID
    public function __construct($name, $studentID) {
        // Memanggil konstruktor dari kelas induk (Person) untuk mengatur name
        parent::__construct($name);
        // Mengatur nilai studentID
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Metode untuk mengubah nilai studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Contoh penggunaan kelas-kelas tersebut
$student = new Student("Ghina", "67890");

// Menampilkan nama dan studentID dari objek Student
echo "Name: " . $student->getName() . "\n";
echo "<br>";
echo "Student ID: " . $student->getStudentID() . "\n";
echo "<br>";
// Mengubah nilai nama dan studentID
$student->setName("Ghina");
echo "<br>";
$student->setStudentID("12345");

// Menampilkan nama dan studentID yang telah diubah
echo "Updated Name: " . $student->getName() . "\n";
echo "<br>";
echo "Updated Student ID: " . $student->getStudentID() . "\n";
?>
