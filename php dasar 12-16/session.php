<nav>
    <ul>
        <li><a href="?menu=isi">isi</a></li>
        <li>hapus
            <ul>
                <li><a href="?menu=user">hapus user</a></li>
                <li><a href="?menu=nama">hapus nama</a></li>
                <li><a href="?menu=alamat">hapus alamat</a></li>
            </ul>
        </li>
        <li><a href="?menu=destroy">destroy</a></li>
    </ul>
</nav>

<?php 
    session_start();

    var_dump($_SESSION);
    echo '<br><br>';

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        echo $menu;

        switch ($menu) {
            case 'isi':
                isiSession();
                break;
            case 'user':
                unset($_SESSION['user']);
                break;
            case 'nama':
                unset($_SESSION['nama']);
                break;
            case 'alamat':
                unset($_SESSION['alamat']);
                break;
            case 'destroy':
                session_destroy();
                break;
            
            default:
                # code...
                break;
        }
    }

    function isiSession(){
        $_SESSION['user'] = 'Kekep';
        $_SESSION['nama'] = 'Farelio Adji';
        $_SESSION['alamat'] = 'Sidoarjo';
    }
?>