<?php
// Kelas Person dengan atribut name dan metode getName()
class Person {
    // Atribut name
    protected $name;

    // Konstruktor untuk menginisialisasi atribut name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut studentID
    public $studentID;

    // Konstruktor untuk menginisialisasi atribut name dan studentID
    public function __construct($name, $studentID) {
        // Memanggil konstruktor dari kelas induk (Person)
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Override metode getName() untuk format khusus mahasiswa
    public function getName() {
        return "Student: " . $this->name;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    // Atribut teacherID
    public $teacherID;

    // Konstruktor untuk menginisialisasi atribut name dan teacherID
    public function __construct($name, $teacherID) {
        // Memanggil konstruktor dari kelas induk (Person)
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Override metode getName() untuk format khusus guru
    public function getName() {
        return "Teacher: " . $this->name;
    }

    // Metode untuk mendapatkan teacherID
    public function getTeacherID() {
        return $this->teacherID;
    }
}

// Contoh penggunaan
$student = new Student("Anisya", "23415");
$teacher = new Teacher("Andi", "437890");

echo $student->getName() . "<br>";        // Menampilkan nama mahasiswa dengan format khusus
echo "Student ID: " . $student->getStudentID() . "<br>"; // Menampilkan ID mahasiswa
echo "<br>";
echo $teacher->getName() . "<br>";        // Menampilkan nama guru dengan format khusus
echo "Teacher ID: " . $teacher->getTeacherID(); // Menampilkan ID guru
?>
