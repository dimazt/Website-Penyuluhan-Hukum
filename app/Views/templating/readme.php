CARA PENGGUNAAN : 

1 . Semua template di taruh di folder templating
2 . Kegunaannya agar mempermudah dalam berpindah halaman tanpa menuliskan baris code/ tidak menginisialisasikan desain yang tidak berubah, contohnya : Navigasi dan Footer, 
3 . Cara penggunaannya : semua desain yang bersifat tetap seperti navigasi, footer, header di taruh di masing-masing file template
    Konten yang akan ditampilkan dan sifatnya berubah-ubah di inisialisasikan menggunakan code berikut 
    <?= $this->renderSection('key') ?> 
    'key' dapat diganti sebagai penanda
    Kode diatas di inisialisasikan kedalam layout yang berguna untuk menampilkan Konten
    Kemudian buat file konten yang akan ditampilkan
    Sebagai contoh home.php di folder home-page
    Maka di dalam file home.php harus di tambahkan baris code sebagai berikut :
    <?= $this->extend('folder/nama-template') ?>
    <?= $this->extend('templating/template-admin') ?>
    code ini berfungsi untuk memberi tahu bahwa halaman ini adalah bagian dari halaman template admin 
    kemudian ambil key yang tadi sudah di buat dengan code
    <?= $this->section('key') ?>
    kemudian isi dengan konten yang akan ditampilkan
    kemudian diakhiri dengan code 
    <?= $this->endSection() ?>

    code secara lengkap sebagai berikut :
    <?= $this->extend('templating/template-admin') ?>
    <?= $this->section('key') ?>
    // Konten yang ditampilkan
    <?= $this->endSection() ?>


