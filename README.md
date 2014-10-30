#### Overview

* * *
Elektronikpmr
merupakan aplikasi web yang dapat digunakan untuk menyimpan data
riwayat pengobatan pasien. 

#### Requirement

* * *
Untuk dapat
digunakan, elektronikpmr membutuhkan:

*   PHP 5.4+
*   Database MySQL
*   ekstensi php_pdo_mysql terinstall dan aktif di file php.ini

#### Aplikasi ini cocok digunakan untuk:

* * *

*   Apoteker atau tenaga kesehatan lain yang perlu mencatat
riwayat pengobatan pasien
*   Digunakan di server lokal atau komputer pribadi

#### Aplikasi ini tidak cocok digunakan untuk:

* * *

*   Digunakan selain oleh Apoteker atau tenaga kesehatan
*   Digunakan di server online

#### Instalasi

* * *
Langkah-langkah
instalasi:

1.  Install &amp; jalankan&nbsp;[XAMPP](https://www.apachefriends.org/index.html)
2.  Download aplikasi elektronikpmr
3.  Ekstrak zip dan pindahkan ke folder htdocs
4.  Buat database melalui phpmyadmin
5.  Buka file 'vendor/medoo.php' dengan text editor dan edit
konfigurasi database MySQL
6.  Import 'pmre.sql' ke database melalui phpmyadmin
7.  Aplikasi elektronikpmr sudah dapat digunakan, akses melalui
web browser
8.  nb: untuk menambah dan merubah daftar dokter, buka
'form/form_tambah_kunjungan.html' dan edit baris ke 21-24

#### Komponen

* * *
Aplikasi
elektronikpmr menggunakan beberapa komponen, diantaranya:

1.  [Medoo Database
Framework](http://medoo.in/)
2.  [Zurb
Foundation CSS Framework](http://foundation.zurb.com/)
3.  [datetimepicker](https://github.com/xdan/datetimepicker)
jquery plugin
4.  [NicEdit](http://nicedit.com/)
WYSIWYG editor

#### TOS

* * *
Software
elektronikpmr ini merupakan aplikasi open source. User bebas
mendownload, menggunakan, menyebarkan, dan memodifikasi source code
aplikasi. Penulis aplikasi ini tidak bertanggung jawab atas segala
kerusakan dan kerugian yang timbul akibat penggunaan aplikasi ini.