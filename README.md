# Lab10Web
## 1️⃣ Membuat Database & Tabel di phpMyAdmin

Pada tahap awal, saya membuka phpMyAdmin dan membuat sebuah database baru dengan nama:

lab10db


Setelah itu saya membuat tabel bernama mahasiswa menggunakan query SQL berikut:

CREATE TABLE mahasiswa (
  nim VARCHAR(20) NOT NULL,
  nama VARCHAR(50) NOT NULL,
  alamat VARCHAR(100) NOT NULL
);


Screenshot menunjukkan tampilan phpMyAdmin saat mengetik query tersebut sebelum dieksekusi.

<img width="791" height="413" alt="Screenshot 2025-12-03 114704" src="https://github.com/user-attachments/assets/d71cb555-6648-40ec-a282-bc1e7aca8b6e" />


## 2️⃣ Struktur Tabel Setelah Berhasil Dibuat

Setelah menekan tombol Go, tabel mahasiswa berhasil dibuat.
Pada screenshot kedua terlihat struktur tabel yang berisi:

<img width="1330" height="291" alt="Screenshot 2025-12-03 114750" src="https://github.com/user-attachments/assets/f9489c1a-3c6e-411f-8449-c5c8b4db6d07" />


Struktur ini akan digunakan untuk menyimpan data dari form input di aplikasi PHP OOP.


## 3️⃣ Tampilan Folder di localhost (Index of /lab10_php_oop)

Screenshot ketiga menampilkan halaman:

localhost/lab10_php_oop/

<img width="669" height="392" alt="Screenshot 2025-12-03 121611" src="https://github.com/user-attachments/assets/4be214ff-f08f-450c-a741-52bf47459a96" />


Pada halaman tersebut terlihat seluruh file yang digunakan dalam praktikum:

* config.php

* database.php

* form.php

* form_input.php

* mobil.php

* proses_input.php

Semua file sudah berada dalam satu folder yang benar sesuai instruksi praktikum.


## 4️⃣ Hasil Eksekusi mobil.php

Screenshot keempat menunjukkan output dari file mobil.php.
Tampilannya adalah:

<img width="489" height="322" alt="Screenshot 2025-12-03 121952" src="https://github.com/user-attachments/assets/a1f51157-7c3e-4e3e-915c-1bd067fcf30e" />


Hal ini membuktikan bahwa class Mobil berjalan dengan baik, termasuk constructor dan method-nya.


## 5️⃣ Tampilan Form dari form_input.php

Screenshot kelima menampilkan form yang dihasilkan oleh class Form dalam file form.php.

Form terdiri dari tiga input:

* NIM

* Nama

* Alamat

Di bagian bawah terdapat tombol:

Simpan Data

Input form bersifat opsional untuk contoh screenshot—yang penting struktur form-nya tampil dengan benar.

<img width="560" height="345" alt="Screenshot 2025-12-03 122316" src="https://github.com/user-attachments/assets/f3409fec-258d-4b4e-88ed-14ff109a1214" />


## 6️⃣ Output Berhasil: “Data berhasil disimpan”

Screenshot terakhir menampilkan hasil setelah menekan tombol Submit.
Tampilan:

<img width="493" height="191" alt="Screenshot 2025-12-03 122336" src="https://github.com/user-attachments/assets/689930f7-0c2d-446c-8981-9f91f59d8c6b" />

Ini menunjukkan:

1. form_input.php mengirim data POST dengan benar

2. proses_input.php berhasil membaca data

3. database.php berhasil terkoneksi dengan MySQL

4. fungsi insert() berhasil memasukkan data ke tabel mahasiswa

Praktikum dinyatakan berhasil tanpa error.


---

🎉 KESIMPULAN

Seluruh proses mulai dari pembuatan database, class library, form input, hingga proses penyimpanan data telah berjalan dengan baik.

Aplikasi:

> Tidak error

> Tidak ada undefined index

> Data berhasil masuk database

> Struktur file sesuai instruksi modul

Praktikum selesai dengan hasil yang lengkap.
