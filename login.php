<?php
session_start();
if(isset($_SESSION["proses_login"])) {
    $proses_login = $_SESSION["proses_login"];
}else {
    $proses_login = "";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>TA6</title>
</head>
<body>
    <form action="proses_login.php" method="post">
        <center><h2>Masuk</h2>
        <?php if(isset($_SESSION["proses_login"])) { ?>
        <p><?php echo $proses_login; ?></p>
        <?php } ?>
        <table>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="username"></td>
            </tr>
            <tr>
                <th align="left" colspan="2">Password</th>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td align="left"><a href="form.php">Registrasi</a></td>
                <td align="right"><input type="submit" name="submit" value="Masuk"></td>
            </tr>
            </center>
        </table>
    </form>
</body>
</html>