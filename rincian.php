<?php
include 'cover/header.php';
$id= $_GET['id']; 
$query="SELECT * FROM mobil join merk WHERE mobil.id=$id and merk.id=mobil.merk";
	$hasil=mysqli_query($con,$query);
?>
  <!-- Page Content -->
  <div class="container"  style="background-color:white;">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
	
	<?php while ($baris=mysqli_fetch_array($hasil)) { ?>
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="mobil/<?php echo $baris['gambar'] ?>" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light"><?php echo $baris['Type']?></h1>
        <p><i class="fas fa-car-side" style="color: #FFD700;"></i> Merk	=<?php echo $baris['nama_merk']?></p>
		<p><i class="fas fa-wheelchair" style="color: #FFD700;"></i> Jumlah kursi =<?php echo $baris['Jumlah_kursi']?></p>
		<p><i class="fas fa-coins" style="color: #FFD700;"></i> Harga Sewa = Rp<?php echo $baris['Harga_Sewa']?></p>
       
<?php if ($_SESSION["username"]!=null){
			  ?>
  <a class="btn btn-primary" href="pesan.php?id=<?php echo $baris['id']?>">Call to Action!</a>
	   <?php } else { ?>
	   <a class="btn btn-primary" href="#">Login!</a>
	   
	   <?php } ?>
      </div>
	  
	  <?php } ?>
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
