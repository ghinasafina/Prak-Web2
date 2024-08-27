<?php
//definisi class
class Buku {
    //atribut atau properties
    public $judul;
    public $penulis;

    //constructor
    public function __construct($judul,$penulis){
        $this->judul =$judul;
        $this->penulis =$penulis;
    }

    //Metode atau Function
    public function tampilkanInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}

//Instansi Objek
$buku1 = new Buku("Pemrograman PHP","Andi Prasetyo");
echo $buku1->tampilkanInfo();
?>