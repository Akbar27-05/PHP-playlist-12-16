<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama:</label>
                </td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password:</label>
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
        </table>

        <button type="submit" name="kirim">Kirim</button>
    </form>
</body>

</html>

<?php
if (isset($_POST['kirim'])) {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<h1>Halo, Selamat datang " . $name . ' ! </h1>';
    echo '<br>';
    echo "Email anda: ". $email;
    echo "<br>";
    echo "Password anda: ". $password;
}

?>