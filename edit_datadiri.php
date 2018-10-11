<?php
require_once("db.php");
session_start();

if(isset($_SESSION["user_nim"])) {
	$nim = $_SESSION["user_nim"];
    $sql = "SELECT * FROM user WHERE nim=$nim";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jurnal6</title>
</head>
<body>
<header>
   
    </header>
<form action="update.php" method="post">
	<center>
        <table>
			<tr>
				<h2>Edit Biodata</h2>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
                    <input type="text" name="nama" value="<?php echo $row["nama"] ?>">
                    <?php if(isset($_SESSION["pesan_nama"])) { ?>
                    <p><?php echo $pesan_nama ?></p>
                    <?php } ?>
                </td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
                    <input type="text" value="<?php echo $row["nim"] ?>" disabled>
                </td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelas" value="1" <?php if($row["kelas"] == 1):echo "checked"; endif ?>>D3MI4101
					<input type="radio" name="kelas" value="2" <?php if($row["kelas"] == 2):echo "checked"; endif ?>>D3MI4102
					<input type="radio" name="kelas" value="3" <?php if($row["kelas"] == 3):echo "checked"; endif ?>>D3MI4103
					
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="laki-laki" <?php if($row["jk"] == "laki-laki"):echo "checked"; endif ?>>Laki-laki
					<input type="radio" name="jk" value="perempuan" <?php if($row["jk"] == "perempuan"):echo "checked"; endif ?>>Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
                <?php $hobi = explode(",",$row["hobi"]); ?>
				<td>
					<input type="checkbox" name="hobi[]" value="Menggambar" <?php if(in_array("Menggambar",$hobi)):echo "checked"; endif ?>>Menggambar
					<input type="checkbox" name="hobi[]" value="Membaca" <?php if(in_array("Membaca",$hobi)):echo "checked"; endif ?>>Membaca
					<input type="checkbox" name="hobi[]" value="Basket" <?php if(in_array("Basket",$hobi)):echo "checked"; endif ?>>Basket
					<input type="checkbox" name="hobi[]" value="Badminton" <?php if(in_array("Badminton",$hobi)):echo "checked"; endif ?>>Badminton
					<input type="checkbox" name="hobi[]" value="Berenang" <?php if(in_array("Berenang",$hobi)):echo "checked"; endif ?>>Berenang<br>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fak">
						<option <?php if($row["fakultas"] == "FIT"):echo "selected";endif ?>>FIT</option>
						<option <?php if($row["fakultas"] == "FRI"):echo "selected";endif ?>>FRI</option>
						<option <?php if($row["fakultas"] == "FKB"):echo "selected";endif ?>>FKB</option>
						<option <?php if($row["fakultas"] == "FIK"):echo "selected";endif ?>>FIK</option>
						<option <?php if($row["fakultas"] == "FTE"):echo "selected";endif ?>>FTE</option>
						<option <?php if($row["fakultas"] == "FEB"):echo "selected";endif ?>>FEB</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" id="" cols="26" rows="1"><?php echo $row["alamat"] ?></textarea></td>
			</tr>
			<tr>
                <input type="hidden" name="nim" value="<?php echo $row["nim"] ?>">
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>
			</table>


			 <table align="center">
    <td align="center">
  		<a href="tampilan.php">Data Diri</a> -
    	<a href="editpostingan.php">Edit Postingan</a> - 
   		<a href="semua_postingan.php">Semua Postingan</a> - 
    	<a href="edit_datadiri.php">Edit Data Diri</a> - 
    	<a href="posting.php">Posting</a> - 
    	<a href="logout.php">Logout</a>
    </td>

    </table>
</center>
    </form>
</body>
</html>
<?php 
}else {
    echo "Belum Membuat Akun";
} ?>