

<html>

<head>

	<title>Pendaftaran</title>

</head>

<body>

	<center>

		<h2><p>Regristasi Mahasiswa Baru</p></h2>

	<form action="proses.php" method="POST">

		<table>



			<tr>

				<td>Nama</td>

				<td><input type="text" name="nama" maxlength="35"></td>

			</tr>

			<tr>

				<td>NIM</td>

				<td><input type="text" name="nim" maxlength="10"></td>

			</tr>


			<tr>

				<td>Jenis Kelamin</td>

				<td><input type="radio" name="jeniskelamin" value="Male" required="">Male<br></td>

				<td><input type="radio" name="jeniskelamin" value="Female">Female<br></td>

			</tr>


				<td>Program studi</td>

				<td>

				<select name="programstudi" required="">

    				<option value="MI">MANAJEMEN INFORMATIKA</option>

    				<option value="IF">TEKNIK INFORMATIKA</option>

    				<option value="PH">PERHOTELAN</option>

    				<option value="TK">TEKNIK KOMPUTER</option>

    				<option value="MP">MANAJEMEN PEMASARAN</option>

    				<option value="KA">KOMPUTERISASI AKUTANSI</option>

    				<option value="MP">TEKNIK TELKOMUNIKASI</option>

    				<option value="SM">SISTEM MULTIMEDIA</option>

    			</select>

    			</td>
    			<tr>

				<td>Fakultas</td>

				<td>

				<select name="fakultas" required="">

    				<option value="FTE">Fakultas Teknik Elektro</option>

    				<option value="FIT">Fakultas Ilmu Terapan</option>

    				<option value="FEB">Fakultas Ekonomi Bisnis</option>

    				<option value="FIK">Fakultas Industri Kreatif</option>

    				<option value="FRI">Fakultas Rekayasa Industri</option>

    			</select>

    			</td>

    		</tr>

    		</tr>

			

			<tr>

				<td>Alamat</td>

				<td><textarea style="height: 100;width: 150;" name="Alamat"></textarea>

			</tr>


			<tr>

				<td>Motto hidup</td>

				<td><textarea style="height: 50;width: 200;" name="mottohidup"></textarea>

			</tr>

		</tr>

			<tr>

				<td></td>

				<td><input type="submit" name="submit" value="Send"></td>

			</tr>

		</table>

	</form>

</center>

</body>

</html>



<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$programstudi=$_POST['programstudi'];
		$fakultas=$_POST['fakultas'];
		$Alamat=$_POST['Alamat'];
        $mottohidup=$_POST['mottohidup'];
		
		$error=array();
		if(strlen($_POST['nim']) != 10){
			$error['nim']=="Harus 10";
		} if(strlen($_POST['nama']) <= 25){
			$error['nama']=="Harus 25";
		} if(empty($email)){
			$error['email']=="Email harus diisi";
		}if(empty($progstud)){
			$error['studi']=="Program Studi harus diisi";
		}if(empty($jenisk)){
			$error['jeniskelamin']=="Jenis Kelamin harus diisi";
		}if(empty($hobi)){
			$error['hobi']=="Hobby harus diisi";
		}if(empty($foto)){
			$error['poto']=="Foto harus diisi";
		}
}
?>