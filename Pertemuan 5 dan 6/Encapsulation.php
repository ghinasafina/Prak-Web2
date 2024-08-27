<?php

// Mendefinisikan kelas BankAccount
class BankAccount {
    // Mendeklarasikan atribut privat untuk menyimpan saldo akun
    private $balance;

    // Konstruktor untuk menginisialisasi saldo awal saat objek BankAccount dibuat
    public function __construct($balance) {
        // Mengatur nilai saldo awal
        $this->balance = $balance;
    }
    
    // Metode untuk menyetor uang ke akun
    public function deposit($amount) {
        // Mengecek apakah jumlah yang disetor lebih besar dari 0
        if ($amount > 0) {
            // Menambahkan jumlah yang disetor ke saldo akun
            $this->balance += $amount;
        }
    }

    // Metode untuk menarik uang dari akun
    public function withdraw($amount) {
        // Mengecek apakah jumlah yang ditarik lebih besar dari 0 dan tidak melebihi saldo akun
        if ($amount > 0 && $amount <= $this->balance) {
            // Mengurangi jumlah yang ditarik dari saldo akun
            $this->balance -= $amount;
        }
    }
    
    // Metode untuk mendapatkan saldo akun saat ini
    public function getBalance() {
        // Mengembalikan nilai saldo akun
        return $this->balance;
    }
}

// Membuat objek BankAccount dengan saldo awal 1000
$account = new BankAccount(1000);

// Menyetor 500 ke dalam akun
$account->deposit(500);

// Menarik 200 dari akun
$account->withdraw(200);

// Menampilkan saldo akun saat ini dengan menggunakan metode getBalance
// Outputnya adalah "Current Balance: 1300"
echo "Current Balance: " . $account->getBalance();

?>
