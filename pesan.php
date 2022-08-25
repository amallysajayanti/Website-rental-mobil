<?php
error_reporting(0);
include "cover/header.php";
$id= $_GET['id']; 
$query="SELECT * FROM mobil WHERE id='$id'";
	$hasil=mysqli_query($con,$query);
?>

  <!-- Page Content -->
  <div class="container text-white">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
	<?php while ($baris=mysqli_fetch_array($hasil)) { ?>
	<form action="prosespesan.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Merk</label>
      <input type="text" class="form-control" id="inputMerkl4" value="<?= $baris['Merk']?>" name="merk" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Type</label>
      <input type="text" class="form-control" id="inputType4" value="<?= $baris['Type']?>" name="type" disabled>
	  <input type="text" class="form-control" id="inputType4" value="<?= $baris['id']?>"  name="id" hidden>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Tanggal Pengambilan</label>
    <input type="date" class="form-control" id="TanggalPengambilan" placeholder="" name="tanggal_pengambilan">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Jumlah Hari</label>
      <input type="text" class="form-control" id="JumlahHari" name="jumlah_hari" onkeyup="sum();">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Harga Sewa</label>
      <input type="text"  id="HargaSewa" class="form-control" value="<?= $baris['Harga_Sewa']?>" name="harga_sewa">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Total Bayar</label>
      <input type="text" class="form-control" id="TotalBayar" name="total_bayar">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Check Out</button>
</form>
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
<script> 
function sum(){
	var txtFirstNumberValue = document.getElementById("JumlahHari").value;
	var txtSecondNumberValue = document.getElementById("HargaSewa").value;
	var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
	
		document.getElementById("TotalBayar").value = result;
}
</script>