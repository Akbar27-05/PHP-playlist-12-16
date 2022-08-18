    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- <form action="" method="get">
            Nama:
            <input type="text" name="nama">
            Alamat:
            <input type="text" name="alamat">
            <input type="submit" name="kirim" value="simpan">
        </form> -->

        <nav>
            <ul>
                <li><a href="?menu=get test/sejarah">sejarah</a></li>
                <li><a href="?menu=get test/about">about</a></li>
                <li><a href="?menu=get test/contact">contact</a></li>
            </ul>
        </nav>

    </body>
    </html>

    <?php
    // $nama = $_GET['nama'];
    // $alamat = $_GET['alamat'];

    // echo $nama;
    // echo '<br>';
    // echo $alamat;

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        require_once $menu.'.php';
    }

    ?>