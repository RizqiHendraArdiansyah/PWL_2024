**JOBSHEET 7 LARAVEL STARTER CODE**

Nama : Rizqi Hendra Ardiansyah

Kelas : SIB-3C

NIM 2141762145

Mata Kuliah : Pemrograman Web Lanjut

Jurusan : Teknologi Informasi

Program Studi : D4 – Sistem Informasi Bisnis


*Praktikum 1 – Layouting AdminLTE:*
1. Kita download AdminLTE v3.2.0 yang rilis pada 8 Feb 2022
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/45700190-d8ae-414d-a36f-249f99222323)

2.	Setelah kita berhasil download, kita ekstrak file yang sudah di download ke folder project PWL_POS/public, kemudian kita rename folder cukup menjadi adminlte

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/76007e92-10fd-49cf-acb3-30fd2ac3a249)

3.	Selanjutnya kita buka di browser dengan alamat http://localhost/PWL_POS/public/adminlte maka akan muncul tampilan seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/6f9cc1be-ab9b-434c-a0d8-5006b3e4c4dd)

4.	Kita klik menu Extras > Blank Page, page inilah yang akan menjadi dasar web template

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d1cf2dad-c594-40a3-a603-8487bf4edff7)

5.	Dari sini kita bisa melakukan layouting halaman Blank Page ini menjadi 4 element seperti pada gambar berikut

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/cf21fa8c-358f-41ae-96c0-3ca41e2cbf1e)

6.	Selanjutnya kita klik kanan halaman Blank Page dan klik view page source![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d8d5423f-d486-4977-bd59-e3aa01421b6c)

7.	Selanjutnya kita copy page source dari halaman Blank Page, kemudia kita paste pada PWL_POS/resource/view/layouts/template.blade.php (buat dulu folder layouts dan file template.blade.php)![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/481555ea-8a03-4312-81ae-e71359b24c2d)

8.	File layouts/template.blade.php adalah file utama untuk templating website
9.	Pada baris 1-14 file template.blade.php, kita modifikasi
	![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ef754944-963f-4a6e-b239-47c9431adca5)

10.	Kemudian kita blok baris 19-153 (baris untuk element 1-header), lalu kita cut, dan paste-kan di file PWL_POS/resource/view/layouts/header.blade.php (buat dulu file header.blade.php jika belum ada). Sehingga tampilan dari file template.blade.php menjadi seperti berikut
    
a.	Layout pada header.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/60369085-6603-4d93-80a2-9b7bf08475f0)

b.	Layout pada template.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/3bd6f9d5-bbe7-4e66-acc8-7ce9c65649ed)
Baris 19 adalah komponen Blade untuk memanggil elemen layouts/header.blade.php agar menjadi satu dengan template.blade.php saat di-render nanti

11.	Kita modifikasi baris 25 dan 26 pada template.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/fa1c4c59-1c69-4fa9-a950-27ec9b4ea3ef)

12.	Selanjutnya kita blok baris 31-693 (baris untuk element 2-sidebar), lalu kita cut, dan paste-kan di file PWL_POS/resource/view/layouts/sidebar.blade.php (buat dulu file sidebar.blade.php jika belum ada). Sehingga tampilan dari file template.blade.php menjadi seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/5d80866c-0aec-4b4a-90ec-a2c4e98aac31)

13.	Selanjutnya perhatikan baris 87-98 (baris untuk element 5-footer), lalu kita cut, dan paste-kan di file PWL_POS/resource/view/layouts/footer.blade.php (buat file footer.blade.php jika belum ada). Sehingga tampilan dari file template.blade.php menjadi seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d527ee99-7c20-42ff-bf03-4bbcc5d4464a)

14.	Kemudian kita modifikasi file template.blade.php baris 91-100
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/25a62309-1599-4a94-8179-15d465967db1)

15.	Sekarang masuk pada bagian konten. Konten kita bagi menjadi 2, yaitu elemen untuk breadcrumb dan elemen untuk content.
16.	Perhatikan file template.blade.php pada baris 38-52 kita jadikan sebagai elemen 4-breadcrumb. Kita blok baris 38-52 lalu kita cut, dan paste-kan di file PWL_POS/resource/view/layouts/breadcrumb.blade.php (buat file breadcrumb.blade.php jika belum ada). Sehingga tampilan dari file template.blade.php menjadi seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/780785dd-2a2c-47bc-9ccd-b0da00b32550)

17.	Layout terakhir adalah pada bagian konten. Layout untuk konten bisa kita buat dinamis, sesuai dengan apa yang ingin kita sajikan pada web yang kita bangun.
18.	Untuk content, kita akan menghapus baris 42-66 pada file template.blade.php. dan kita ganti dengan kode seperti ini @yield('content')
19.	Hasil akhir pada file utama layouts/template.blade.php adalah seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ee397c2a-872c-4544-aae6-c8d43ea2319e)

20.	Selamat kalian sudah selesai dalam melakukan layouting website di Laravel

*Praktikum 2 – Penerapan Layouting:*
1.	Kita buat file controller dengan nama WelcomeController.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/442129b9-0d52-483a-ad38-75e0c0cccb3b)

2.	Kita buat file pada PWL_POS/resources/views/welcome.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/40f82ad5-3c0f-46e4-830d-5d7fe9db54a7)

3.	Kita modifikasi file PWL_POS/resources/views/layouts/breadcrumb.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/49289cc5-5654-4855-8e6b-76119250fe6d)

4.	Kita modifikasi file PWL_POS/resources/views/layouts/sidebar.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/0c57d335-a42d-4e19-acac-997ce593e8bc)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/97ebbdc8-daf4-47a0-b181-ec2c2e4fcf99)

5.	Kita tambahkan kode berikut router web.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d38fab7a-96e0-4452-bbbb-ef9973af4bbd)

6.	Sekarang kita coba jalankan di browser dengan mengetikkan url
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c1eb3c10-daf3-48f4-aef9-0a6fb5a86cd6)

*Praktikum 3 – Implementasi jQuery Datatable di AdminLTE*
1.	Kita modifikasi proses CRUD pada tabel m_user pada praktikum ini
2.	Kita gunakan library Yajra-datatable dengan mengetikkan perintah pada CMD
3.	Kita modifikasi route web.php untuk proses CRUD user
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/21b798be-be96-4dc4-9bce-18f6d783293c)

4.	Kita buat atau modifikasi penuh untuk UserController.php. Kita buat fungsi index() untuk menampilkan halaman awal user
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/1f3dd206-312f-427d-957d-b0371a4a0fe7)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/02757363-22fb-4bf4-a573-281cc40a08eb)

5.	Lalu kita buat view pada PWL_POS/resources/views/user/index.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/bd66029e-03f1-45bc-8535-0e9f170153ed)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/bec770e7-cae4-42e4-9900-c0b8ac0d4811)

6.	Kemudian kita modifikasi file template.blade.php untuk menambahkan library jquery datatables dari template AdminLTE yang kita download dan berada di folder public
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/21472bfa-fee6-4152-ab24-50312a8334ec)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/094463b8-ad38-4e5a-896b-19edd1fc4c62)

7.	Untuk bisa menangkap request data untuk datatable, kita buat fungsi list() pada UserController.php seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d781a02a-f3d2-4a21-98f1-c5a6acc6c64c)

8.	Sekarang coba jalankan browser, dan klik menu Data User..!!! perhatikan dan amati apa yang terjadi 

Jawab : Berdasarkan pengamatan disini yang tampil pada daftar user sebagai berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ee8e11f8-7a93-4dd1-b601-355f35e1ef1c)

9.	Selanjutnya kita modifikasi UserController.php untuk form tambah data user
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/5e650d89-20a5-4ac5-8c80-57d04351eba7)

10.	Sekarang kita buat form untuk menambah data, kita buat file PWL_POS/resources/views/user/create.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/69e4c9f3-9780-4777-ba6d-b9f2060bfd75)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/0e0c9ca7-c862-4bbd-b408-e28d4f1ca16b)

11.	Kemudian untuk bisa menng-handle data yang akan disimpan ke database, kita buat fungsi store() di UserController.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c87d4fdc-4b89-4195-b5a9-587a6a48505b)

12.	Sekarang coba kalian buka form tambah data user dengan klik tombol tambah. Amati dan pelajari..!!!
Jawab : Berdasarkan pengamatan disini hasil yang tampil pada form tambah data user sebagai berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e9007462-f145-470b-b16f-7b6a77d65a9a)

Bisa kita lihat data berhasil ditambahkan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c4a50916-485a-4d72-ac86-247b977a564a)

13.	Selanjutnya, kita masuk pada bagian menampilkan detail data user (klik tombol) pada halaman user. Route yang bertugas untuk menangkap request detail adalah
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ed027d67-1b7e-4657-b45e-971dfd04eb25)

14.	Jadi kita buat/modifikasi fungsi show() pada UserController.php seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c626dc42-12f4-4dc0-ba9a-258ccf031e1f)

15.	Kemudian kita buat view di PWL_POS/resources/views/user/show.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/67debe7c-3b62-4fa9-910b-1e99811c1acc)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/389a480b-9f7b-4bae-91c5-fbcb311441da)

16.	Sekarang kalian coba untuk melihat detail data user di browser, dan coba untuk mengetikkan id yang salah contoh http://localhost/PWL_POS/public/user/100 amati apa yang terjadi, dan laporkan!!!
Jawab : Muncul tulisan kesalahan : Data yang dicari tidak ditemukan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/be4a7039-666a-4c80-9fbf-40f7fe3d1e84)

17.	Selanjutnya, kita masuk pada bagian untuk memodifikasi data user. Route yang bertugas untuk menangkap request edit adalah
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ecbb31c5-fc56-48dd-8fd7-fb306b8fa7fa)

18.	Jadi kita buat fungsi edit() dan update() pada UserController.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/f2866e00-4231-4588-9146-065a25b596e8)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/f58be9c9-449d-4578-b433-6122bebd9de5)

19.	Selanjutnya, kita buat view untuk melakukan proses edit data user di PWL_POS/resources/views/user/edit.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c50f2a84-6216-43d6-beb6-4d89b10b76b2)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/75912084-276c-4002-97a8-9a3d2a1199cd)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/36ce2d13-ed8e-4f95-ae3c-daadc853802b)

20.	Sekarang kalian coba untuk mengedit data user di browser, amati, pahami, dan laporkan!
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/168e7e76-0c88-457d-ab4e-3ec7e26a2c7f)

Edit User Berhasil berubah
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e30dbf5c-de56-4a0d-a7e5-e104e150de8c)

21.	Selanjutnya kita akan membuat penanganan untuk tombol hapus. Router web.php yang berfungsi untuk menangkap request hapus dengan method DETELE adalah
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/21eddba0-2370-4ab8-8d11-2c7604d09dae)

22.	Jadi kita buat fungsi destroy() pada UserController.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/332e3f83-99d8-4fc8-a4f5-c57a87889ab5)

23.	Selanjutnya kita modifikasi file PWL_POS/resources/views/user/index.blade.php untuk menambahkan tampilan jika ada pesan error
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ae57cf49-9174-4555-afdb-240b102e2644)

24.	Kemudian jalankan browser untuk menghapus salah satu data user. Amati dan laporkan!
Disini kita mencoba menghapus data berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/aee24e3b-f544-40ce-a3a9-5884695130a8)

Bisa kita lihat data tersebut berhasil kita hapus
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ccf57bed-6898-4f08-82d2-a76a73dc9c39)

25.	Selamat, kalian sudah membuat Laravel Starter Code untuk proses CRUD dengan menggunakan template AdminLTE dan plugin jQuery Datatables.

*Praktikum 4 – Implementasi Filtering Datatables:*
1.	Kita modifikasi fungsi index() di UserController.php untuk menambahkan data yang ingin dijadikan kategori untuk data filtering
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/12b6fc2e-5c1c-415d-9507-ab7ba0478b98)

2.	Kemudian kita modifikasi view untuk menampilkan data filtering pada PWL_POS/resources/views/user/index.blade.php
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/be141f59-cad5-4805-8ee7-8fe53f8b07bf)

3.	Selanjutnya, tetap pada view index.blade.php, kita tambahkan kode berikut pada deklarasi ajax di datatable. Kode ini digunakan untuk mengirimkan data untuk filtering
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/b41853a2-9208-4956-b9df-37d9ef10960e)

4.	Kemudian kita edit pada bagian akhir script @push(‘js’) untuk menambahkan listener jika data filtering dipilih
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e6c20864-3029-4502-8ae4-d23b605dd91b)

5.	Tahapan akhir adalah memodifikasi fungsi list() pada UserController.php yang digunakan untuk menampilkan data pada datatable
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/03e0c27a-7963-459f-b4d4-e2a6ee5d62d0)

6.	Bagian akhir adalah kita coba jalankan di browser dengan akses menu user, maka akan tampil seperti berikut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d90b4f93-4e13-404d-b54d-31641e770430)

**Pertanyaan**

Jawablah pertanyaan berikut sesuai pemahaman materi di atas
1. Apa perbedaan frontend template dengan backend template?
2. Apakah layouting itu penting dalam membangun sebuah website?
3. Jelaskan fungsi dari komponen laravel blade berikut : @include(), @extend(), @section(), @push(), @yield(), dan @stack()
4. Apa fungsi dan tujuan dari variable $activeMenu ?
   
Jawab :

1. Frontend template berkaitan langsung pada tampilan seperti desain antarmuka pengguna, elemen visual, dan pengalaman pengguna. Sedangkan pada backend template berkaitan dengan server dan database yang menangani logika dari suatu web, pengelolaan basis data, dan pemrosesan data yang nantinya memastikan bahwa data yang diperlukan dikirim ke frontend untuk ditampilkan dan disimpan dengan benar di database.
   
2. Tentu saja, layouting sangat penting dalam membangun sebuah website. Layout website sendiri berperan untuk menentukan struktur tata letak pada halaman website, sehingga nantinya dapat berperan penting dalam hal pengalaman client / pengguna
  
3. Berikut adalah fungsi dari komponen laravel berikut :
   
   a. @include() : Digunakan untuk memasukkan isi dari satu view ke dalam view lain
   
   b. @extend() : Memungkinkan sebuah view “mewarisi/menambah” layout dari view lain.
   
   c.  @section() : Mendefinisikan bagian konten yang dapat kita “isi” di dalam layout yang diwarisi.
   
   d.  @push() : Memungkinkan Anda menambahkan konten ke dalam “stack”, yang biasanya digunakan untuk skrip atau style yang spesifik pada halaman tertentu.
   
   e.  @yield() : Menentukan tempat layout di mana konten dari @section() akan ditampilkan.
   
   f.  @stack() : Bertindak sebagai wadah untuk menumpuk konten yang telah di-push. Hal Ini memungkinkan untuk mengorganisir skrip atau style yang ditambahkan melalui @push() dan menampilkannya di tempat yang diinginkan di layout
   
5. Fungsi dari variabel ini adalah untuk menandai menu atau navigasi yang sedang aktif pada saat itu. Tujuannya adalah untuk memberikan feedback visual kepada pengguna tentang halaman atau bagian dari aplikasi yang sedang mereka lihat.

**TUGAS**
1. Implementasikan menu yang belum ada di laravel starter code ini sesuai dengan Studi Kasus Point of Sales Sederhana. Silahkan terapkan kode di laravel starter code untuk menu-menu yang sesuai dengan menu di samping ini.
   
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/3eebc221-be4e-420a-82b3-23ef70b5f9d6)

*Jawab*
1. Halaman Menu Dashboard
   
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/0650bf28-b47a-4d82-9633-cd8502364035)

2. Halaman Menu Daftar Level

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/a1257972-c855-452a-b092-74f84d2ca11c)

3. Halaman Menu Daftar User

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/7d4238f8-91af-4ef2-b97a-d5f7baf4e1dd)

4. Halaman Menu Daftar Kategori 

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/dda8735b-165c-4d53-8e8a-d16cb229146f)

5. Halaman Menu Daftar Barang

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/f3e662db-39a4-43a9-bcf5-16bf0842e374)

6. Halaman Menu Daftar Stok Barang

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/484ca3eb-8d6e-470d-b09f-3c4035048898)

7. Halaman Menu Daftar Transaksi Penjualan

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/634bd3b6-9c67-434f-959d-24ae9cd44f50)




