# P WEB 2 - Pemrograman Berorientasi Objek (OOP) dalam PHP

## Daftar Isi

- [Modul Pertemuan 1 dan 2 - Jobsheet 1](#modul-pertemuan-1-dan-2---jobsheet-1)
    - [1. Membuat Class dan Object](#membuat-class-dan-object)
    - [2. Implementasi Constructor](#implementasi-constructor)
    - [3. Membuat Metode Tambahan](#membuat-metode-tambahan)
    - [4. Penggunaan Atribut dan Metode](#penggunaan-atribut-dan-metode)
    - [Tugas - Implementasi Kelas Dosen](#tugas-implementasi-kelas-dosen)
- [Modul Pertemuan 3 dan 4 - Jobsheet 2](#modul-pertemuan-3-dan-4---jobsheet-2)
    - [1. Membuat Class dan Object](#membuat-class-dan-object-1)
    - [2. Encapsulation](#encapsulation)
    - [3. Inheritance](#inheritance)
    - [4. Polymorphism](#polymorphism)
    - [5. Abstraction](#abstraction)
- [Modul Pertemuan 5 dan 6 - Jobsheet 3](#modul-pertemuan-5-dan-6---jobsheet-3)
    - [1. Inheritance](#inheritance-1)
    - [2. Polymorphism](#polymorphism-1)
    - [3. Encapsulation](#encapsulation-1)
    - [4. Abstraction](#abstraction-1)
    - [Tugas - Implementasi Kelas Person](#tugas---implementasi-kelas-person)

## Modul Pertemuan 1 dan 2 - Jobsheet 1
<p>Pada pertemuan ini kita diharapkan mampu menggunakan onsep kelas dan objek dalam PHP. Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek (OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat digunakan kembali.</p>

#### 1. Membuat Class dan Object
Class adalah blueprint atau rancangan untuk membuat objek. Class dapat berisi atribut (properti) dan metode (fungsi). Sedangkan Objek adalah instansiasi dari class. Setiap objek memiliki atribut dan metode yang ditentukan oleh kelasnya. 

a. Mendefinisikan class Mahasiswa dan property

```
    //Buat Class Mahasiswa
    class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
       public $nama; // Menyimpan nama mahasiswa
       public $nim; // Menyimpan NIM 
       public $jurusan; // Menyimpan jurusan 
```
Pada Jobsheet ini, kita diminta untuk membuat class Mahasiswa yang memiliki atribut nama,nim,dan jurusan. Atribut ini digunakan untuk menyimpan data mahasiswa.

b. Metode tampilkanData()

```
        public function tampilkanData(){
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
```
Metode dibuat untuk mengakses properti dari objek yang memanggilnya dan mencetak  nilai dari ketiga atribut tersebut dalam format yang mudah dibaca.

c. Instansiasi objek Mahasiswa()

```
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");
```
Instansiasi adalah proses membuat sebuah objek dari sebuah kelas dalam pemrograman berorientasi objek (OOP). Ketika kamu melakukan instansiasi, kamu menggunakan kelas sebagai cetakan atau blueprint untuk membuat objek yang memiliki atribut dan metode yang didefinisikan dalam kelas tersebut.

d. Menampilkan data Mahasiswa

```
echo $mahasiswa1->tampilkanData();
```
echo adalah fungsi dalam PHP yang digunakan untuk menampilkan output ke layar. Metode tampilkanData() dipanggil pada objek $mahasiswa1. Metode ini mencetak informasi tentang mahasiswa yang telah diisi sebelumnya.

## Source code

```
<?php

//Buat Class Mahasiswa
    class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama; // Menyimpan nama mahasiswa
    public $nim; // Menyimpan NIM 
    public $jurusan; // Menyimpan jurusan

    public function __construct ($nama, $nim, $jurusan) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Membuat objek dari class Mahasiswa dan memberikan nilai-nilai atributnya
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");
// Memanggil metode tampilkanData() untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();

?>
```
<pre></pre>
## Output

```
Nama: Ghina
NIM: 230102012
Jurusan: Komputer Dan Bisnis
```
#### 2. Implementasi Construct
Implementasi __construct dalam PHP adalah cara untuk membuat konstruktor dalam sebuah kelas. Konstruktor adalah metode khusus yang otomatis dipanggil saat sebuah objek dari kelas tersebut diinstansiasi (dibuat). Metode ini biasanya digunakan untuk menginisialisasi properti atau melakukan pengaturan awal yang diperlukan untuk objek tersebut.
<pre></pre>
a. Mendefinisikan class Mahasiswa dan property

```
// Membuat class Mahasiswa yang merepresentasikan data mahasiswa
class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama; // Menyimpan nama mahasiswa
    public $nim; // Menyimpan NIM 
    public $jurusan; // Menyimpan jurusan
```
Pada Jobsheet ini, kita diminta untuk membuat class Mahasiswa yang memiliki atribut nama,nim,dan jurusan. Atribut ini digunakan untuk menyimpan data mahasiswa.

b. Constructor dari __construct()

```
   // Constructor untuk menginisialisasi objek dengan nilai atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Constructor ini menerima tiga parameter ($nama, $nim, $jurusan) dan menginisialisasi properti kelas dengan nilai-nilai yang diberikan saat objek dibuat.

c. Metode tampilkanData()

```
// Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
```
Metode tampilkanData() adalah sebuah fungsi dalam kelas yang digunakan untuk menampilkan data mahasiswa secara rapi. Metode ini mengakses atribut nama, nim, dan jurusan dari objek yang sedang diproses menggunakan $this, yang merujuk pada objek saat ini. Kemudian, metode ini menggunakan fungsi echo untuk mencetak nilai dari masing-masing atribut tersebut ke layar.

## Source Code

```
<?php
// Membuat class Mahasiswa yang merepresentasikan data mahasiswa
class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi objek dengan nilai atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Membuat objek dari class Mahasiswa dan memberikan nilai-nilai atributnya
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");

// Memanggil metode tampilkanData() untuk menampilkan data mahasiswa
$mahasiswa1->tampilkanData();
?>
```

## Output

```
Nama: Ghina
NIM: 230102012
Jurusan: Komputer Dan Bisnis
```
#### 3. Membuat metode tambahan
a. Mendefinisikan class Mahasiswa dan property

```
// Membuat class Mahasiswa yang merepresentasikan data mahasiswa
class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
```
Class Mahasiswa memiliki tiga properti publik yaitu $nama: Untuk menyimpan nama mahasiswa. $nim: Untuk menyimpan Nomor Induk Mahasiswa (NIM). $jurusan: Untuk menyimpan jurusan mahasiswa.

b. Constructor dari __construct()

```
// Konstruktor untuk menginisialisasi objek dengan nilai atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Constructor ini menerima tiga parameter ($nama, $nim, $jurusan) dan menginisialisasi properti kelas dengan nilai-nilai yang diberikan saat objek dibuat.

c. Metode tampilkanData()

```
// Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
```

Metode tampilkanData() adalah sebuah fungsi dalam kelas yang digunakan untuk menampilkan data mahasiswa secara rapi. Metode ini mengakses atribut nama, nim, dan jurusan dari objek yang sedang diproses menggunakan $this, yang merujuk pada objek saat ini. Kemudian, metode ini menggunakan fungsi echo untuk mencetak nilai dari masing-masing atribut tersebut ke layar.

d. Metode updateJurusan()

```
 // Metode untuk mengubah jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        // Mengubah atribut jurusan dengan jurusan baru yang diberikan
        $this->jurusan = $jurusanBaru;
    }
```
Metode `updateJurusan($jurusanBaru)` adalah fungsi dalam kelas yang digunakan untuk mengubah jurusan mahasiswa. Fungsi ini menerima satu parameter, yaitu `$jurusanBaru`, yang mewakili jurusan baru yang ingin diberikan kepada mahasiswa. Di dalam metode ini, atribut `jurusan` dari objek yang sedang diakses diubah nilainya menjadi nilai dari `$jurusanBaru`. Hal ini dilakukan dengan menggunakan `$this->jurusan`, yang merujuk pada atribut `jurusan` milik objek saat ini. Dengan memanggil metode ini, jurusan dari mahasiswa yang diwakili oleh objek tersebut akan diperbarui sesuai dengan jurusan baru yang diberikan.

e. Instansiasi objek dari class Mahasiswa

```
$mahasiswa1 = new Mahasiswa("Ghina", "230102012", "JKB");
```

Baris kode `$mahasiswa1 = new Mahasiswa("Ghina", "230102012", "JKB");` digunakan untuk membuat sebuah objek baru dari kelas `Mahasiswa` dengan nama `$mahasiswa1`. Saat objek ini dibuat, konstruktor dalam kelas `Mahasiswa` dipanggil dan diberi tiga parameter: `"Ghina"` sebagai nama mahasiswa, `"230102012"` sebagai nomor induk mahasiswa (NIM), dan `"JKB"` sebagai jurusan. Objek `$mahasiswa1` kemudian menyimpan informasi ini sebagai atributnya, sehingga data tersebut dapat diakses dan digunakan dalam metode lain yang ada di dalam kelas `Mahasiswa`.

f. Mengubah Jurusan

```
$mahasiswa1->updateJurusan("Komputer Dan Bisnis");
```
Kode `$mahasiswa1->updateJurusan("Komputer Dan Bisnis");` memanggil metode `updateJurusan()` pada objek `$mahasiswa1`, dan mengubah jurusan mahasiswa tersebut menjadi `"Komputer Dan Bisnis"`.

g. Menampilkan data Mahasiswa yang sudah diperbarui

```
echo "<br>Setelah perubahan jurusan:<br>";
$mahasiswa1->tampilkanData();
```
Kode `echo "<br>Setelah perubahan jurusan:<br>";` menambahkan teks dan baris baru untuk memberi tahu bahwa data yang akan ditampilkan adalah setelah jurusan diubah. Selanjutnya, `$mahasiswa1->tampilkanData();` menampilkan data mahasiswa dengan jurusan yang telah diperbarui.

## Source Code

```
<?php
// Membuat class Mahasiswa yang merepresentasikan data mahasiswa
class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi objek dengan nilai atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }

    // Metode untuk mengubah jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        // Mengubah atribut jurusan dengan jurusan baru yang diberikan
        $this->jurusan = $jurusanBaru;
    }
}

// Membuat objek dari class Mahasiswa dan memberikan nilai-nilai atributnya
$mahasiswa1 = new Mahasiswa("Ghina", "230102012", "JKB");

// Memanggil metode tampilkanData() untuk menampilkan data mahasiswa sebelum perubahan
echo "Sebelum perubahan jurusan:<br>";
$mahasiswa1->tampilkanData();

// Mengubah jurusan mahasiswa menggunakan metode updateJurusan()
$mahasiswa1->updateJurusan("Komputer Dan Bisnis");

// Menampilkan data mahasiswa setelah jurusan diubah
echo "<br>Setelah perubahan jurusan:<br>";
$mahasiswa1->tampilkanData();
?>
```

## Output

```
Sebelum perubahan jurusan:
Nama: Ghina
NIM: 230102012
Jurusan: JKB

Setelah perubahan jurusan:
Nama: Ghina
NIM: 230102012
Jurusan: Komputer Dan Bisnis
```
#### 4. Penggunaan atribut dan metode
a. Mendefinisikan class Mahasiswa dan property
```
class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
```
Class Mahasiswa memiliki tiga properti publik yaitu $nama: Untuk menyimpan nama mahasiswa. $nim: Untuk menyimpan Nomor Induk Mahasiswa (NIM). $jurusan: Untuk menyimpan jurusan mahasiswa.

b. Constructor dari __construct

```
// Konstruktor untuk menginisialisasi objek dengan nilai atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Constructor ini menerima tiga parameter ($nama, $nim, $jurusan) dan menginisialisasi properti kelas dengan nilai-nilai yang diberikan saat objek dibuat. Metode ini dipanggil saat objek Mahasiswa diinstansiasi.

c. Metode tampilkanData()

```
 public function tampilkanData() {
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
```

Fungsi `tampilkanData()` adalah sebuah metode di dalam kelas yang digunakan untuk menampilkan data mahasiswa secara rapi. Di dalam fungsi ini, beberapa atribut dari objek mahasiswa, seperti `nama`, `nim`, dan `jurusan`, ditampilkan menggunakan perintah `echo`.

d. Metode setter setNim() 

```
public function setNim($nimBaru) {
        // Mengubah atribut nim dengan nilai baru yang diberikan
        $this->nim = $nimBaru;
    }
```

Fungsi `setNim($nimBaru)` digunakan untuk mengubah nilai atribut `nim` dari objek mahasiswa. Nilai baru yang diberikan (`$nimBaru`) akan disimpan ke dalam atribut `nim`, sehingga NIM mahasiswa tersebut diperbarui sesuai input.

e. Metode updateJurusan()

```
public function updateJurusan($jurusanBaru) {
        // Mengubah atribut jurusan dengan jurusan baru yang diberikan
        $this->jurusan = $jurusanBaru;
    }
```

Fungsi `updateJurusan($jurusanBaru)` bertugas untuk memperbarui atribut `jurusan` dari objek mahasiswa. Ketika fungsi ini dipanggil, nilai `jurusan` yang lama diganti dengan nilai baru yang diberikan melalui parameter `$jurusanBaru`.

f. Instansiasi objek dan penggunaan metode

```
// Membuat objek dari class Mahasiswa dan memberikan nilai-nilai atributnya
$mahasiswa1 = new Mahasiswa("Ghina", "12345678", "Komputer dan Bisnis");

// Menampilkan data mahasiswa sebelum perubahan
echo "Sebelum perubahan NIM:<br>";
$mahasiswa1->tampilkanData();

// Mengubah NIM mahasiswa menggunakan metode setNim()
$mahasiswa1->setNim("230102012");

// Menampilkan data mahasiswa setelah NIM diubah
echo "<br>Setelah perubahan NIM:<br>";
$mahasiswa1->tampilkanData();
```

Kode ini membuat objek `mahasiswa1` dari kelas `Mahasiswa` dengan nama, NIM, dan jurusan yang diberikan. Data awal mahasiswa ditampilkan menggunakan `tampilkanData()`. Kemudian, NIM diubah menggunakan metode `setNim()`, dan data ditampilkan lagi untuk menunjukkan perubahan NIM yang baru.

## Source Code

```
<?php
// Membuat class Mahasiswa yang merepresentasikan data mahasiswa
class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi objek dengan nilai atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }

    // Metode untuk mengubah nilai NIM mahasiswa
    public function setNim($nimBaru) {
        // Mengubah atribut nim dengan nilai baru yang diberikan
        $this->nim = $nimBaru;
    }

    // Metode untuk mengubah jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        // Mengubah atribut jurusan dengan jurusan baru yang diberikan
        $this->jurusan = $jurusanBaru;
    }
}

// Membuat objek dari class Mahasiswa dan memberikan nilai-nilai atributnya
$mahasiswa1 = new Mahasiswa("Ghina", "12345678", "Komputer dan Bisnis");

// Menampilkan data mahasiswa sebelum perubahan
echo "Sebelum perubahan NIM:<br>";
$mahasiswa1->tampilkanData();

// Mengubah NIM mahasiswa menggunakan metode setNim()
$mahasiswa1->setNim("230102012");

// Menampilkan data mahasiswa setelah NIM diubah
echo "<br>Setelah perubahan NIM:<br>";
$mahasiswa1->tampilkanData();
?>
```

## Output

```
Sebelum perubahan NIM:
Nama: Ghina
NIM: 12345678
Jurusan: Komputer dan Bisnis

Setelah perubahan NIM:
Nama: Ghina
NIM: 230102012
Jurusan: Komputer dan Bisnis
```

#### Tugas - Implementasi kelas Dosen
a. Mendefinisikan class Dosen dan property

```
class Dosen {
    // Deklarasi atribut yang dimiliki oleh class Dosen
    public $nama;
    public $nip;
    public $mataKuliah;
```
Di dalam kelas `Dosen`mempunyai tiga atribut yang dideklarasikan: `nama`, `nip`, dan `mataKuliah`. Atribut `nama` menyimpan nama dosen, `nip` menyimpan nomor induk pegawai dosen, dan `mataKuliah` menyimpan nama mata kuliah yang diajarkan oleh dosen. Atribut-atribut ini bersifat publik, artinya bisa diakses dan dimodifikasi dari luar kelas.

b. Constructor menggunakan __construct()

```
public function __construct($nama, $nip, $mataKuliah) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
```

Fungsi `__construct($nama, $nip, $mataKuliah)` adalah konstruktor dalam kelas `Dosen` yang dijalankan secara otomatis saat objek dari kelas ini dibuat. Fungsi ini menerima tiga parameter—`$nama`, `$nip`, dan `$mataKuliah`—dan menyimpan nilai-nilai tersebut ke dalam atribut kelas yang sesuai. Dengan cara ini, objek `Dosen` diinisialisasi dengan nilai-nilai yang diberikan saat dibuat.

c. Metode tampilkanDosen()

```
 public function tampilkanDosen() {
        // Menampilkan data dosen dalam format yang rapi
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
```

Fungsi `tampilkanDosen()` menampilkan informasi dosen seperti nama, NIP, dan mata kuliah yang diajarkan. Setiap data dicetak di baris terpisah menggunakan tag HTML `<br>`, sehingga informasi tersebut mudah dibaca di halaman web.

d. Instansiasi objek Dosen

```
$dosen1 = new Dosen("Dr. Ahmad", "1987654321", "Pemrograman Web");
```

Baris kode `$dosen1 = new Dosen("Dr. Ahmad", "1987654321", "Pemrograman Web");` membuat objek `dosen1` dari kelas `Dosen`, menginisialisasinya dengan nama "Dr. Ahmad", NIP "1987654321", dan mata kuliah "Pemrograman Web" melalui konstruktor kelas.

e. Menampilkan data Dosen

```
$dosen1->tampilkanDosen();
```
Baris kode `$dosen1->tampilkanDosen();` memanggil metode `tampilkanDosen()` pada objek `dosen1`. Metode ini akan menampilkan informasi tentang dosen, termasuk nama, NIP, dan mata kuliah yang diajarkan, di halaman web.

## Source Code

```
<?php
// Membuat class Dosen yang merepresentasikan data dosen
class Dosen {
    // Deklarasi atribut yang dimiliki oleh class Dosen
    public $nama;
    public $nip;
    public $mataKuliah;

    // Konstruktor untuk menginisialisasi objek dengan nilai atribut saat objek dibuat
    public function __construct($nama, $nip, $mataKuliah) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        // Menampilkan data dosen dalam format yang rapi
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
}

// Membuat objek dari class Dosen dan memberikan nilai-nilai atributnya
$dosen1 = new Dosen("Dr. Ahmad", "1987654321", "Pemrograman Web");

// Memanggil metode tampilkanDosen() untuk menampilkan informasi dosen
$dosen1->tampilkanDosen();
?>
```

## Output

```
Nama Dosen: Dr. Ahmad
NIP: 1987654321
Mata Kuliah: Pemrograman Web
```

## Modul Pertemuan 3 dan 4 - Jobsheet 2
Pada modul ini kita diharapkan mampu mengidentifikasi dan menjelaskan prinsip dasar OOP. Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah dipelihara.

#### 1. Membuat Class dan Object
a. Mendefinisikan class dan property

```
Class Mahasiswa {
    //Deklarasi properti untuk menyimpan nama, NIM, dan jurusan mahasiswa
    Public $nama;
    Public $nim;
    Public $jurusan;
```

Class Mahasiswa memiliki tiga properti publik yaitu $nama: Untuk menyimpan nama mahasiswa. $nim: Untuk menyimpan Nomor Induk Mahasiswa (NIM). $jurusan: Untuk menyimpan jurusan mahasiswa.

b. Constructor menggunakan __construct

```
 Public function __construct ($nama, $nim, $jurusan) {
        $this->nama = $nama; // Menetapkan nilai properti nama dengan nilai                                  yang diberikan
        $this->nim = $nim; // Menetapkan nilai properti nim dengan nilai                                   yang diberikan
        $this->jurusan = $jurusan; // Menetapkan nilai properti jurusan                                            dengan nilai yang diberikan
    }
```

Constructor ini menerima tiga parameter ($nama, $nim, $jurusan) dan menginisialisasi properti kelas dengan nilai-nilai yang diberikan saat objek dibuat. Metode ini dipanggil saat objek Mahasiswa diinstansiasi.

c. Method tampilkanData()

```
Public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
```

Fungsi `tampilkanData()` menampilkan informasi tentang seorang mahasiswa dengan mencetak nama, NIM, dan jurusan yang dimiliki. Setiap detail dipisahkan dengan tag HTML `<br>`, sehingga informasi tersebut tampil di baris yang berbeda dalam halaman web. Fungsi ini memudahkan untuk melihat data mahasiswa secara terpisah dan jelas.

d. Instanisasi objek Mahasiswa

```
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");
```

Baris kode `$mahasiswa1 = new Mahasiswa("Ghina", "230102012", "Komputer Dan Bisnis");` membuat objek `mahasiswa1` dari kelas `Mahasiswa`. Objek ini diisi dengan nama "Ghina", NIM "230102012", dan jurusan "Komputer Dan Bisnis" melalui konstruktor kelas `Mahasiswa`.

e. Menampilkan data Mahasiswa

```
Echo $mahasiswa1->tampilkanData();
```
Baris kode `echo $mahasiswa1->tampilkanData();` mencoba mencetak hasil dari metode `tampilkanData()` milik objek `mahasiswa1`. Namun, jika `tampilkanData()` hanya menampilkan informasi tanpa mengembalikan nilai, menggunakan `echo` tidak diperlukan dan bisa dihapus.

## Source Code 

```
<?php

//Buat class Mahasiswa untuk menyimpan data mahasiswa
Class Mahasiswa {
    //Deklarasi properti untuk menyimpan nama, NIM, dan jurusan mahasiswa
    Public $nama;
    Public $nim;
    Public $jurusan;

    //Constructor digunakan pada saat membuat objek baru
    Public function __construct ($nama, $nim, $jurusan) {
        $this->nama = $nama; // Menetapkan nilai properti nama dengan nilai yang diberikan
        $this->nim = $nim; // Menetapkan nilai properti nim dengan nilai yang diberikan
        $this->jurusan = $jurusan; // Menetapkan nilai properti jurusan dengan nilai yang diberikan
    }

    //Fungsi ini digunakan untuk menampilkan data Mahasiswa
    Public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

//Buat objek Mahasiswa baru
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");
//Echo untuk menampilkan data 
Echo $mahasiswa1->tampilkanData(); //Output : "Nama: Ghina, NIM: 230102012, Jurusan: Komputer Dan Bisnis"

?>
```

## Output

```
Nama: Ghina
NIM: 230102012
Jurusan: Komputer Dan Bisnis
```

#### 2. Encapsulation
Encapsulation adalah untuk menyembunyikan detail implementasi objek dengan membuat atribut sebagai `private` atau `protected`, yang berarti data tidak bisa diakses langsung dari luar kelas. Sebagai gantinya, data hanya dapat diakses atau dimodifikasi melalui metode khusus yang disediakan oleh kelas, seperti getter dan setter. Metode ini memberikan cara yang terkontrol untuk berinteraksi dengan data objek, memastikan bahwa perubahan dilakukan dengan cara yang konsisten dan aman. Dengan encapsulation, Anda dapat melindungi data internal dan mengurangi risiko kesalahan yang mungkin terjadi jika data diakses langsung.
a. Mendefinisikan class Mahasiswa dan property

```
Class Mahasiswa {
    //Properti ini digunakan untuk menyimpan nama, NIM, dan jurusan mahasiswa
    Private $name;
    Private $nim;
    Private $jurusan;
```

Dalam kelas `Mahasiswa`, terdapat tiga properti yang dideklarasikan sebagai `private`: `$name`, `$nim`, dan `$jurusan`. Properti ini digunakan untuk menyimpan informasi pribadi mahasiswa, yaitu nama, nomor induk mahasiswa (NIM), dan jurusan. Dengan mendeklarasikan properti sebagai `private`, data tersebut hanya dapat diakses dan dimodifikasi melalui metode dalam kelas `Mahasiswa`, melindungi data dari akses langsung dari luar kelas dan memastikan integritas data tetap terjaga.

b. Constructor menggunakan __construct

```
Public function __construct ($nama,$nim,$jurusan) {
        $this->nama = $nama; // Mengisi properti nama dengan nilai yang                                     diberikan
        $this->nim = $nim; // Mengisi properti nim dengan nilai yang                                       diberikan
        $this->jurusan = $jurusan; // Mengisi properti jurusan dengan nilai                                        yang diberikan
}
```
Metode `__construct($nama, $nim, $jurusan)` adalah konstruktor dalam kelas `Mahasiswa` yang dijalankan saat objek dibuat. Konstruktor ini menerima tiga parameter—`$nama`, `$nim`, dan `$jurusan`—dan mengisi properti `private` yang sesuai dengan nilai-nilai yang diberikan. Dengan demikian, saat objek `Mahasiswa` dibuat, properti `nama`, `nim`, dan `jurusan` akan diinisialisasi dengan nilai-nilai tersebut.

c. Penggunaan getter dan setter

```
Public function getNama() {
    return $this->nama;
}

//Fungsi ini untuk mengambil (mendapatkan) nilai nim mahasiswa
Public function getNim() {
    return $this->nim;
}

//Fungsi ini untuk mengambil (mendapatkan) nilai jurusan mahasiswa
Public function getJurusan() {
    return $this->jurusan;
}

//Fungsi ini untuk mengubah (mengatur) nama mahasiswa dengan nilai baru
Public function setNama($nama) {
    $this->nama = $nama;
}

//Fungsi ini untuk mengubah (mengatur) nim mahasiswa dengan nilai baru
Public function setNim($nim) {
    $this->nim = $nim;
}

//Fungsi ini untuk mengubah (mengatur) jurusan mahasiswa dengan nilai baru
Public function setJurusan($jurusan) {
    $this->jurusan = $jurusan;
}
```
Metode `get` dan `set` dalam kelas `Mahasiswa` digunakan untuk mengakses dan mengubah nilai properti `private`. Metode `get` seperti `getNama()`, `getNim()`, dan `getJurusan()` digunakan untuk mengambil nilai dari properti `nama`, `nim`, dan `jurusan`. Sebaliknya, metode `set` seperti `setNama($nama)`, `setNim($nim)`, dan `setJurusan($jurusan)` digunakan untuk mengubah nilai properti tersebut dengan nilai baru yang diberikan. Dengan cara ini, encapsulation diterapkan untuk melindungi data objek dan memastikan akses yang terkontrol terhadap atribut-atributnya.

d. Instansiasi objek

```
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");
```








