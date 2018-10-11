<?php
session_start();
require_once("db.php");

$nim = $_SESSION["user_nim"];

$sql = "SELECT id, judul, isi, gambar FROM posting";
$result = mysqli_query($conn, $sql);
?>
    <table align="center" border=1 cellpadding="6" style="border-collapse: collapse;">
         <center><h2>Daftar Semua Postingan</h2>
        </center>
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
        </tr>
    <?php 
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while($i < mysqli_num_rows($result)) {   
            $row = mysqli_fetch_assoc($result);    
    ?>
        <tr>
            <td>
            <?php 
                echo $i+1 . ".";
            ?>
            </td>
            <td><b><?php echo $row["judul"] ?></b></td>
            <td><?php echo implode(" ",array_slice(explode(" ",$row["isi"]), 0, 5)) . "..." ?></td>
            <td align="center"><img height="60px" width="100px" border="1" src="uploads/<?php echo $row['gambar'] ?>" alt=""></td>
        </tr>
    <?php 
        $i++;
        }
    }else {
    ?>
        <tr>
            <td colspan="4" align="center">0 results.</td>
        </tr>
    <?php
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>TA6</title>
</head>
<body>
<header>
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
 </header>


    

    </table>
</body>
</html>