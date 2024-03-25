**JOBSHEET 4 MODEL dan ELOQUENT ORM**
Nama : Rizqi Hendra Ardiansyah
Kelas : SIB-3C
NIM 2141762145
Mata Kuliah : Pemrograman Web Lanjut
Jurusan : Teknologi Informasi
Program Studi : D4 – Sistem Informasi Bisnis

*Praktikum 1 - $fillable*
1. Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar di bawah ini

2. Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru seperti gambar di bawah ini

3. Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian jalankan link localhostPWL_POS/public/user pada browser dan amati apa yang terjadi

4. Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian $fillable

5. Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data

6. Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi
Jawab :

Bisa kita lihat akan terjadi error karena field password tidak dimasukkan ke dalam array fillable maka ketika akan melakukan create data menggunakan model field password dianggap tidak ada. Berikut apabila pada array fillable kita masukkan password

7. Laporkan hasil Praktikum-1 ini dan commit perubahan pada git.

*Praktikum 2.1 – Retrieving Single Models*
1. Buka file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

2. Buka file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Bisa dilihat untuk user yang ditampilkan yaitu user dengan id 1

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Untuk hasilnya sama saja menampilkan level_id ke 1 untuk ditampilkan pertama

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Untuk hasilnya sama saja menampilkan level_id ke 1 untuk ditampilkan pertama

8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

9. Simpan kode program Langkah 8. Kemudian pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Bisa dilihat menampilkan user dengan id 1 yang hanya mengambil nilai kolom username dan nama saja

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

11. Simpan kode program Langkah 10. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Yang terjadi pada browser hanya menampilkan halaman 404 karena tidak ada user dengan id 20

12. Laporkan hasil Praktikum-2.1 ini dan commit perubahan pada git.

*Praktikum 2.2 – Not Found Exceptions*
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Sama seperti sebelumnya yaitu mencari user dengan id 1

3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

4. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Terjadi 404 dikarenakan user dengan id 9 tidak ditemukan

5. Laporkan hasil Praktikum-2.2 ini dan commit perubahan pada git.

*Praktikum 2.3 – Retreiving Aggregrates*
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Yaitu memunculkan tulisan seperti berikut dikarenakan banyak (qty) user yang memiliki level_id 2

3. Buat agar jumlah script pada langkah 1 bisa tampil pada halaman browser, sebagai contoh bisa lihat gambar di bawah ini dan ubah script pada file view supaya bisa muncul datanya

Berikut cara rubah script nya
Pada userController

Pada user.blade

Hasil Run

4. Laporkan hasil Praktikum-2.3 ini dan commit perubahan pada git.

*Praktikum 2.4 – Retreiving or Creating Models*
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

2. Ubah kembali file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Yang terjadi ialah membuat satu record data sebagai data berikut yang nantinya disimpan pada database.

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan

Kita coba cek pada phpMyAdmin

Berdasarkan pengamatan disini nantinya akan menambahkan data manager22 pada phpMyAdmin

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Berdasarkan pengamatan disini untuk data manager tidak terjadi penambahan data karena username dan nama diatas sudah ada di database

8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

9. Simpan kode program Langkah 8. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
Berdasarkan pengamatan disini membuat satu record data dengan data seperti berikut tetapi tidak di simpan pada database karena di database tidak ada data tersebut

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

11. Simpan kode program Langkah 9. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan

Kita cek pada phpMyAdmin
Berdasarkan pengamatan disini yang terjadi adalah record data disimpan pada database karena data diatas belum ada pada database sehingga pada kolom id secara otomatis menambahkan id baru.
12. Laporkan hasil Praktikum-2.4 ini dan commit perubahan pada git.

*Praktikum 2.5 – Attribute Changes*
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Berdasarkan pengamatan yang terjadi adalah pada kode program yaitu mengembalikan nilai false karena pada model sudah di simpan ketika dicek menggunakan isDirty() lalu untuk mengecek apakah data tersebut telah diubah maka kode program mengembalikan nilai karena memang belum diubah.

3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini

4. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Yang terjadi yaitu mengembalikan nilai true karena model sudah kita ubah, jika menggunakan wasChanged() walaupun sudah di save() jika data memang berbeda dengan yang aslinya maka akan terdeteksi.

5. Laporkan hasil Praktikum-2.5 ini dan commit perubahan pada git.

*Praktikum 2.6 – Create, Read, Update, Delete (CRUD)*
1.	Buka file view pada user.blade.php dan buat scritpnya menjadi seperti di bawah ini

2.	Buka file controller pada UserController.php dan buat scriptnya untuk read menjadi seperti di bawah ini

3.	Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Yang terjadi adalah menampilkan CRUD Data User seperti dibawah ini

4.	Langkah berikutnya membuat create atau tambah data user dengan cara bikin file baru pada view dengan nama user_tambah.blade.php dan buat scriptnya menjadi seperti di bawah ini

5.	Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini

6.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah dan diletakan di bawah method index seperti gambar di bawah ini

7.	Simpan kode program Langkah 4 s/d 6. Kemudian jalankan pada browser dan klik link “+ Tambah User” amati apa yang terjadi dan beri penjelasan dalam laporan
Berdasarkan pengamatan disini nantinya user dapat menambahkan data 

8.	Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini

9.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah_simpan dan diletakan di bawah method tambah seperti gambar di bawah ini

10.	Simpan kode program Langkah 8 dan 9. Kemudian jalankan link localhost:8000/user/tambah atau localhost/PWL_POS/public/user/tambah pada browser dan input formnya dan simpan, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan

Kita cek pada phpMyAdmin untuk data sendiri bisa kita lihat sudah masuk ke dalam database

11.	Langkah berikutnya membuat update atau ubah data user dengan cara bikin file baru pada view dengan nama user_ubah.blade.php dan buat scriptnya menjadi seperti di bawah ini

12.	Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini

13.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah dan diletakan di bawah method tambah_simpan seperti gambar di bawah ini

14.	Simpan kode program Langkah 11 sd 13. Kemudian jalankan pada browser dan klik link “Ubah” amati apa yang terjadi dan beri penjelasan dalam laporan
Berdasarkan pengamatan disini menampilkan halaman edit data dari data yang dipilih untuk diedit

15.	Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini

16.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah_simpan dan diletakan di bawah method ubah seperti gambar di bawah ini

17.	Simpan kode program Langkah 15 dan 16. Kemudian jalankan link localhost:8000/user/ubah/1 atau localhost/PWL_POS/public/user/ubah/1 pada browser dan ubah input formnya dan klik tombol ubah, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan

Data berhasil diubah

Selanjutnya bisa kita cek pada phpMyAdmin apakah berubah dan bisa kita lihat data tersebut berhasil berubah 

18.	Berikut untuk langkah delete . Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini

19.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama hapus dan diletakan di bawah method ubah_simpan seperti gambar di bawah ini

20.	Simpan kode program Langkah 18 dan 19. Kemudian jalankan pada browser dan klik tombol hapus, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
Bisa kita lihat data berhasil dihapus

21.	Laporkan hasil Praktikum-2.6 ini dan commit perubahan pada git.

*Praktikum 2.7 – Relationships*
1.	Buka file model pada UserModel.php dan tambahkan scritpnya menjadi seperti di bawah ini

Selanjutnya kita buat LevelModel dan sesuaikan nama table dan primarykey nya

2.	Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini

3.	Simpan kode program Langkah 2. Kemudian jalankan link pada browser, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
Berdasarkan pengamatan menampilkan data data user beserta relasi data tersebut

4.	Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini

5.	Buka file view pada user.blade.php dan ubah script menjadi seperti di bawah ini

6.	Simpan kode program Langkah 4 dan 5. Kemudian jalankan link pada browser, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
Berdasarkan pengamatan disini yaitu menampilkan data relasi level yang ditampilkan di halaman user

7.	Laporkan hasil Praktikum-2.7 ini dan commit perubahan pada git.

