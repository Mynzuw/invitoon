<?php
include("header.php");
include("../koneksi.php");
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />


  



<div class="container-fluid mt-3">
  <h3>KOMIK MANAGEMENT</h3>
  <p>List Komik yang Terdaftar Pada Website Aplikasi</p>
  <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModal">Tambah Komik</button>



  
<a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>



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
        <td><a href="komik-detail.php?id=<?= $row["id"] ?>"><?= $row["id"] ?></a></td>
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