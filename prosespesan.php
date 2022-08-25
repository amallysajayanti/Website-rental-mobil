 
<?php include "koneksi_database.php";
 session_start();
$id_mobil=$_POST['id'];
$username=$_SESSION ['username'];
$tanggal_pengambilan=$_POST['tanggal_pengambilan'];
$harga_sewa=$_POST['harga_sewa'];
$JumlahHari=$_POST['jumlah_hari'];
$total_bayar=$_POST['total_bayar'];
//var_dump($username, $id_mobil , $tanggal_pengambilan , $harga_sewa , $total_bayar );
//die;
$query="INSERT INTO keranjang (id_mobil,username,Status,Jumlah_hari,Tanggal_pengambilan,Total_bayar) values($id_mobil,'$username','Belum dibayar',$JumlahHari,'$tanggal_pengambilan',$total_bayar)";
$hasil=mysqli_query($con,$query);
if ($hasil ){
//benar
header("location:keranjang.php");

}else{
//salah
header("location:booking.php");

}
 ?>