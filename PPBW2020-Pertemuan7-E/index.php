<!DOCTYPE html>
<!-- <!DOCTYPE html digunakan untuk mendefinisikan informasi tipe dokumen html -->
<html lang="en" dir="ltr">
<!-- Tag <html> berfungsi untuk membuat sebuah dokumen HTML -->
  <head>
  <!-- Tag <head> berfungsi untuk menyimpan informasi dari sebuah halaman -->
    <meta charset="utf-8">
    <!-- Tag <meta charset=”utf-8”> berarti halaman tersebut telah memberi informasi
    terhadap browser dan search engine untuk melakukan pengkodean karakter sesuai
    ketentuan UTF-8 -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Nilai Akhir Mahasiswa</title>
    <!-- Tag <title> berfungsi untuk membuat judul dari sebuah halaman -->
  </head>
  <body>
  <!-- Tag <body> berfungsi untuk membuat tubuh / isi dari sebuah halaman -->
    <div class = "container">
      <h1>Nilai Akhir Mahasiswa</h1><br>
      <!-- Tag <h1> berfungsi untuk membuat heading. Tag heading biasanya digunakan
      untuk judul dari paragraf, atau bagian dari text yang merupakan judul.
      Tag heading di dalam HTML terdiri dari 6 tingkatan yaitu <h1>,<h2>,<h3>,<h4>,
      <h5>,<h6>  -->
      <div class="main">
        <form action="tampil.php" method="post">
        <!-- tag <form> digunakan untuk menampung macam-macam element yang berkaitan dengan sebuah form
        Tag ini memiliki beberapa atribut yang harus diberikan, seperti:
        1. action untuk menentukan akasi yang akan dilakukan saat data dikirim;
        2. method metode pengiriman data -->
          <table>
          <!-- Tag <table> digunakan untuk memulai tabel -->
            <tr>
              <td><label for="name">Nama</label></td>
              <td><input type="text" name="nama" class="input" required></td>
            </tr>
            <!-- Tag <tr> (table row) digunakan untuk membuat garis -->
            <!-- Tag <td> (table data) digunakan untuk membuat sel -->
            <!-- Tag <input> merupakan tag yang akan digunakan dalam form pengisian. Tag input ini memiliki banyak sekali bentuk yang bisa
            digunakan misalkan isian teks, password, checkbox, radio, button, sampai dengan tombol submit berada dalam tag <input> -->
            <tr>
              <td><label for="nim">NIM</label></td>
              <td><input type="text" name="nim" class="input" required></td>
            </tr>
            <tr>
              <td><label for="matkul">Mata Kuliah</label></td>
              <td><input type="text" name="matkul" class="input" required></td>
            </tr>
            <tr>
              <td><br><label for="nilai_tugas">Nilai Tugas</label></td>
              <td><br><input type="text" name="tugas" class="input" required></td>
            </tr>
            <tr>
              <td><label for="nilai_uts">Nilai UTS</label></td>
              <td><input type="text" name="uts" class="input" required></td>
            </tr>
            <tr>
              <td><label for="nilai_uas">Nilai UAS</label></td>
              <td><input type="text" name="uas" class="input" required></td>
            </tr>
            <tr>
              <td><br><input type="submit" value="Hitung"></td>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
