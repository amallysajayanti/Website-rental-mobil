<?php
include "cover/header.php";
$query="SELECT * FROM keranjang ";
$hasil=mysqli_query($con,$query);
?>
    
	<div id="content-wrapper">

      <div class="container-fluid">
	  

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Pembelian</li>
        </ol>

        <!-- Icon Cards-->
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
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
  <?php
$i=1; 
 while ($baris=mysqli_fetch_array($hasil)) { ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?php echo $baris['id_mobil']?></td>
      <td><?php echo $baris['username']?></td>
      <td><?php echo $baris['Status']?></td>
	  <td><?php echo $baris['Jumlah_hari']?></td>
	  <td><?php echo $baris['Tanggal_pengambilan']?></td>
	  <td><?php echo $baris['Tanggal_kembali']?></td>
	  <td><?php echo $baris['Total_bayar']?></td>
	  <td><?php echo $baris['bukti_pembayaran']?></td>
	  <td> <a href="prosesdelete_admin.php?id=<?php echo $baris['id_keranjang']?>"<button type="button" class="btn btn-danger">Delete</button></a>
	  <a href="proseskonfirmasi_admin.php?id=<?php echo $baris['id_keranjang']?>&id_mobil=<?php echo $baris['id_mobil']?>"<button type="button" class="btn btn-danger">Konfirmasi</button></a>
	  </td>
    </tr>
    </tr>
 <?php } ?>
  </tbody>
</table>
      

      </div>
      <!-- /.container-fluid -->
<?php
include "cover/footer.php";
?>

     