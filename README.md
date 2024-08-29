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
Baris kode `$mahasiswa1 = new Mahasiswa("Ghina", "230102012", "Komputer Dan Bisnis");` membuat sebuah objek baru bernama `mahasiswa1` dari kelas `Mahasiswa`. Objek ini diinisialisasi dengan nilai-nilai yang diberikan—nama "Ghina", NIM "230102012", dan jurusan "Komputer Dan Bisnis"—melalui konstruktor kelas `Mahasiswa`. Dengan cara ini, objek `mahasiswa1` akan memiliki informasi tentang mahasiswa yang bersangkutan yang diatur saat objek dibuat.

e. Menampilkan data awal sebelum perubahan

```
     echo "Nama : " . $mahasiswa1->getNama() . "<br>";
     echo "NIM : " . $mahasiswa1->getNim() . "<br>";
     echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";
```

Baris kode ini menampilkan informasi tentang objek `mahasiswa1`. Metode `getNama()`, `getNim()`, dan `getJurusan()` digunakan untuk mengambil nilai dari properti objek, dan nilai-nilai tersebut dicetak bersama label di baris terpisah.

f. Menampilkan data setelah perubahan

```
     echo "<br>Setelah perubahan:<br>";
     echo "Nama : " . $mahasiswa1->getNama() . "<br>";
     echo "NIM : " . $mahasiswa1->getNim() . "<br>";
     echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";
```
Baris kode ini menampilkan informasi tentang objek `mahasiswa1` setelah perubahan. Label "<br>Setelah perubahan:<br>" ditampilkan terlebih dahulu, diikuti oleh nama, NIM, dan jurusan yang diambil menggunakan metode `getNama()`, `getNim()`, dan `getJurusan()`, masing-masing dicetak di baris baru.

## Source Code

```
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
      $mahasiswa1->setNim("240102012");               // Mengubah NIM mahasiswa menjadi "240102012"
      $mahasiswa1->setJurusan("Teknik Informatika");  // Mengubah jurusan mahasiswa menjadi "Teknik Informatika"
  
      // Menampilkan data mahasiswa setelah perubahan dengan memanggil metode getter
      echo "<br>Setelah perubahan:<br>";                     // Mencetak teks "Setelah perubahan" untuk menunjukkan perubahan data
      echo "Nama : " . $mahasiswa1->getNama() . "<br>";      // Menampilkan nama mahasiswa yang telah diperbarui
      echo "NIM : " . $mahasiswa1->getNim() . "<br>";        // Menampilkan NIM mahasiswa yang telah diperbarui
      echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";// Menampilkan jurusan mahasiswa yang telah diperbarui
  ?>
```

## Output

```
Nama : Ghina S.A
NIM : 230102012
Jurusan : Komputer dan Bisnis

Setelah perubahan:
Nama : Ghina
NIM : 240102012
Jurusan : Teknik Informatika
```

#### 3. Inheritance
Inheritance (pewarisan) dalam PHP OOP adalah konsep di mana sebuah kelas baru (kelas anak) mewarisi atribut dan metode dari kelas yang sudah ada (kelas induk). Ini memungkinkan kelas anak untuk menggunakan atau mengubah fungsionalitas yang sudah ada di kelas induk tanpa harus menulis ulang kode. Pewarisan mempermudah pemrograman dengan memungkinkan kode yang terstruktur dan penggunaan kembali kode secara efisien.
a. Mendefinisikan class Pengguna

```
Class Mahasiswa {
    Protected $nama;
```
Dalam kelas `Mahasiswa`, atribut `$nama` dideklarasikan sebagai `protected`, yang berarti atribut ini hanya bisa diakses dan diubah dari dalam kelas `Mahasiswa` dan juga oleh kelas-kelas yang mewarisi `Mahasiswa`. Dengan menggunakan `protected`, Anda membatasi akses langsung ke atribut dari luar kelas, tetapi tetap memungkinkan kelas anak untuk mengakses dan memodifikasinya.

b. Constructor pengguna

```
Public function __construct($nama) {
        $this->nama =$nama; //Menyimpan nama mahasiswa ke dalam properti
    }
```

Metode `__construct($nama)` adalah konstruktor yang menginisialisasi objek `Mahasiswa` dengan nama yang diberikan. Konstruktor ini menyimpan nilai parameter `$nama` ke dalam properti `$nama` objek.

c. Metode getName()

```
 Public function getNama() {
        return $this->nama; //Mengembalikan nilai nama mahasiswa
    }
}
```

Metode `getNama()` adalah fungsi yang mengembalikan nilai dari properti `$nama` objek `Mahasiswa`. Dengan cara ini, pengguna dapat mengakses nama mahasiswa tanpa mengubah data aslinya.

d. Mendefinisikan class Dosen

```
Class Dosen extends Mahasiswa {
    //Properti ini menyimpan mata kuliah yang diajarkan oleh dosen
    Private $mataKuliah; //hanya bisa diakses dalam kelas ini
```
Dalam kelas `Dosen`, properti `$mataKuliah` dideklarasikan sebagai `private`, sehingga hanya dapat diakses dan diubah di dalam kelas `Dosen` saja. Ini melindungi data mata kuliah dari akses langsung oleh kelas lain, termasuk kelas `Mahasiswa` yang diwarisi.

e. Constructor Dosen

```
Public function __construct($nama,$mataKuliah) {
        Parent::__construct($nama); //Memanggil constructor kelas induk untuk mengatur nama
        $this->mataKuliah = $mataKuliah; //Menyimpan mata kuliah dosen ke dalam properti
    }
```

Konstruktor `__construct($nama, $mataKuliah)` dalam kelas `Dosen` memanggil konstruktor dari kelas induk (`Mahasiswa`) untuk mengatur properti `$nama`, kemudian menyimpan nilai `$mataKuliah` ke dalam properti `private` `$mataKuliah` milik kelas `Dosen`. Dengan cara ini, objek `Dosen` diinisialisasi dengan nama dari kelas induk dan mata kuliah tambahan khusus untuk `Dosen`.

f. Metode getMataKuliah()

```
Public function getmataKuliah() {
     return $this->mataKuliah; //Mengembalikan nilai mata kuliah dosen
}
```
Metode `getmataKuliah()` mengembalikan nilai dari properti `private` `$mataKuliah` milik kelas `Dosen`. Fungsi ini memungkinkan untuk mengakses informasi mata kuliah yang diajarkan oleh dosen tanpa mengubah nilai aslinya.

g. Instansiasi objek class Dosen

```
$dosen1 = new Dosen("Ghina", "P WEB 2");
```

Baris kode `$dosen1 = new Dosen("Ghina", "P WEB 2");` membuat objek baru bernama `dosen1` dari kelas `Dosen`. Konstruktor kelas `Dosen` dipanggil dengan dua argumen: `"Ghina"` untuk nama dan `"P WEB 2"` untuk mata kuliah. Objek `dosen1` diinisialisasi dengan nama "Ghina" dan mata kuliah "P WEB 2" sesuai dengan nilai yang diberikan.

h. Menampilkan data Dosen

```
Echo $dosen1->getNama(); // Output: Ghina
Echo "<br>";
// Menampilkan mata kuliah yang diajarkan dosen
Echo $dosen1->getmataKuliah(); //Output: P WEB 2

```
`echo $dosen1->getNama();` mencetak nama dosen, yaitu "Ghina", dengan menggunakan metode `getNama()`. Selanjutnya, `echo "<br>";` menambahkan baris baru di antara output untuk pemisahan. Terakhir, `echo $dosen1->getmataKuliah();` mencetak mata kuliah yang diajarkan oleh dosen, yaitu "P WEB 2", menggunakan metode `getmataKuliah()`. Dengan demikian, data mengenai nama dan mata kuliah dosen ditampilkan secara terpisah di layar.

## Source Code

```
<?php

//Buat Class Mahasiswa untuk menyimpan data mahasiswa
Class Mahasiswa {
    Protected $nama; //hanya bisa diakses oleh kelas ini dan kelas turunan.

    Public function __construct($nama) {
        $this->nama =$nama; //Menyimpan nama mahasiswa ke dalam properti
    }

    //Fungsi ini untuk mendapatkan (mengambil) nama mahasiswa
    Public function getNama() {
        return $this->nama; //Mengembalikan nilai nama mahasiswa
    }
}

//Class Dosen adalah turunan dari Class Mahasiswa
//Class ini menambahkan properti dan metode untuk mata kuliah yang diajarkan
Class Dosen extends Mahasiswa {
    //Properti ini menyimpan mata kuliah yang diajarkan oleh dosen
    Private $mataKuliah; //hanya bisa diakses dalam kelas ini

    Public function __construct($nama,$mataKuliah) {
        Parent::__construct($nama); //Memanggil constructor kelas induk untuk mengatur nama
        $this->mataKuliah = $mataKuliah; //Menyimpan mata kuliah dosen ke dalam properti
    }

    //Fungsi ini untuk mendapatkan (mengambil) mata kuliah yang diajarkan dosen
    Public function getmataKuliah() {
        return $this->mataKuliah; //Mengembalikan nilai mata kuliah dosen
    }
}

//Membuat object baru dari kelas Dosen dengan nama "Ghina" dan mata kuliah "P WEB 2"
$dosen1 = new Dosen("Ghina", "P WEB 2");
//Menampilkan nama dosen
Echo $dosen1->getNama(); // Output: Ghina
Echo "<br>";
// Menampilkan mata kuliah yang diajarkan dosen
Echo $dosen1->getmataKuliah(); //Output: P WEB 2

?>
```

## Output

```
Ghina
P WEB 2
```

#### 4. Polymorphism
Polimorfisme (Polymorphism) adalah salah satu prinsip dasar dalam pemrograman berorientasi objek (Object-Oriented Programming, OOP) yang memungkinkan objek-objek dari kelas yang berbeda untuk berinteraksi dengan cara yang sama, tetapi dapat menampilkan perilaku yang berbeda.

a. Mendefinisikan class Pengguna

```
Class pengguna{
    Public function __construct(){
    //Tidak ada inisialisasi khusus saat membuat object Mahasiswa
    }
```
Kelas `Pengguna` memiliki konstruktor `__construct()` yang tidak melakukan inisialisasi khusus saat objek dibuat. Ini berarti bahwa saat objek dari kelas `Pengguna` dibuat, tidak ada pengaturan atau tindakan khusus yang dilakukan oleh konstruktor.

b. Method tampilkanData()

```
Public function aksesFitur(){
    return "Akses fitur untuk semua Pengguna.";
}
```
Metode `aksesFitur()` mengembalikan string "Akses fitur untuk semua Pengguna." Ini menunjukkan bahwa setiap objek dari kelas `Pengguna` memiliki akses ke fitur yang ditawarkan tanpa membedakan jenis pengguna.

c. Mendefinisikan class Dosen

```
Class Dosen extends Pengguna{
    Public function __construct(){
    
    }
    
    //Ini memberikan akses fitur khusus untuk dosen
    Public function aksesFitur(){
        return "Akses fitur khusus untuk Dosen: Mengelola nilai mahasiswa dan mengajar.";
    }
}
```

Kelas `Dosen` mewarisi dari kelas `Pengguna`. Konstruktor `__construct()` tidak melakukan inisialisasi khusus. Metode `aksesFitur()` dalam kelas `Dosen` mengembalikan string "Akses fitur khusus untuk Dosen: Mengelola nilai mahasiswa dan mengajar." Ini menunjukkan bahwa metode ini memberikan akses ke fitur tambahan yang khusus untuk dosen, berbeda dari fitur umum di kelas `Pengguna`.

d. Mendefinisikan class Pengguna

```
Class Mahasiswa extends Pengguna{
    Public function __construct(){
    
    }
    
    //Ini memberikan akses fitur khusus untuk mahasiswa
    Public function aksesFitur(){
        return "Akses fitur khusus untuk Mahasiswa: Melihat jadwal, mengumpulkan tugas, dan melihat nilai.";
    }
}
```

Kelas `Mahasiswa` mewarisi dari kelas `Pengguna`. Konstruktor `__construct()` tidak melakukan inisialisasi khusus. Metode `aksesFitur()` dalam kelas `Mahasiswa` mengembalikan string "Akses fitur khusus untuk Mahasiswa: Melihat jadwal, mengumpulkan tugas, dan melihat nilai." Ini menunjukkan bahwa metode ini memberikan akses ke fitur yang khusus untuk mahasiswa, berbeda dari fitur yang diberikan oleh kelas `Pengguna`.

e. Instansiasi Objek

```
$pengguna = new Pengguna();
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();
```
Baris kode ini membuat tiga objek dari kelas yang berbeda: `$pengguna` dari kelas `Pengguna`, `$dosen` dari kelas `Dosen` (yang mewarisi dari `Pengguna`), dan `$mahasiswa` dari kelas `Mahasiswa` (juga mewarisi dari `Pengguna`). Setiap objek dapat menggunakan metode dan atribut sesuai dengan kelasnya masing-masing.

f. Menampilkan data

```
Echo $pengguna->aksesFitur() . "<br>"; //Menampilkan fitur untuk Pengguna
Echo $dosen->aksesFitur() . "<br>";   //Menampilkan fitur khusus untuk Dosen
Echo $mahasiswa->aksesFitur();         //Menampilkan fitur khusus untuk Mahasiswa
```
Baris kode ini menampilkan fitur untuk setiap objek dengan memanggil metode `aksesFitur()`. `echo $pengguna->aksesFitur() . "<br>";` menampilkan fitur umum untuk objek `Pengguna`. `echo $dosen->aksesFitur() . "<br>";` menampilkan fitur khusus untuk objek `Dosen`, dan `echo $mahasiswa->aksesFitur();` menampilkan fitur khusus untuk objek `Mahasiswa`. 

## Source Code

```
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
```

## Output

```
Akses fitur untuk semua Pengguna.
Akses fitur khusus untuk Dosen: Mengelola nilai mahasiswa dan mengajar.
Akses fitur khusus untuk Mahasiswa: Melihat jadwal, mengumpulkan tugas, dan melihat nilai.
```

#### 5. Abstraction
Abstraction dalam OOP berarti menyembunyikan detail teknis dari cara kerja sebuah objek dan hanya menampilkan informasi yang relevan kepada pengguna. Contohnya, Anda bisa mengemudikan mobil tanpa perlu tahu bagaimana mesinnya bekerja secara rinci. Dalam pemrograman, abstraction memungkinkan Anda menggunakan objek dengan cara yang mudah, tanpa harus memahami semua aspek teknis yang mendasarinya.

a. class abstract Pengguna

```
abstract Class Pengguna {
    //Metode ini harus diimplementasikan oleh kelas turunan
    abstract public function aksesFitur();
}
```
Kelas `Pengguna` adalah kelas abstrak yang mendeklarasikan metode `aksesFitur()` sebagai metode abstrak. Ini berarti bahwa setiap kelas yang mewarisi `Pengguna` harus mengimplementasikan metode `aksesFitur()`. Kelas abstrak tidak bisa diinstansiasi secara langsung dan berfungsi sebagai template untuk kelas turunan.

b. Mendefinisikan class Dosen

```
Class Dosen extends Pengguna {
    //Mengimplementasikan metode aksesFitur() untuk Dosen
    Public function aksesFitur() {
        //Mengembalikan pesan yang menunjukkan fitur yang bisa diakses oleh Dosen
        Echo "Akses fitur sebagai Dosen. Anda bisa melihat nilai dan mengedit materi.";
    }
}
```
Kelas `Dosen` adalah kelas turunan dari kelas abstrak `Pengguna`. Di dalam kelas ini, metode `aksesFitur()` diimplementasikan untuk memberikan fitur khusus bagi objek `Dosen`. Ketika metode ini dipanggil, akan menampilkan pesan yang menyatakan bahwa dosen memiliki akses untuk melihat nilai dan mengedit materi. Ini adalah contoh bagaimana kelas turunan mengimplementasikan metode abstrak dari kelas induknya.

c. Mendefinisikan class Mahasiswa

```
Class Mahasiswa extends Pengguna {
    //Mengimplementasikan metode aksesFitur() untuk Mahasiswa
    Public function aksesFitur() {
        //Mengembalikan pesan yang menunjukkan fitur yang bisa diakses oleh         Mahasiswa
        Echo "Akses fitur sebagai Mahasiswa. Anda bisa melihat jadwal dan                 mengumpulkan tugas.";
    }
}
```
Kelas `Mahasiswa` merupakan turunan dari kelas abstrak `Pengguna` dan mengimplementasikan metode `aksesFitur()`. Dalam metode ini, ketika dipanggil, akan menampilkan pesan yang menunjukkan fitur-fitur yang tersedia bagi objek `Mahasiswa`, yaitu kemampuan untuk melihat jadwal dan mengumpulkan tugas. Ini menunjukkan bagaimana kelas `Mahasiswa` memberikan implementasi spesifik untuk metode abstrak yang ada di kelas induk `Pengguna`.

d. Instansiasi Objek

```
$dosen = new Dosen(); //Membuat object Dosen
$mahasiswa = new Mahasiswa(); //Membuat object Mahasiswa
```

Kode tersebut membuat objek `dosen` dari kelas `Dosen` dan objek `mahasiswa` dari kelas `Mahasiswa`, memungkinkan penggunaan properti dan metode dari masing-masing kelas.

e. Menampilkan data

```
$dosen->aksesFitur(); //Menampilkan fitur yang bisa diakses oleh Dosen      
$mahasiswa->aksesFitur(); //Menampilkan fitur yang bisa diakses oleh Mahasiswa
```

Kode ini memanggil metode `aksesFitur()` pada objek `dosen` dan `mahasiswa`. Metode ini kemungkinan menampilkan daftar fitur yang bisa diakses oleh masing-masing peran (`Dosen` dan `Mahasiswa`), sesuai dengan logika yang telah diimplementasikan di dalam kelas-kelas tersebut.

## Source Code

```
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
```

## Output

```
Akses fitur sebagai Dosen. Anda bisa melihat nilai dan mengedit materi.Akses fitur sebagai Mahasiswa. Anda bisa melihat jadwal dan mengumpulkan tugas.
```

## Modul Pertemuan 5 dan 6 - Jobsheet 3
Pada modul ini kita diharapkan mampu menerapkan konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP. Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance, Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

#### 1. Inheritance
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan
metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.
a. Mendefinisikan class Person

```
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
```
Kelas `Person` memiliki atribut privat `$name` untuk menyimpan nama seseorang. Konstruktor `__construct($name)` digunakan untuk menginisialisasi atribut `$name` saat objek dibuat. Metode `getName()` memungkinkan akses ke nilai atribut `$name` dari luar kelas.

b. Mendefinisikan class Student

```
class Student extends Person {
    // Atribut tambahan untuk menyimpan studentID
    private $studentID;

    // Konstruktor untuk menginisialisasi name (dari kelas Person) dan             studentID
    public function __construct($name, $studentID) {
        // Memanggil konstruktor dari kelas induk (Person) untuk mengatur             name
        parent::__construct($name);
        // Mengatur nilai studentID
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan nilai atribut studentID
    public function getStudentID() {
        return $this->studentID;
    }
}
```
Kelas `Student` adalah turunan dari kelas `Person`. Selain atribut `name` yang diwarisi, kelas ini memiliki atribut tambahan `$studentID` untuk menyimpan ID mahasiswa. Konstruktor `__construct($name, $studentID)` menginisialisasi `name` dengan memanggil konstruktor dari kelas induk menggunakan `parent::__construct($name)` dan juga mengatur nilai `$studentID`. Metode `getStudentID()` memungkinkan akses ke nilai atribut `$studentID`.

c. Instansiasi objek

```
$student = new Student("Ghina", "230102012");
```
Baris kode ini membuat objek baru dari kelas `Student` dengan nama `"Ghina"` dan ID mahasiswa `"230102012"`. Objek `student` diinisialisasi dengan konstruktor `Student`, yang menyetel nama menjadi `"Ghina"` dan ID mahasiswa menjadi `"230102012"`.

d. Menampilkan data

```
echo "Name: " . $student->getName() . "\n";
echo "<br>";
echo "Student ID: " . $student->getStudentID() . "\n";
```
Kode ini menampilkan nama dan ID mahasiswa dari objek `student`. `getName()` digunakan untuk mendapatkan nama, dan `getStudentID()` untuk mendapatkan ID mahasiswa. Hasilnya akan ditampilkan di layar dengan format yang diatur oleh `echo`.

## Source Code

```
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
```

## Output

```
Name: Ghina
Student ID: 230102012
```

#### 2. Polymorphism
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.
a. Mendefinisikan class Person

```
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
```
Kelas `Person` memiliki atribut `name` yang dilindungi (`protected`), memungkinkan akses dari kelas turunan. Konstruktor `__construct($name)` menginisialisasi atribut `name` dengan nilai yang diberikan saat objek dibuat. Metode `getName()` mengembalikan nilai atribut `name`, memungkinkan akses ke nama dari luar kelas.

b. Mendefinisikan class Student

```
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
```

Kelas `Student` adalah turunan dari kelas `Person` dan memiliki atribut `studentID` yang bersifat publik. Konstruktor `__construct($name, $studentID)` menginisialisasi atribut `name` dengan memanggil konstruktor kelas induk (`Person`) dan juga mengatur nilai `studentID`. Metode `getName()` di-override untuk menambahkan prefix `"Student: "` sebelum nama, memberikan format khusus. Metode `getStudentID()` mengembalikan nilai `studentID`.

c. Mendefinisikan class Teacher

```
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
```
Kelas `Teacher` adalah turunan dari kelas `Person` dan menambahkan atribut `teacherID` yang bersifat publik. Konstruktor `__construct($name, $teacherID)` menginisialisasi atribut `name` dengan memanggil konstruktor kelas induk (`Person`) dan juga mengatur nilai `teacherID`. Metode `getName()` di-override untuk menambahkan prefix `"Teacher: "` sebelum nama, memberikan format khusus untuk guru. Metode `getTeacherID()` mengembalikan nilai `teacherID`.

d. Instansiasi objek

```
$student = new Student("Anisya", "23415");
$teacher = new Teacher("Andi", "437890");
```
Kode ini menciptakan dua objek baru: satu dari kelas `Student` dan satu dari kelas `Teacher`. Untuk objek `student`, konstruktor `Student` diinisialisasi dengan nama `"Anisya"` dan ID mahasiswa `"23415"`. Sementara itu, objek `teacher` diinisialisasi dengan nama `"Andi"` dan ID guru `"437890"` menggunakan konstruktor `Teacher`. Keduanya menyetel atribut yang sesuai berdasarkan nilai yang diberikan saat objek dibuat.

e. Menampilkan data

```
echo $student->getName() . "<br>";        // Menampilkan nama mahasiswa dengan format khusus
echo "Student ID: " . $student->getStudentID() . "<br>"; // Menampilkan ID mahasiswa
echo "<br>";
echo $teacher->getName() . "<br>";        // Menampilkan nama guru dengan format khusus
echo "Teacher ID: " . $teacher->getTeacherID(); // Menampilkan ID guru
```

Kode ini menampilkan informasi dari objek `student` dan `teacher`. Pertama, `echo $student->getName() . "<br>";` menampilkan nama mahasiswa dengan format khusus, diikuti oleh `echo "Student ID: " . $student->getStudentID() . "<br>";` yang menunjukkan ID mahasiswa. Setelah itu, `echo $teacher->getName() . "<br>";` menampilkan nama guru dengan format khusus, dan `echo "Teacher ID: " . $teacher->getTeacherID();` menampilkan ID guru.

## Source Code

```
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
```

## Output

```
Student: Anisya
Student ID: 23415

Teacher: Andi
Teacher ID: 437890
```

#### 3. Encapsulation
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya
membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal tetap aman dari perubahan tak terduga.
a. Mendefinisikan class Person

```
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
```

Kelas `Person` mengatur atribut `name` sebagai privat, yang berarti hanya dapat diakses dari dalam kelas itu sendiri. Konstruktor `__construct($name)` digunakan untuk menginisialisasi atribut `name` dengan nilai yang diberikan saat objek dibuat. Metode `getName()` memungkinkan akses untuk membaca nilai dari atribut `name`, sementara metode `setName($name)` memungkinkan perubahan nilai atribut `name` setelah objek dibuat. Dengan cara ini, akses ke atribut `name` diatur melalui metode yang disediakan, menerapkan prinsip enkapsulasi dalam pemrograman berorientasi objek.

b. Mendefinisikan class Student

```
class Student extends Person {
    // Atribut studentID diubah menjadi private
    private $studentID;

    // Konstruktor untuk menginisialisasi name (dari Person) dan studentID
    public function __construct($name, $studentID) {
        // Memanggil konstruktor dari kelas induk (Person) untuk mengatur           name
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
 ```
Kelas `Student` adalah turunan dari kelas `Person`, dengan atribut `studentID` yang diatur sebagai privat. Konstruktor `__construct($name, $studentID)` menginisialisasi atribut `name` dengan memanggil konstruktor kelas induk `Person` dan menyetel nilai `studentID`. Metode `getStudentID()` memungkinkan akses untuk membaca nilai atribut `studentID`, sedangkan metode `setStudentID($studentID)` memungkinkan perubahan nilai atribut tersebut setelah objek dibuat. Dengan cara ini, kelas `Student` menerapkan prinsip enkapsulasi untuk mengatur akses dan modifikasi atribut `studentID`.

c. Instansiasi dan penggunaan

```
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
```

Kode ini dimulai dengan membuat objek `student` dari kelas `Student` dengan nama `"Ghina"` dan ID mahasiswa `"67890"`. Setelah objek dibuat, nama dan ID mahasiswa ditampilkan menggunakan metode `getName()` dan `getStudentID()`. Selanjutnya, nilai nama mahasiswa diubah (meskipun tetap `"Ghina"`, tidak ada perubahan pada nilai) dan ID mahasiswa diubah menjadi `"12345"` menggunakan metode `setName()` dan `setStudentID()`. Terakhir, nama dan ID mahasiswa yang telah diperbarui ditampilkan kembali, memperlihatkan perubahan ID yang baru.

## Source Code

```
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
```

## Output

```
Name: Ghina
Student ID: 67890

Updated Name: Ghina
Updated Student ID: 12345
```

#### 4. Abstraction
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.
a. Mendefinisikan class

```
abstract class Course {
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}
```

Kelas `Course` adalah kelas abstrak yang mendefinisikan metode abstrak `getCourseDetails()`. Sebagai kelas abstrak, `Course` tidak dapat diinstansiasi secara langsung dan berfungsi sebagai dasar untuk kelas-kelas lain. Metode `getCourseDetails()` dideklarasikan sebagai metode abstrak, yang berarti bahwa setiap kelas yang mewarisi dari `Course` harus menyediakan implementasi konkret untuk metode ini. Ini memastikan bahwa semua kelas turunan akan memiliki metode `getCourseDetails()` yang dapat digunakan untuk mendapatkan rincian kursus yang sesuai.


b. Mendefinisikan class OnlineCourse

```
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
```
Kelas `OnlineCourse` adalah turunan dari kelas abstrak `Course`. Kelas ini memiliki dua atribut privat: `$courseName` dan `$platform`. Konstruktor `__construct($courseName, $platform)` digunakan untuk menginisialisasi kedua atribut tersebut saat objek dibuat. 
Kelas `OnlineCourse` mengimplementasikan metode abstrak `getCourseDetails()` dari kelas `Course`, menyediakan detail spesifik untuk kursus online. Metode ini mengembalikan string yang menyebutkan nama kursus dan platform tempat kursus tersebut disediakan, misalnya, `"Online Course: Programming 101 on Udemy"`.

c. Mendefinisikan class OfflineCourse

```
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
```

Kelas `OfflineCourse` adalah subclass dari kelas abstrak `Course`. Kelas ini memiliki dua atribut privat: `$courseName` dan `$location`, yang diinisialisasi melalui konstruktor `__construct($courseName, $location)` saat objek dibuat.
`OfflineCourse` mengimplementasikan metode `getCourseDetails()` yang didefinisikan di kelas `Course`. Metode ini mengembalikan detail tentang kursus offline, mencakup nama kursus dan lokasi tempat kursus tersebut diselenggarakan. Misalnya, outputnya bisa berupa `"Offline Course: Mathematics at Room 101"`.

d. Instansiasi dan penggunaan

```
$onlineCourse = new OnlineCourse("PHP OOP", "Udemy");
$offlineCourse = new OfflineCourse("PHP OOP", "Jakarta");

echo $onlineCourse->getCourseDetails() . "\n";
echo "<br>";
echo $offlineCourse->getCourseDetails() . "\n";
```
Kode ini membuat objek `onlineCourse` dari kelas `OnlineCourse` dengan nama kursus `"PHP OOP"` dan platform `"Udemy"`, serta objek `offlineCourse` dari kelas `OfflineCourse` dengan nama kursus `"PHP OOP"` dan lokasi `"Jakarta"`. Kemudian, kode menampilkan rincian kursus dari kedua objek: `onlineCourse->getCourseDetails()` memberikan informasi kursus online, sedangkan `offlineCourse->getCourseDetails()` memberikan informasi kursus offline. Hasilnya adalah deskripsi kursus online dan offline sesuai dengan format masing-masing kelas.

## Source Code

```
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
```

## Output

```
Online Course: PHP OOP on Udemy
Offline Course: PHP OOP at Jakarta
```

#### Tugas - Implementasi kelas Person
a. Mendefinisikan class Person 

```
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // Metode getRole yang akan dioverride oleh kelas turunan
    public function getRole() {
        return "Unknown Role";
    }
}
```
Kelas `Person` memiliki atribut `name` yang dilindungi (`protected`), sehingga dapat diakses oleh kelas itu sendiri dan kelas turunannya. Konstruktor `__construct($name)` menginisialisasi atribut `name` dengan nilai yang diberikan saat objek dibuat. Metode `getName()` mengembalikan nilai dari atribut `name`. Metode `getRole()` mengembalikan string `"Unknown Role"` dan dirancang untuk di-override oleh kelas turunan, memungkinkan setiap kelas turunannya untuk memberikan implementasi yang sesuai dengan peran mereka.

b. Mendefinisikan class Dosen extends Person

```
class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Override metode getRole untuk menampilkan peran Dosen
    public function getRole() {
        return "Dosen";
    }

    // Metode untuk mendapatkan NIDN dengan Encapsulation
    public function getNidn() {
        return $this->nidn;
    }

    // Metode untuk mengatur NIDN dengan Encapsulation
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}
```

Kelas `Dosen` adalah subclass dari `Person` dengan atribut privat `$nidn` untuk nomor identifikasi dosen. Konstruktor menginisialisasi `name` dan `nidn`. Metode `getRole()` di-override untuk mengembalikan `"Dosen"`. Metode `getNidn()` dan `setNidn($nidn)` digunakan untuk mengakses dan mengubah nilai atribut `$nidn`, menerapkan enkapsulasi.

c. Mendefinisikan class Mahasiswa extends Person

```
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Override metode getRole untuk menampilkan peran Mahasiswa
    public function getRole() {
        return "Mahasiswa";
    }

    // Metode untuk mendapatkan NIM dengan Encapsulation
    public function getNim() {
        return $this->nim;
    }

    // Metode untuk mengatur NIM dengan Encapsulation
    public function setNim($nim) {
        $this->nim = $nim;
    }
}
```
Kelas `Mahasiswa` adalah subclass dari `Person` dengan atribut privat `$nim` yang menyimpan nomor induk mahasiswa. Konstruktor `__construct($name, $nim)` menginisialisasi atribut `name` menggunakan konstruktor kelas induk (`Person`) dan menyetel nilai `$nim`.
Metode `getRole()` di-override untuk mengembalikan string `"Mahasiswa"`, menandakan peran khusus kelas ini sebagai mahasiswa.
Kelas `Mahasiswa` juga menyediakan metode `getNim()` untuk mendapatkan nilai atribut `$nim` dan metode `setNim($nim)` untuk mengubah nilai atribut tersebut, menerapkan prinsip enkapsulasi.

c. Abstraction dengan class Abstrak Jurnal

```
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function submit();
}

// Kelas JurnalDosen yang mewarisi dari Jurnal
class JurnalDosen extends Jurnal {
    public function submit() {
        // Logika untuk pengajuan jurnal oleh Dosen
        return "Jurnal Dosen dengan judul '{$this->judul}' telah diajukan.";
    }
}

// Kelas JurnalMahasiswa yang mewarisi dari Jurnal
class JurnalMahasiswa extends Jurnal {
    public function submit() {
        // Logika untuk pengajuan jurnal oleh Mahasiswa
        return "Jurnal Mahasiswa dengan judul '{$this->judul}' telah diajukan.";
    }
}
```
Kelas `Jurnal` adalah kelas abstrak dengan atribut `judul` dan metode abstrak `submit()`. Kelas `JurnalDosen` dan `JurnalMahasiswa` adalah turunan dari `Jurnal` yang mengimplementasikan metode `submit()` untuk mengajukan jurnal dengan pesan yang sesuai: `"Jurnal Dosen dengan judul '{$this->judul}' telah diajukan."` dan `"Jurnal Mahasiswa dengan judul '{$this->judul}' telah diajukan."`.

d. Instansiasi dan penggunaan

```
$dosen = new Dosen("Chaska", "1796352");
$mahasiswa = new Mahasiswa("Ghina", "230202017");

echo $dosen->getName() . " adalah " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";

$jurnalDosen = new JurnalDosen("Penelitian Limbah");
$jurnalMahasiswa = new JurnalMahasiswa("Studi Kasus PHP OOP");

echo $jurnalDosen->submit() . "<br>";
echo $jurnalMahasiswa->submit() . "<br>";
```

Kode ini membuat objek `Dosen` dan `Mahasiswa`, lalu menampilkan nama, peran, serta NIDN dan NIM mereka. Selanjutnya, kode membuat objek `JurnalDosen` dan `JurnalMahasiswa`, dan menampilkan pesan pengajuan jurnal masing-masing.

## Source Code

```
<?php

// Kelas Person sebagai induk dari Dosen dan Mahasiswa
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // Metode getRole yang akan dioverride oleh kelas turunan
    public function getRole() {
        return "Unknown Role";
    }
}

// Kelas Dosen yang mewarisi dari Person
class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Override metode getRole untuk menampilkan peran Dosen
    public function getRole() {
        return "Dosen";
    }

    // Metode untuk mendapatkan NIDN dengan Encapsulation
    public function getNidn() {
        return $this->nidn;
    }

    // Metode untuk mengatur NIDN dengan Encapsulation
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}

// Kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Override metode getRole untuk menampilkan peran Mahasiswa
    public function getRole() {
        return "Mahasiswa";
    }

    // Metode untuk mendapatkan NIM dengan Encapsulation
    public function getNim() {
        return $this->nim;
    }

    // Metode untuk mengatur NIM dengan Encapsulation
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Kelas abstrak Jurnal sebagai template untuk jurnal dosen dan mahasiswa
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function submit();
}

// Kelas JurnalDosen yang mewarisi dari Jurnal
class JurnalDosen extends Jurnal {
    public function submit() {
        // Logika untuk pengajuan jurnal oleh Dosen
        return "Jurnal Dosen dengan judul '{$this->judul}' telah diajukan.";
    }
}

// Kelas JurnalMahasiswa yang mewarisi dari Jurnal
class JurnalMahasiswa extends Jurnal {
    public function submit() {
        // Logika untuk pengajuan jurnal oleh Mahasiswa
        return "Jurnal Mahasiswa dengan judul '{$this->judul}' telah diajukan.";
    }
}

// Contoh penggunaan
$dosen = new Dosen("Chaska", "1796352");
$mahasiswa = new Mahasiswa("Ghina", "230202017");

echo $dosen->getName() . " adalah " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";

$jurnalDosen = new JurnalDosen("Penelitian Limbah");
$jurnalMahasiswa = new JurnalMahasiswa("Studi Kasus PHP OOP");

echo $jurnalDosen->submit() . "<br>";
echo $jurnalMahasiswa->submit() . "<br>";
?>
```

## Output

```
Chaska adalah Dosen dengan NIDN: 1796352
Ghina adalah Mahasiswa dengan NIM: 230202017
Jurnal Dosen dengan judul 'Penelitian Limbah' telah diajukan.
Jurnal Mahasiswa dengan judul 'Studi Kasus PHP OOP' telah diajukan.
```

******************End******************

