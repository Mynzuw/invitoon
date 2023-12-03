<?php
include("header.php");
include("koneksiadmin.php");
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">



<div class="container-fluid mt-3">
  <h3>BERITA MANAGEMENT</h3>
  <p>List Berita yang Terdaftar Pada Aplikasi</p>
  <a class="btn btn-primary mb-3" href="user-tambah.php">Tambah Berita</a>
  <table id="tableku" class="table table-striped table-hover mb-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Gambar</th>
        <th>Tanggal</th>
        <th>Judul</th>
      </tr>
    </thead>
    <tbody>
<?php 
 $sql = "SELECT * FROM berita ORDER BY tgl DESC";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
      <tr>
        <td><a href="berita-detail.php?id=<?= $row["id"] ?>"><?= $row["id"] ?></a></td>
        <td><img src="../<?= $row["gbr"] ?>"style ="width:100px" ></td>
        <td><?= $row["tgl"] ?></td>
        <td><?= $row["judul"] ?></td>
      </tr>
<?php
 }
}
mysqli_close($conn);
?>
    </tbody>
  </table>
</div>
<?php
include("footer.php");
?>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script> let table = new DataTable("#tableku"); </script>
</body>
</html>