**JOBSHEET 05 Blade View, Web Templating(AdminLTE), Datatables**

Nama : Rizqi Hendra Ardiansyah

Kelas : SIB-3C

NIM 2141762145

Mata Kuliah : Pemrograman Web Lanjut

Jurusan : Teknologi Informasi

Program Studi : D4 – Sistem Informasi Bisnis

*Praktikum 1 – Integrasi Laravel dengan AdminLte3*
1.	Dalam root folder project lakukan command berikut, untuk mendefinisikan requirement project
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/b451d25a-90c9-4fda-b3a3-a71ac6b9ad3d)

2.	Melakukan instalasi requirement project di atas dengan command berikut:
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/bd161fe7-9d96-46ba-a58b-acf0109ea8f4)
  
3.	Buat file resources/views/layout/app.blade.php. Isi dengan kode berikut.
 ![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d3a7de3e-5781-47a4-86b5-57d2702515f0)

  ![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/7a642569-e2a0-404c-b8ec-ef12152ae85a)

4.	Edit resources/views/welcome.blade.php, kemudian replace seluruh kodenya dengan kode berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/074af623-cf41-4799-9fe0-f242c264645d)

5.	Kembali ke browser, menuju ke halaman awal.
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/9e1823f5-9c2d-44a0-ba3b-6c21c06ea209)

*Praktikum 2 – Integrasi dengan DataTables*

1.	Install Laravel DataTables
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/f378ac62-ac73-4e65-a868-09c8bb6a12f2)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/1feded11-4ba1-42aa-a994-9b6192a97b4b)

2.	Pastikan nodejs sudah terinstall, dengan perintah npm -v.
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/47d5d259-81c5-4b54-b942-72a73fd5905e)

3.	Install Laravel DataTables Vite dan sass
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/364c7140-01ba-4adf-8894-3bc5cd435d3f)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c00e09ff-7152-405d-a1b9-21821067a2ba)

4.	Edit file resources/js/app.js
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/cd2c2993-678a-40bc-9016-1ee2875f4b64)

5.	Buatlah file resources/saas/app.scss
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/592e3b83-57ca-496a-95ca-76ecc5c212a9)

6.	Jalankan dengan npm run dev
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/3c6f4907-6672-4383-a44f-e5e19491df90)

7.	Selanjutnya kita akan buat datatables untuk kategori
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/2b66e3e4-5920-482e-a4e5-e18d1e301f7d)

8.	Kita edit KategoriDatable untuk mengatur kolom apa saja yang ingin ditampilkan
Sesuaikan dengan kode program berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/370d298e-f1f9-40d1-8637-696e70d7fb6f)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/71f00b40-ca8c-44f9-8791-df91fc215ee9)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/cf9e04a0-8ab1-4477-8467-ffa0c0065016)

9.	Ubah kategori model, sesuaikan seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/1b1008d3-0193-4fba-95a0-68c34a86288a)

10.	Ubah Kategori Controller sesuaikan dengan skrip berikut:
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/40739a03-6819-4669-87e7-37a5243551f2)

11.	Buat folder kategori di dalam resources/view, kemudian buat view blade index untuk kategori resources/views/kategori/index.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/8d74aae2-3aa5-44f4-9d22-b124b5be23b0)

12.	Pastikan route untung kategori sudah tersedia
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/6c1a0005-0dd6-467a-a026-78b9f66bf54d)

13.	Sesuaikan app layout seperti kode berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/dec5988c-d33c-4d54-b8f5-04bad125179a)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/26515007-16c3-4003-a682-efef9f97e152)

14.	Menset ViteJs / script type defaults
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e84bcad9-5f56-47b9-ac07-2a7e001264f2)

15.	Isikan beberapa data ke table kategori
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d75709cf-3ee8-451c-9faf-8880aaa526dc)

16.	Datatables sudah dapat di load di /kategori
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/3e63e6b2-87e9-4eb2-bb8e-0a8f5cd64f95)

*Praktikum 3 – Membuat form kemudian menyimpan data dalam database*
1.	Menyesuaikan routing, tambahkan dua routing berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/94b54c9a-ab87-4b86-83f2-ebb8d19cea51)

2.	Tambahkan dua function berikut dalam KategoriController
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d292fb9d-a131-40b8-977f-6835d67feef7)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ab3bd5f1-fa1c-4288-9d69-ef20ae34ab4c)

3.	Dalam folder views/kategori, buatlah file dengan nama create.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/1fc02c3a-cf78-465c-bf3d-5edd6e808681)

4.	Kita lakukan pengecualian proteksi CsrfToken. Karena kita belum melakukan otentikasi . Kita edit dalam file berikut:
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/55238cb0-ac6d-4928-8962-c666802b0595)

5.	Akses kategori/create
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/fe0c7787-fe01-4297-a352-74d98f974ad4)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/de82e94c-c234-49e5-bfe4-265fc86b90da)

6.	Halaman kategori (Bisa dilihat terdapat penambahan kategori Sepatu)
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c294fd2c-bbce-4b71-bbe4-251b2468cf1c)

**Tugas Praktikum**
1.	Tambahkan button Add di halaman manage kategori, yang mengarah ke create kategori baru
   
Jawab :
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/afd3790e-d610-4cf7-83d8-0a81e1b84549)
Berikut tampilan setelah mengklik Add Kategori disini saya mencoba mengisikan kategori Pakaian
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/30e503e2-cbbf-42e4-9d12-4339c45d7607)

Berikut hasil Kategori Pakaian sudah muncul
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/153f015b-09b4-4851-959b-a3625e1ae144)

2.	Tambahkan menu untuk halaman manage kategori, di daftar menu navbar 

Jawab :
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/440f2285-a01b-4ba9-8215-7c0f7b4d7bf7)

3.	Tambahkan action edit di datatables dan buat halaman edit serta controllernya

Jawab :
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d04bf8a3-6c00-4f9a-b5f2-7368acc9cfe3)
Kita coba klik tombol edit dan menggantinya sebagai contoh pada kategori pakaian saya ganti dengan kategori pakaian cowo
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/96bd2d45-2fc0-4d0d-ba5d-7799f88a546d)
Bisa dilihat pada kategori pakaian cowo berhasil berubah
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/593de43a-b80d-4834-8959-c8ba93d155ad)

4.	Tambahkan action delete di datatables serta controllernya

Jawab :
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/13925547-0de3-444b-8fa8-9db4af859c74)
Kita coba hapus kategori Pakaian cowo (Ketika akan menghapus nanti muncul notifikasi seperti berikut lalu kita klik Ok)
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/9155f0d5-61a6-4197-9068-abe4c7abb708)
Bisa dilihat data tersebut berhasil terhapus
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/a21a18b1-f384-4f38-bb3d-bd991296ae3b)
