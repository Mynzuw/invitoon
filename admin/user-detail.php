<?php
include("header.php");
include("koneksiadmin.php");
?>
<div class="container-fluid mt-3">
  <h3>USER DETAIL</h3>
  <p>Detail User yang Terdaftar Pada Aplikasi</p>
  <a class="btn btn-primary mb-3" href="user.php">Kembali</a>
<?php
    $id=0;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $id = mysqli_real_escape_string($conn, $id);
    }
    $sql = "SELECT * FROM user WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $id = $row["id"];
        $namaDepan = $row["namadepan"];
        $namaBelakang = $row["namabelakang"];
        $uname = $row["username"];
    } else {
        $id = "";
        $namaDepan = "";
        $namaBelakang = "";
        $uname = "";
    }
    mysqli_close($conn);
?>
  <table id="tableku" class="table table-striped table-hover mb-3">
    <thead>
      <tr>
        <th>ID</th>
        <th><?= $id?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nama Lengkap</td>
            <td><?= $namaDepan?> <?= $namaBelakang?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?= $uname?></td>
        </tr>
    </tbody>
  </table>

  <?php
include("footer.php");
?>
</body>
</html>