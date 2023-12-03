<?php
include("header.php");
include("../koneksi.php");
if (isset($_POST["namadepan"])) {
    $namaDepan = $_POST["namadepan"];
    $namaBelakang = $_POST["namabelakang"];
    $uname = $_POST["uname"];
    $pswd = $_POST["pswd"];
    // $pswd = password_hash($pswd, PASSWORD_BCRYPT);
    $konfirmasiPassword = $_POST["konfirmasipassword"];
    if ($pswd == $konfirmasiPassword) {
      //echo "$namaDepan $namaBelakang $uname $pswd $konfirmasiPassword"
      $salt = "P3mr0gr4m4nw3b.";
      $pswd = $pswd.$salt;
      include("koneksiadmin.php");
      $SQL = "INSERT INTO user (namadepan, namabelakang, username, password) VALUES (?,?,?,?)";
      $statementSQL = $conn->prepare($SQL);
      $statementSQL->bind_param("ssss",$namaDepan, $namaBelakang, $uname, $pswd);
      if ( $statementSQL->execute()) {
        //echo "Data berhasil disimpan";
        $sukses = 1;
        $namaDepan = "";
        $namaBelakang = "";
        $uname = "";
      } else {
        //echo "Data tidak berhasil disimpan";
        $sukses = 2;
      }
      $statementSQL->close();
      $conn->close();
    } else {
   $sukses = 3;
}
}else {
  $sukses = 0;
  $namaDepan = "";
  $namaBelakang = "";
  $uname = "";
}

?>

<div class="container-fluid mt-3">
  <h3>TAMBAH USER</h3>
  <p>Silakan Isi Formulir Dibawah Ini!</p>

<?php if ($sukses == 1) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Sukses!</strong> Data berhasil disimpan.
    </div>
<?php  
}
elseif ($sukses == 2) { ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Tidak Sukses!</strong> Data tidak berhasil disimpan.
    </div>
<?php
}

elseif ($sukses == 3) { ?>
  <div class="alert alert-danger alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Tidak Sukses!</strong> Password tidak sama dengan konfirmasi password
  </div>
<?php
}
?>
  

  <form method="post" action="user-tambah.php" class="was-validated">
  <div class="mb-3 mt-3">
    <label for="namadepan" class="form-label">Nama Depan:</label>
    <input type="text" class="form-control" id="namadepan" placeholder="Masukkan Nama Depan" name="namadepan" value="<?= $namaDepan ?>" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback" style="display: none">Please fill out this field.</div>
  </div>
  <div class="mb-3 mt-3">
    <label for="namabelakang" class="form-label">Nama Belakang:</label>
    <input type="text" class="form-control" id="namabelakang" placeholder="Masukkan Nama Belakang" name="namabelakang" value="<?= $namaBelakang ?>" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback" style="display: none">Please fill out this field.</div>
  </div>
  <div class="mb-3 mt-3">
    <label for="uname" class="form-label">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Masukkan Username" name="uname" value="<?= $uname ?>" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback" style="display: none">Please fill out this field.</div>
  </div>
  <div class="mb-3">
    <label for="pswd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pswd" placeholder="Masukkan Password" name="pswd" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback" style="display: none">Please fill out this field.</div>
  </div>
  <div class="mb-3">
    <label for="konfirmasipassword" class="form-label">Konfirmasi Password:</label>
    <input type="password" class="form-control" id="konfirmasipassword" placeholder="Masukkan Konfirmasi Password" name="konfirmasipassword" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback" style="display: none">Please fill out this field.</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
include("footer.php");
?>
</body>
</html>