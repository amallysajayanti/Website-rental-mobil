<?php
error_reporting(0);
include "cover/header.php";
$username=$_SESSION['username'];
$query="SELECT * FROM keranjang WHERE username='$username'";
	$hasil=mysqli_query($con,$query);
?>
  <!-- Page Content -->
  <div class="container"  style="background-color:white;">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
	
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id_mobil</th>
      <th scope="col">Username</th>
      <th scope="col">Status</th>
      <th scope="col">Jumlah hari</th>
	  <th scope="col">Tanggal pengambilan</th>
	  <th scope="col">Tanggal kembali</th>
	  <th scope="col">Total bayar</th>
	  <th scope="col">Bukti pembayaran</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($baris=mysqli_fetch_array($hasil)) { ?>
    <tr>
   
      <td><?php echo $baris['id_mobil']?></td>
      <td><?php echo $baris['username']?></td>
      <td><?php echo $baris['Status']?></td>
	  <td><?php echo $baris['Jumlah_hari']?></td>
	  <td><?php echo $baris['Tanggal_pengambilan']?></td>
	  <td><?php echo $baris['Tanggal_kembali']?></td>
	  <td><?php echo $baris['Total_bayar']?></td>
	  <td><?php echo $baris['bukti_pembayaran']?></td>
	  <td> <a href="prosesdelete.php?id=<?php echo $baris['id_keranjang']?>"<button type="button" class="btn btn-danger">Delete</button></a>
	  <a href="update.php?id=<?php echo $baris['id_keranjang']?>"<button type="button" class="btn btn-danger">Update</button></a>
	  </td>
    </tr>
  <?php } ?>
	
	
	
  </tbody>
</table>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->


  <?php
include "cover/footer.php";
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
