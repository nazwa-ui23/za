<?php
// 
interface Notifikasi {
    public function kirim($pesan);
}

// 
class Email implements Notifikasi {
    private $emailTujuan;

    public function __construct($emailTujuan) {
        $this->emailTujuan = $emailTujuan;
    }

    public function kirim($pesan) {
        return "Mengirim Email ke " . $this->emailTujuan . " dengan pesan: " . $pesan . "\n";
    }
}


class WhatsApp implements Notifikasi {
    private $nomorHp;

    public function __construct($nomorHp) {
        $this->nomorHp = $nomorHp;
    }

    public function kirim($pesan) {
        return "Mengirim WhatsApp ke " . $this->nomorHp . " dengan pesan: " . $pesan . "\n";
    }
}


class SMS implements Notifikasi {
    private $nomorHp;

    public function __construct($nomorHp) {
        $this->nomorHp = $nomorHp;
    }

    public function kirim($pesan) {
        return "Mengirim SMS ke " . $this->nomorHp . " dengan pesan: " . $pesan . "\n";
    }
}



$notif1 = new Email("user@email.com");
echo $notif1->kirim("Laporan tagihan bulan ini telah dilampirkan.");

$notif2 = new WhatsApp("08123456789");
echo $notif2->kirim("Halo! Pesanan Anda sedang diproses.");

$notif3 = new SMS("08987654321");
echo $notif3->kirim("Kode OTP Anda adalah 883921.");
?>
