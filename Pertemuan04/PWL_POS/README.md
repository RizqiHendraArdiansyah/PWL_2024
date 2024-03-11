**JOBSHEET 4 MODEL dan ELOQUENT ORM**

Nama : Rizqi Hendra Ardiansyah

Kelas : SIB-3C

NIM : 2141762145

Mata Kuliah : Pemrograman Web Lanjut

Jurusan : Teknologi Informasi

Program Studi : D4 – Sistem Informasi Bisnis

*Praktikum 1 - $fillable*
1. Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c6ba6ad8-9b72-4082-962a-930e83281bc3)

2. Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/7e7d87a8-ca46-4bbe-b0c0-62c8f4b5b6d4)


3. Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian jalankan link localhostPWL_POS/public/user pada browser dan amati apa yang terjadi

Pada halaman user akan terdapat penambahan data Manager 2
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/00cf8013-2bc0-4f39-bb07-3ee7a653f66e)

4. Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian $fillable
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/4a072132-a153-4b31-9687-db149ca81a5c)

5. Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/64d69915-3e61-4170-bb8b-96d35a43290f)

6. Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e79b68a9-e6f6-4322-8bb8-ef63f144fe27)

Bisa kita lihat akan terjadi error karena field password tidak dimasukkan ke dalam array fillable maka ketika akan melakukan create data menggunakan model field password dianggap tidak ada. Berikut apabila pada array fillable kita masukkan password
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/8229619f-cd09-416d-825b-a02e2d267f3a)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/4685c09b-ada8-4920-a8d9-f4bdb349ba80)


7. Laporkan hasil Praktikum-1 ini dan commit perubahan pada git.

*Praktikum 2.1 – Retrieving Single Models*
1. Buka file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/df2393dd-c1ea-43ac-b964-0e1c33fc35ec)

2. Buka file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/15accf7a-17a6-4c7e-afa1-c6038dd5fc12)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
   
Bisa dilihat untuk user yang ditampilkan yaitu user dengan id 1
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/41c6030b-84b7-40f9-90c9-d96008693afa)

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/2e6ee0e6-7a33-4224-8524-3acdba40e365)

5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
   
Untuk hasilnya sama saja menampilkan level_id ke 1 untuk ditampilkan pertama
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/9682fc47-9495-47af-8e8a-256e291f341f)

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/94d2b420-2571-446a-9883-72b5122057ce)

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
   
Untuk hasilnya sama saja menampilkan level_id ke 1 untuk ditampilkan pertama
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/3f786856-708e-4fec-8871-54e4f1885263)

8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/2304a420-5214-4858-b179-643776357a2a)

9. Simpan kode program Langkah 8. Kemudian pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
    
Bisa dilihat menampilkan user dengan id 1 yang hanya mengambil nilai kolom username dan nama saja
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/9e26415e-cef7-4ff6-8373-cfe3f446cd23)

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/99cfc4c6-b25d-48e4-8ca3-16f67f529d6c)

11. Simpan kode program Langkah 10. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
    
Yang terjadi pada browser hanya menampilkan halaman 404 karena tidak ada user dengan id 20
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/affb1009-04a2-4def-81c7-d13237be8713)

12. Laporkan hasil Praktikum-2.1 ini dan commit perubahan pada git.

*Praktikum 2.2 – Not Found Exceptions*
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/1d387018-369d-43a7-8887-5660cdc017ad)

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
 
Sama seperti sebelumnya yaitu mencari user dengan id 1
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/5b90a664-33a9-4403-a685-cc1d70217188)

3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ca5ec781-2518-452c-b1d8-aa16227c5341)

4. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan

Terjadi 404 dikarenakan user dengan id 9 tidak ditemukan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e710f64e-0de8-4411-b456-a53db5972212)

5. Laporkan hasil Praktikum-2.2 ini dan commit perubahan pada git.

*Praktikum 2.3 – Retreiving Aggregrates*
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/1e08f47b-bda5-4cc4-8dcf-335fb829c1f9)

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
   
Yaitu memunculkan tulisan seperti berikut dikarenakan banyak (qty) user yang memiliki level_id 2
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/fcac87d8-e398-4d96-bde4-e6550157f84c)

3. Buat agar jumlah script pada langkah 1 bisa tampil pada halaman browser, sebagai contoh bisa lihat gambar di bawah ini dan ubah script pada file view supaya bisa muncul datanya
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/bd97dc70-5b9a-44e7-bbc5-1d9dc517d4dd)

Berikut cara rubah script nya

Pada userController
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/afe03072-20c2-4233-9f08-f5f0bcf796d7)

Pada user.blade
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/ff40b4a0-a701-4f0c-a9a0-1532198159c5)

Hasil Run

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/5bb774c9-c270-49fd-8bed-a98a264819c2)

4. Laporkan hasil Praktikum-2.3 ini dan commit perubahan pada git.

*Praktikum 2.4 – Retreiving or Creating Models*
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/0f796dde-f1a9-4470-a760-5dfe8ee300e8)

2. Ubah kembali file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/b36a9766-862d-4e0e-a939-60f44293fe24)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
   
Yang terjadi ialah membuat satu record data sebagai data berikut yang nantinya disimpan pada database.
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/930cbac7-8691-47a0-877e-231a9d860298)

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/2697bb8a-7e17-42be-8393-4bfbee6e487b)

5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e58dbe1a-f9e8-41a9-93c7-def0fe6218f4)

Kita coba cek pada phpMyAdmin
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/34feedf9-bf79-40c3-b6e0-efd4ebddbcdf)

Berdasarkan pengamatan disini nantinya akan menambahkan data manager22 pada phpMyAdmin

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/6a97a4dc-0428-4282-bf70-7e79e0da41f3)

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan

Berdasarkan pengamatan disini untuk data manager tidak terjadi penambahan data karena username dan nama diatas sudah ada di database
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/77ab097e-bdcc-4715-a98c-19dfce993e1c)


8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/8151d130-95f8-4139-9124-5c2a91808fb6)

9. Simpan kode program Langkah 8. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
    
Berdasarkan pengamatan disini membuat satu record data dengan data seperti berikut tetapi tidak di simpan pada database karena di database tidak ada data tersebut

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/86c8d9a3-3e60-448b-b61f-56cd4b88c2e8)

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/cf095f50-bae1-4656-a9de-f988fdc7a02e)

11. Simpan kode program Langkah 9. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user serta beri penjelasan dalam laporan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/12dc4e33-55be-4d00-ad61-960df7b7b170)

Kita cek pada phpMyAdmin
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e9ec0f61-1f39-4408-a9d7-ee26a9240a41)
Berdasarkan pengamatan disini yang terjadi adalah record data disimpan pada database karena data diatas belum ada pada database sehingga pada kolom id secara otomatis menambahkan id baru.

12. Laporkan hasil Praktikum-2.4 ini dan commit perubahan pada git.

*Praktikum 2.5 – Attribute Changes*
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/1d6d17da-03b1-4faf-94e5-7f06df99d6ec)

2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/5adbf6bf-1693-41e1-b348-3d0dbbcfa0e3)
Berdasarkan pengamatan yang terjadi adalah pada kode program yaitu mengembalikan nilai false karena pada model sudah di simpan ketika dicek menggunakan isDirty() lalu untuk mengecek apakah data tersebut telah diubah maka kode program mengembalikan nilai karena memang belum diubah.

3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/fc0ad2ab-1e78-4fcc-937a-7491bf5a47b8)

4. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/aca4a9f5-9ebe-4904-af50-c28a24339c21)
Yang terjadi yaitu mengembalikan nilai true karena model sudah kita ubah, jika menggunakan wasChanged() walaupun sudah di save() jika data memang berbeda dengan yang aslinya maka akan terdeteksi.

5. Laporkan hasil Praktikum-2.5 ini dan commit perubahan pada git.

*Praktikum 2.6 – Create, Read, Update, Delete (CRUD)*
1.	Buka file view pada user.blade.php dan buat scritpnya menjadi seperti di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/146f8910-62a3-4787-a642-ab7d979b93df)

2.	Buka file controller pada UserController.php dan buat scriptnya untuk read menjadi seperti di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/0d22600d-9b96-48d4-a8e3-31e8f8992f2f)

3.	Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
   
Yang terjadi adalah menampilkan CRUD Data User seperti dibawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/7d4ef619-c115-45a1-856e-4ba53376c638)

4.	Langkah berikutnya membuat create atau tambah data user dengan cara bikin file baru pada view dengan nama user_tambah.blade.php dan buat scriptnya menjadi seperti di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/cc6b7535-8587-4331-bc53-6e382c28e519)

5.	Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/401dc5f8-41bc-4fff-b452-73792d6fb068)

6.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah dan diletakan di bawah method index seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/3bd9745d-848a-46ab-99a7-50868f44b4bb)

7.	Simpan kode program Langkah 4 s/d 6. Kemudian jalankan pada browser dan klik link “+ Tambah User” amati apa yang terjadi dan beri penjelasan dalam laporan
Berdasarkan pengamatan disini nantinya user dapat menambahkan data 
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/d310aef5-6f30-4397-9c77-64b81d66cad0)

8.	Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/29e504bc-5f4f-425d-9a21-cf593bd3c911)

9.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah_simpan dan diletakan di bawah method tambah seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/b828435f-eb61-4fbd-a986-33889b043ab3)

10.	Simpan kode program Langkah 8 dan 9. Kemudian jalankan link localhost:8000/user/tambah atau localhost/PWL_POS/public/user/tambah pada browser dan input formnya dan simpan, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/cad13d05-2925-4aa9-a13b-434f522adad9)

![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e898e12d-7b73-4c64-918a-fb60e66718fc)

Kita cek pada phpMyAdmin untuk data sendiri bisa kita lihat sudah masuk ke dalam database
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/59a831f3-7cdf-4aae-9f9b-752f77317207)

11.	Langkah berikutnya membuat update atau ubah data user dengan cara bikin file baru pada view dengan nama user_ubah.blade.php dan buat scriptnya menjadi seperti di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/005cb9c9-1342-40d6-88d5-3c0753e6149d)

12.	Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/93228238-75be-4cee-b65d-f42019e8a4cc)

13.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah dan diletakan di bawah method tambah_simpan seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/9424e87f-4deb-445c-b781-55c132bdac1e)

14.	Simpan kode program Langkah 11 sd 13. Kemudian jalankan pada browser dan klik link “Ubah” amati apa yang terjadi dan beri penjelasan dalam laporan
    
Berdasarkan pengamatan disini menampilkan halaman edit data dari data yang dipilih untuk diedit
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/f6240194-48df-4d03-9318-0600fa404ea5)

15.	Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/43439610-3936-42bd-b0ad-2c0f9f430eef)

16.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah_simpan dan diletakan di bawah method ubah seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/190361b4-a0b2-44c6-b96e-bd58efebb51a)

17.	Simpan kode program Langkah 15 dan 16. Kemudian jalankan link localhost:8000/user/ubah/1 atau localhost/PWL_POS/public/user/ubah/1 pada browser dan ubah input formnya dan klik tombol ubah, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/19af884f-cb0f-429c-b5a5-14e3afe580bc)

Data berhasil diubah
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/a44ef0aa-eef9-47b2-bef6-de2e8d5ccaae)

Selanjutnya bisa kita cek pada phpMyAdmin apakah berubah dan bisa kita lihat data tersebut berhasil berubah 
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/2485f0b8-b960-4cca-977b-849ea53ac120)

18.	Berikut untuk langkah delete . Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/3bbc7ef9-ef91-459f-ab1b-d8a531683e97)

19.	Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama hapus dan diletakan di bawah method ubah_simpan seperti gambar di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/6aeb8a9b-44f7-4d2c-8ff3-4ed1276241e6)

20.	Simpan kode program Langkah 18 dan 19. Kemudian jalankan pada browser dan klik tombol hapus, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
Bisa kita lihat data berhasil dihapus
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/56096be4-9349-4bf4-9ba8-b1c4e48382ca)

21.	Laporkan hasil Praktikum-2.6 ini dan commit perubahan pada git.

*Praktikum 2.7 – Relationships*
1.	Buka file model pada UserModel.php dan tambahkan scritpnya menjadi seperti di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/40575730-afc5-47a3-b15d-d572a85a9387)

Selanjutnya kita buat LevelModel dan sesuaikan nama table dan primarykey nya
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/70958f40-1285-41f1-837b-4a427c82bcc7)

2.	Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/1012a4bc-670a-456f-8a84-79304b4d75ff)

3.	Simpan kode program Langkah 2. Kemudian jalankan link pada browser, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
   
Berdasarkan pengamatan menampilkan data data user beserta relasi data tersebut
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/4bc05eca-fe8c-4e2c-be1b-1e6bde5751f9)

4.	Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/c447aadc-00c3-4106-bc4b-60d4b2209e00)

5.	Buka file view pada user.blade.php dan ubah script menjadi seperti di bawah ini
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/e6af13a2-1603-4f7e-8466-ef35329a3c70)

6.	Simpan kode program Langkah 4 dan 5. Kemudian jalankan link pada browser, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan
   
Berdasarkan pengamatan disini yaitu menampilkan data relasi level yang ditampilkan di halaman user
![image](https://github.com/RizqiHendraArdiansyah/PWL_2024/assets/91880173/a58eb3a7-f749-4e74-940f-45effe57554d)

7.	Laporkan hasil Praktikum-2.7 ini dan commit perubahan pada git.

