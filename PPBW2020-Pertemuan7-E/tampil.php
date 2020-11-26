<?php
$nama = $_POST['nama'];
/*Membuat variabel dengan nama variabel "nama" yang isinya memanggil "nama" dari file index.php dengan method post*/
$nim = $_POST['nim'];
/*Membuat variabel dengan nama variabel "nim" yang isinya memanggil "nim" dari file index.php dengan method post*/
$matkul = $_POST['matkul'];
/*Membuat variabel dengan nama variabel "matkul" yang isinya memanggil "matkul" dari file index.php dengan method post*/
$tugas = $_POST['tugas'];
/*Membuat variabel dengan nama variabel "tugas" yang isinya memanggil "tugas" dari file index.php dengan method post*/
$uts = $_POST['uts'];
/*Membuat variabel dengan nama variabel "uts" yang isinya memanggil "uts" dari file index.php dengan method post*/
$uas = $_POST['uas'];
/*Membuat variabel dengan nama variabel "uas" yang isinya memanggil "uas" dari file index.php dengan method post*/

$nilai_tugas = $tugas;
$nilai_uts = $uts;
$nilai_uas = $uas;

/*Nilai akhir diperoleh dengan menambahkan nilai tugas, nilai uts, dan nilai uas, dengan masing-masing bobot yaitu :
- Nilai tugas = 20%
- Nilai uts = 40%
- Nilai uas = 40% */
$nilai_akhir = ($nilai_tugas * 0.2) + ($nilai_uts * 0.4) + ($nilai_uas * 0.4);

/*Rentang Nilai yang digunakan yaitu :
- Akan lulus dengan predikat A jika nilai lebih besar atau sama dengan 80
- Akan lulus dengan predikat B jika nilai lebih besar atau sama dengan 70
- Akan lulus dengan predikat C jika nilai lebih besar atau sama dengan 60
- Akan Tidak Lulus jika nilai lebih kecil dari 60
 */
if ($nilai_akhir>=80) {
  $nilai_predikat = ("A");
  $ket = ("Anda Dinyatakan Lulus Dengan Predikat A");
}
else if ($nilai_akhir>=70) {
  $nilai_predikat = ("B");
  $ket =("Anda Dinyatakan Lulus Dengan Predikat B");
}
else if ($nilai_akhir>=60) {
  $nilai_predikat = ("C");
  $ket = ("Anda Dinyatakan Lulus Dengan Predikat C");
}
else if ($nilai_akhir<60) {
  $nilai_predikat = ("D");
  $ket = ("Anda Dinyatakan Tidak Lulus");
}

?>

<!-- Menampilkan Data -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Nilai Akhir Mahasiswa</title>
  </head>
  <body>
    <div class = "container-hasil">
      <h1>Nilai Akhir Mahasiswa</h1><br>
      <div class="main-hasil">
        <form action="index.php" method="get">
          <table>
            <tr>
              <td><label for="name">Nama</label></td>
              <td><input type="text" name="nama" class="input" value="<?php echo $nama ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="nim">NIM</label></td>
              <td><input type="text" name="nim" class="input" value="<?php echo $nim ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="matkul">Mata Kuliah</label></td>
              <td><input type="text" name="matkul" class="input" value="<?php echo $matkul ?>" readonly></td>
            </tr>
            <tr>
              <td><br><label for="nilai_tugas">Nilai Tugas</label></td>
              <td><br><input type="text" name="tugas" class="input" value="<?php echo $tugas ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="nilai_uts">Nilai UTS</label></td>
              <td><input type="text" name="uts" class="input" value="<?php echo $uts ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="nilai_uas">Nilai UAS</label></td>
              <td><input type="text" name="uas" class="input" value="<?php echo $uas ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="$nilai_akhir">Nilai Akhir</label></td>
              <td><input type="text" name="nilai_akhir" class="input" value="<?php echo $nilai_akhir ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="$nilai_predikat">Predikat</label></td>
              <td><input type="text" name="predikat" class="input" value="<?php echo $nilai_predikat ?>" readonly></td>
            </tr>
          </table>
          <br>
            <center><b><?php echo $ket?></b></center>
        </form>
      </div>
    </div>
  </body>
</html>
