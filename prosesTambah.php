<html>
<head>
	<title>Simpan Buku Tamu</title>
</HEAD>
<body>
<h1>Simpan Buku Tamu MySQL</h1>
<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$conn=mysqli_connect ("localhost","root","","minggu8") or die ("koneksi gagal");
echo "Nama : $nama <br>";
echo "Email : $email <br>";
echo "Komentar : $komentar <br>";
$sqlstr="INSERT INTO bukutamu (nama,email,komentar) values ('$nama','$email','$komentar')";
$hasil= mysqli_query ( $conn,$sqlstr) or die (mysqli_error());
echo "Simpan bukutamu berhasil dilakukan";
?>
</body>
</html> 