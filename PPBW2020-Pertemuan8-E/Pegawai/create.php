<html>
<head>
    <title>Tambah Data</title>
</head>

<body>
    <a href="index.php">Back to Home</a>
    <br></br>

    <form action="create.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Motto</td>
                <td><input type="text" name="motto" required></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $motto = $_POST['motto'];

        include("../conn.php");

        $result = mysqli_query($conn, "INSERT INTO mahasiswa(NIM,Nama,Alamat,Email,Motto) VALUES('$nim','$nama','$alamat','$email','$motto')");
        if ($result) {
            echo "<script>alert('Data berhasil ditambahkan');document.location.href='index.php'</script>/n";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    }
    ?>
</body>
</html>
