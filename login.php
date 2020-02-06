<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body>
    <div id="login-box">
    <div class="logo-login">
        <img src="icon.jpg" width="100px">
    </div>
    <div class="judul2">LOGIN<br/>Registrasi Seminar</div>
    <?php include "pesan.php"?>
    <table id="login-table">
        <form action="autentikasi.php" method="post">
        <tr class="login-row">
            <td>Username</th>
            <td><input type="text" name="username" id="username" required></td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="password" name="password" id="password" required>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Masuk">
            </td>
        </tr>
        </form>
        </tr>
    </table>
    </div>
</body>
</html>
