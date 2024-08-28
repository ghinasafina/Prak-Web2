<?php
// Kelas abstrak Course yang memiliki metode abstrak getCourseDetails()
abstract class Course {
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan metode getCourseDetails()
class OnlineCourse extends Course {
    private $courseName;
    private $platform;

    // Konstruktor untuk menginisialisasi atribut courseName dan platform
    public function __construct($courseName, $platform) {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails() untuk memberikan detail kursus online
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . " on " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan metode getCourseDetails()
class OfflineCourse extends Course {
    private $courseName;
    private $location;

    // Konstruktor untuk menginisialisasi atribut courseName dan location
    public function __construct($courseName, $location) {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    // Implementasi metode getCourseDetails() untuk memberikan detail kursus offline
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}

// Contoh penggunaan kelas-kelas tersebut
$onlineCourse = new OnlineCourse("PHP OOP", "Udemy");
$offlineCourse = new OfflineCourse("PHP OOP", "Jakarta");

echo $onlineCourse->getCourseDetails() . "\n";
echo "<br>";
echo $offlineCourse->getCourseDetails() . "\n";
?>
