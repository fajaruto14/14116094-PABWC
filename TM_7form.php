<html>
<head>
  <title>Form</title>
<body>
<form action="TM_7hasil.php" method="POST">
  <h1>Isilah Form dibawah ini.</h1>
  <section>
    Nama : <input type="text" name="nama" required><br><br>
  </section>
  <section>
    Alamat : <input type="text" name="alamat"><br><br>
  </section>
  <section>
    Jenis Kelamin :
    <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
    <br><br>
  </section>
  <section>
    Golongan Darah :  
    <select name="goldar">
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select> <br><br>
  </section>
  Hobby :
  <section>
    <input type="checkbox" name="hobby[]" value="Berkebun">Berkebun<br>
    <input type="checkbox" name="hobby[]" value="Shopping">Shopping<br>
    <input type="checkbox" name="hobby[]" value="Travelling">Travelling<br>
    <input type="checkbox" name="hobby[]" value="Memasak">Memasak<br>
    <input type="checkbox" name="hobby[]" value="Olahraga">Olahraga<br>
    <input type="checkbox" name="hobby[]" value="Tidur">Tidur<br><br>
  </section>
  Keterangan : <textarea name="keterangan" rows="5" cols="50"></textarea><br><br>
  <input type="submit" value="Simpan">
</form>
</head>
</body>
</html>
