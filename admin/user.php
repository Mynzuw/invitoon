<?php
include("header.php");
include("koneksiadmin.php");
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">



<div class="container-fluid mt-3">
  <h3>USER MANAGEMENT</h3>
  <p>List User yang Terdaftar Pada Aplikasi</p>
  <a class="btn btn-primary mb-3" href="user-tambah.php">Tambah User</a>
  <table id="tableku" class="table table-striped table-hover mb-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
      </tr>
    </thead>
    <tbody>
<?php 
 $sql = "SELECT * FROM user";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
      <tr>
        <td><a href="user-detail.php?id=<?= $row["id"] ?>"><?= $row["id"] ?></a></td>
        <td><?= $row["namadepan"] ?></td>
        <td><?= $row["namabelakang"] ?></td>
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