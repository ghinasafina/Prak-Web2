# P WEB 2 - Pemrograman Berorientasi Objek (OOP) dalam PHP
## Daftar Isi
- [Modul Pertemuan 1 dan 2](#Modul_Pertemuan_1_dan_2)
    - [Membuat Class dan Object](#Membuat_Class_dan_Object)
    - [Implementasi Constructor](#Implementasi_Constructor)
    - [Membuat Metode Tambahan](#Membuat_Metode_Tambahan)
    - [Penggunaan Atribut dan Metode](#Penggunaan_Atribut_dan_Metode)
- [Modul Pertemuan 3 dan 4](#Modul_Pertemuan_3_dan_4)
- [Modul Pertemuan 5 dan 6](#Modul_Pertemuan_5_dan_6)

## Modul Pertemuan 1 dan 2
#### 1. Membuat Class dan Object
Class adalah blueprint atau rancangan untuk membuat objek. Class dapat berisi atribut (properti) dan metode (fungsi). Sedangkan Objek adalah instansiasi dari class. Setiap objek memiliki atribut dan metode yang ditentukan oleh kelasnya. 
<pre></pre>
a. Mendefinisikan class Mahasiswa

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
a. Mendefinisikan class Mahasiswa

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
## 3. Membuat metode tambahan
a. Mendefinisikan class Mahasiswa

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
a. Mendefinisikan class Mahasiswa
```
class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
```
Class Mahasiswa memiliki tiga properti publik yaitu $nama: Untuk menyimpan nama mahasiswa. $nim: Untuk menyimpan Nomor Induk Mahasiswa (NIM). $jurusan: Untuk menyimpan jurusan mahasiswa.

b. Constructor dari __construct














