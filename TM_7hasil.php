<html>
<head>
  <title>Hasil</title>
<body>
  <h1>Selamat, Data Anda telah tercetak.</h1>
    <?php
    echo "Nama : ", $_POST['nama'], '<br><br>';
    echo "Alamat :", $_POST['alamat'], '<br><br>';
    echo "Jenis Kelamin : ", $_POST['jenis_kelamin'], '<br><br>';
    echo "Golongan Darah : ", $_POST['goldar'], '<br><br>';
    echo "Hobby : ";
    if(!empty($_POST['hobby'])) {
      foreach($_POST['hobby'] as $selected) {
        echo $selected.", ";
      }
    } 
    echo "<br><br>Keterangan : ", $_POST['keterangan'], '<br>';
    ?>
</body>
</head>
</html>
