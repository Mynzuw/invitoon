<?php
include("header.php");
include("koneksiadmin.php");
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<style type="text/css">
     
      h1 {
        text-transform: uppercase;
        color: #0D6EFD;
        
      }
    button {
          background-color: #0D6EFD;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #0D6EFD;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  



<div class="container-fluid mt-3">
  <h3>KOMIK MANAGEMENT</h3>
  <p>List Komik yang Terdaftar Pada Website Aplikasi</p>
  <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModal">Tambah Komik</button>
  <table id="tableku" class="table table-striped table-hover mb-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Cover</th>
        <th>Judul Komik</th>
        <th>Genre</th>
        <th>Deskripsi</th>
        <th>Pengarang</th>
        <th>Tanggal</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php 
 $sql = "SELECT * FROM komik ORDER BY tanggal DESC";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
      <tr>
        <td><a href="berita-detail.php?id=<?= $row["id"] ?>"><?= $row["id"] ?></a></td>
        <td><img src="gambar/<?= $row["cover"] ?>"style ="width:100px" ></td>
        <td><?= $row["judul_komik"] ?></td>
        <td><?= $row["genre"] ?></td>
        <td><?= $row["deskripsi"] ?></td>
        <td><?= $row["pengarang"] ?></td>
        <td><?= $row["tanggal"] ?></td>
        <td>
        <a class="btn btn-primary mb-3" href="komik-edit.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a class="btn btn-primary mb-3" href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
        </td>
      </tr>
<?php
 }
}
mysqli_close($conn);
?>
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h1>Tambah Komik</h1>

        </div>
        <div class="modal-body">
          
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Judul Komik</label>
          <input type="text" name="judul_komik" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Genre</label>
         <input type="text" name="genre" required="" />
        </div>
        <div>
          <label>Pengarang</label>
         <input type="text" name="pengarang" required="" />
        </div>
        <div>
          <label>Cover Komik</label>
         <input type="file" name="cover" required="" />
        </div>
        <div>
         <button type="submit">Simpan Komik</button>
        </div>
        </section>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>


<?php
include("footer.php");
?>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script> let table = new DataTable("#tableku"); </script>
</body>
</html>