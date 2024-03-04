<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Tampilan KTP</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

.ktp {
  width: 800px;
  margin: 20px auto;
  /* border: 2px solid #000; */
  border-radius: 5px;
  padding: 20px;
  background-image: url('https://lh5.googleusercontent.com/-W4FM3TIV9I0/TYQzLeULsNI/AAAAAAAAAIo/4HwHZD_bgzQ/s1600/KTP+2.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

table {
  width: 100%;
  /* border: solid 2px red; */
}
td {
  /* border: solid 2px blue; */
  
}
.header {
  text-align: center;
}

.header img {
  width: 50px;
  height: 50px;
}

.label {
  font-weight: bolder;
}

.footer {
  text-align: center;
}

.note {
  font-style: italic;
}
    </style>
</head>
<body>
  <div class="ktp">
    <table >
      <tr>
        <td colspan="3" class="header">
          <h1>PROVINSI JAWA TIMUR</h1>
          <h1>KABUPATEN NGANJUK</h1>
        </td>
      </tr>
      <tr>
        <td class="label">NIK</td>
        <td class="value"><b>3518130704030001</b></td>
        <td rowspan="14" style="text-align: center;">
          <img width="210" height="260" src="https://media.licdn.com/dms/image/C4E03AQFHH9NjzGgzng/profile-displayphoto-shrink_400_400/0/1631366438037?e=1714003200&v=beta&t=AL5IIrXI4dUEgKK-zHHlqyYT2d3qFEdMS0pIL8xV5wA" alt=""><br>
          <span>NGANJUK</span><br>
          <span>07-04-2003</span><br>
          <img width="100" src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Ttd_arayuna.png?20150202084346" alt="">
        </td>
      </tr>
      <tr>
        <td class="label">Nama</td>
        <td class="value"><b>RIZQI HENDRA ARDIANSYAH</b></td>
      </tr>
      <tr>
        <td class="label">Tempat/Tanggal Lahir</td>
        <td class="value"><b>NGANJUK, 07-04-2003</b></td>
      </tr>
      <tr>
        <td class="label">Jenis Kelamin</td>
        <td class="value"><b>LAKI-LAKI</b></td>
      </tr>
      <tr>
        <td class="label">Gol. Darah</td>
        <td class="value"><b>AB</b></td>
      </tr>
      <tr>
        <td class="label">Alamat</td>
        <td class="value"><b>LINGKUNGAN BABADAN</b></td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;RT/RW</td>
        <td class="value"><b>001/003</b></td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;Kelurahan/Desa</td>
        <td class="value"><b>WERUNGOTOK</b></td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan</td>
        <td class="value"><b>NGANJUK</b></td>
      </tr>
      <tr>
        <td class="label">Agama</td>
        <td class="value"><b>ISLAM</b></td>
      </tr>
      <tr>
        <td class="label">Status Perkawinan</td>
        <td class="value"><b>BELUM KAWIN</b></td>
      </tr>
      <tr>
        <td class="label">Pekerjaan</td>
        <td class="value"><b>PELAJAR/MAHASISWA</b></td>
      </tr>
      <tr>
        <td class="label">Kewarganegaraan</td>
        <td class="value"><b>WNI</b></td>
      </tr>
      <tr>
        <td class="label">Berlaku Hingga</td>
        <td class="value"><b>SEUMUR HIDUP</b></td>
      </tr>
      
    </table>
    <br>
  </div>
</body>
</html>