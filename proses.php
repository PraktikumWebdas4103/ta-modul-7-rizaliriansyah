<form action="#" method="POST">

<TABLE>

<nav>

<td><a href="regris.php">input new data</a> | </td> <td align="right"><input type="text" name="nim" placeholder="search by nim"><input type="submit" name="submit"

	value="search"></td>


</nav>

</TABLE>




<?php

	$hostname = "localhost";

	$username = "root";

	$pass = "";

	$db = "mahasiswaa";

	$con = new mysqli($hostname, $username, $pass, $db);

	if($con==false){

		die("koneksi gagal". $con->connect_error);

	}

		if (isset($_POST['submit'])) {

			$nama=$_POST['nama'];

			$nim=$_POST['nim'];

			$jeniskelamin=$_POST['jeniskelamin'];

			$programstudi=$_POST['programstudi'];

$fakultas=$_POST['fakultas'];

			$Alamat=$_POST['Alamat'];

$mottohidup=$_POST['mottohidup'];

		

	

	$sql="INSERT INTO mahasiswa(nama,nim,jeniskelamin,programstudi,fakultas,Alamat,mottohidup) 

	VALUES ('$nama','$nim','$jeniskelamin','$programstudi','$fakultas','$Alamat','$mottohidup')";

	if(mysqli_query($con,$sql)){

		echo "Database sudah Masuk";

	}else{

		die(mysqli_error($con));

		echo "Database Salah";

	}

	if(isset($_POST['submit'])) {

echo "<br><br>";

$sql2 = "SELECT * FROM mahasiswa WHERE nim='$nim'";

$viewdata = mysqli_query($con,$sql2);

$view = mysqli_fetch_array($viewdata);

echo "Hasil Pencarian Data : <br>NIM :".$view['nim']."<br>"."NAMA :".$view['nama']."<br>"."Jenis Kelamin :".$view['jeniskelamin']."<br>"."programstudi :".$view['programstudi']."<br>"."fakultas :".$view['fakultas']."<br>"."mottohidup :".$view['mottohidup'];

}

}

	?>

