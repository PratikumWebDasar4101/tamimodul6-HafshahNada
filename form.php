<?php
session_start();
if(isset($_SESSION["pesan_nama"]) || isset($_SESSION["pesan_nim"]) || isset($_SESSION["pesan_email"])) {
    if(isset($_SESSION["pesan_nama"])) {
        $pesan_nama = $_SESSION["pesan_nama"];
    }else {
        $pesan_nama = "";
    }
    if(isset($_SESSION["pesan_nim"])) {
        $pesan_nim = $_SESSION["pesan_nim"];
    }else {
        $pesan_nim = "";
    }
    if(isset($_SESSION["pesan_email"])) {
        $pesan_email = $_SESSION["pesan_email"];
    }else {
        $pesan_email = "";
    }
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>TA6</title>
    <style type="text/css">
        input[type=text],input[type=password],select {
        }
    </style>
</head>
<body>
    <form action="submit.php" method="post">
        <h2 align="center">Form Pendaftaran </h2>
        <table align="center" cellpadding="2">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
				
			</tr>
			<tr>
				<td>Nama</td>
 				<td>:</td>
				<td>
                  	<input type="text" name="nama">
                    <?php if(isset($_SESSION["pesan_nama"])) { ?>
                    <p><?php echo $pesan_nama ?></p>
                    <?php } ?>
                </td>
			</tr>
				
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
                    <input type="text" name="nim">
                    <?php if(isset($_SESSION["pesan_nim"])) { ?>
                    <p><?php echo $pesan_nim ?></p>
                    <?php } ?>
                </td>
			</tr>

			<tr>
        <td>Kelas</td>
        <td>:</td>
        <td>
        	<input type="radio" name="kelas"option value="d3mi4101">D3MI4101</option>
    		<input type="radio" name="kelas"option value="d3mi4102">D3MI4102</option>
       		<input type="radio" name="kelas"option value="d3mi4103">D3MI4103</option>
      </tr>
      
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
        	<input type="radio" name="jk"option value="Laki-Laki">Laki-Laki</option>
        	<input type="radio" name="jk"option value="Perempuan">Perempuan</option>
        

      </tr>

      <tr>

      <td>Hobi<td>
        <td>
          <input type="checkbox" name="hobi[]" value="Menulis">Menggambar
          <input type="checkbox" name="hobi[]" value="Membaca">Membaca
          <input type="checkbox" name="hobi[]" value="Basket">Basket
          <input type="checkbox" name="hobi[]" value="Badminton">Badminton
          <input type="checkbox" name="hobi[]" value="Berenang">Berenang
        </td>

      <tr>
       <td>Fakultas</td>
       <td>:</td>
       <td> <select class="" name="fak" required>
        <option value="">-- Fakultas --</option>
        <option value="FIF">FIF</option>
        <option value="FIT">FIT</option>
        <option value="FRI">FRI</option>
        <option value="FKB">FKB</option>
        <option value="FIK">FIK</option>
        <option value="FTE">FTE</option>
        <option value="FEB">FEB</option>
      </select>
      </td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><textarea name="alamat"></textarea><br></td>
    </tr>

    <tr>
      <td><input type="submit" name="submit" value="Login"></td>
    </tr>
			
			
        </table>
    </form>
</body>
</html>