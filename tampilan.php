<?php
require_once("db.php");
session_start();

if (isset($_SESSION["user_nim"])) {
    $nim = $_SESSION["user_nim"];
    $sql = "SELECT * FROM user WHERE nim='$nim'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
 
    <table align="center" >
        <center>
            
        <h2>Data Diri</h2></center>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $row["nama"] ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?php echo $row["nim"] ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo $row["kelas"] ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $row["jk"] ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?php echo $row["hobi"] ?></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><?php echo $row["fakultas"] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $row["alamat"] ?></td>
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

</body>
</html>
<?php
}else {
    echo "Silahkan Login";
}