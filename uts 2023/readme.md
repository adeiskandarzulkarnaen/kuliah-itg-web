## UTS Praktikum WEB: Pembuatan Formulir Input dengan PHP dan MySQL

---

### Deskripsi Project UTS:

Pada project UTS ini, Anda akan membuat sebuah formulir input sederhana dengan menggunakan HTML dan PHP untuk mengumpulkan data mahasiswa. Data yang dimasukkan melalui formulir akan disimpan ke dalam database MySQL. Tujuan dari uts ini adalah memahami dasar-dasar pemrograman web, koneksi database, dan penggunaan formulir HTML.

### Langkah-langkah Pengerjaan:

1. **Persiapan Environment:**

    - Pastikan Anda telah menginstal server web lokal seperti XAMPP, WAMP, atau MAMP.
    - Pastikan server database MySQL sudah berjalan.

2. **Buat Database dan Tabel:**

    - Buat sebuah database MySQL dengan format `npm_namadepan` (tanpa spasi).
    - Buat tabel dengan `nama tabel bebas` sesuai dengan judul project yang telah ditentukan, minimal terdiri dari 5 kolom (field) dengan ketentuan sebagai berikut:
        - `id` (integer, auto increment, primary key)
        - `nama_kolom_bebas` (tipe_data_bebas)
        - `nama_kolom_bebas` (tipe_data_bebas)
        - `nama_kolom_bebas` (tipe_data_bebas)
        - `nama_kolom_bebas` (tipe_data_bebas)

3. **Buat Formulir PHP HTML:**

    - Buat sebuah halaman HTML dengan nama `index.php`.
    - Buat form untuk mengumpulkan data inputan minimal terdiri dari 4 inputan dengan type input yang berbeda. Contoh `<input type='...'>`.
    - Tambahkan validasi pada form untuk memastikan semua input wajib diisi sebelum formulir dapat dikirimkan.

4. **Buat Skrip PHP untuk Memproses Formulir:**

    - Buat file PHP dengan nama `proses_input.php`.
    - Buat koneksi ke database MySQL dan pastikan Anda mengganti pengaturan koneksi sesuai dengan pengaturan database Anda.
    - Ambil data dari formulir yang dikirimkan.
    - Simpan data tersebut ke dalam database yang telah anda buat sebelumnnya.

5. **Tambahkan Styling CSS pada Formulir (Opsional)**

-   Jika Anda menambahkan formulir baru, Anda juga dapat menyesuaikan tampilan formulir tersebut dengan menambahkan CSS ke file `style.css`.
-   Sesuaikan desain formulir agar sesuai dengan tema dan tujuan formulir tersebut.

6. **Uji Coba:**

    - Pastikan server web lokal anda berjalan.
    - Buka browser dan akses `http://localhost/nama_folder/index.php` untuk melihat formulir input.
    - Isi formulir dengan data yang sesuai dan klik tombol "simpan".
    - Pastikan formulir berfungsi dengan baik tanpa ada error.
    - Pastikan data berhasil disimpan ke dalam database MySQL.
    - Selelah dilakukan ujicoba silahkan backup database anda.

### Pengumpulan Project UTS :

-   Buat repository baru di `GitHub` untuk menyimpan source code praktikum ini.
-   Unggah semua file (PHP HTML, CSS, Backup Database) yang Anda buat ke repository tersebut.
-   Kirim link repository GitHub Anda sebagai pengumpulan tugas Project UTS.

### Catatan:

-   Project UTS ini memberikan kebebasan kepada mahasiswa untuk merancang formulir sesuai dengan preferensi pribadi.
-   Untuk menjaga integritas pastikan bahwa setiap mahasiswa membuat form-input dengan _`judul project yang berbeda`_. Contoh judul form (Form Pendaftaran Pasien Rumas Sakit, Form Pendaftaran Mahaisswa, dll)
-   Penambahan desain dengan CSS bersifat opsional, namun kami menyarankan Anda untuk mengeksplorasi dan meningkatkan tampilan formulir sesuai dengan preferensi dan kreativitas Anda.

---

Jika ada instruksi yang tidak sepenuhnya dipahami, silakan ajukan pertanyaan melalui `grup whatsapp` yang disediakan. Instruktur atau asisten praktikum akan membantu anda menjelaskan konsep atau memberikan bimbingan tambahan.
