<?php
error_reporting(0);
include "cover/header.php";
$query="SELECT * FROM merk";
	$hasil=mysqli_query($con,$query);
?>



  <!-- Header -->
  <header class="masthead bg-dark text-white text-center">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
		<img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
          <h1 class="display-4 text-white mt-5 mb-2">Rental Mobil SangCar</h1>
		  <hr class="star-light">
          <p class="lead mb-5 text-white">Selamat di Website SangCar, kami adalah penyedia layanan rental mobil yang berpengalaman 5 tahun. Kami
		  siap melayani aneka kebutuhan transportasi Anda seperti sewa mobil untuk wisata, keluar kota, wisuda mahasiswa, pindahan, pernikahan,
		  mudik lebaran, dll. Kami berkomitmen menyajikan pelayanan prima dengan menyiapkan kendaraan yang bisa diandalkan dari aspek performa maupun estetika.</p>
        </div>
      </div>
    </div>
  </header>
  

  <!-- Page Content -->
  <div class="container" style="background-color:white;">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>Kenapa memilih SangCar?</h2>
        <hr>
        <p>SangCar- Beragam tipe mobil rental yang ada pada kami selalu kami jaga agar bisa tetap memberikan kenyamanan
		dan kepuasan maksimal.</p>
        <p>Kami sangat memahami apa yang diinginkan konsumen rental mobil, pengalaman kami selama bertahun-tahun melayani orang, mengantar ke semua tempat wisata yang ada di Jawa Timur, 
		telah mengajari kami bagaimana memberikan service terbaik dan maksimal untuk penyewa mobil</p>
		<p>Karena itu, kondisi mesin dan aksesoris mobil kami selalu kami rawat dengan baik, sehingga pelanggan
		selalu merasa nyaman didalamnya </p>
        <a class="btn btn-secondary btn-lg btn-block" href="booking.php">Click to booking&raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong></strong>
          <br>Surabaya
          <br>Indonesia, 2019
          <br>
        </address>
        <address>
          <abbr title="Phone">Phone:</abbr>
          (123) 456-7890
          <br>
          <abbr title="Email">E-mail:</abbr>
          <a href="mailto:#">rentalmobilku@gmail.com</a>
        </address>
      </div>
    </div>
    <!-- /.row -->
<div class="row">
  <div class="col-sm-6">
   <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="aplikasisewa.PNG" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Aplikasi Car Sharing Pertama di Indonesia </h5>
        <p class="card-text">Siap mengurangi kemacetan? Kenapa harus mempunyai mobil kalau bisa berbagi? </p>
 
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="col-sm-6">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="service.PNG" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">100% Self Service</h5>
        <p class="card-text">Tanpa perlu serah terima kunci! Isi saldo,sewa,buka & kunci pintu mobil serta melihat jumlah pemakaian langsung dari aplikasi.</p>
       
      </div>
    </div>
  </div>
</div>
	
</div>

  </div>
  
  <div class="row">
  <div class="col-sm-6">
   <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="24jam.PNG" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Sewa Mobil Kapanpun</h5>
        <p class="card-text">Mobil kami tersedia 24 jam, dapat digunakan selama Anda butuhkan !.</p>
 
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="col-sm-6">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="bensin.PNG" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Sudah Termasuk Bensin </h5>
        <p class="card-text">Semua mobil dilengkapi dengan kartu pengisian bahan bakar. Dapat digunakan di SPBU yang telah bekerja sama dengan kami.</p>
       
      </div>
    </div>
  </div>
</div>
	
</div>

  </div>
  
  <div class="row">
  <?php while ($baris=mysqli_fetch_array($hasil)) { ?>
  	 <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo $baris['gambar_kategori'] ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $baris ['nama_merk']?></h4>
            <p class="card-text">Harga Sewa Rp 600.000-Rp. 3.000.000/hari.</p>
          </div>
          <div class="card-footer">
            <a href="booking.php?id=<?php echo $baris ['id']?>" class="btn btn-secondary btn-lg btn-block">More Info!</a>
          </div>
        </div>
      </div>
  <?php } ?>


  
  </div>
  <?php
include "cover/footer.php";
?>

  
