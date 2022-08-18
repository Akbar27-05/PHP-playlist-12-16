<h3>Masukan Gambar</h3>
<form action="" method="post" enctype="multipart/form-data">
    pilih file gambar:
    <input type="file" name="upload" id="">
    <input type="submit" name="kirim" value="simpan">

</form>

<?php 
    if (isset($_POST['kirim'])) {
        // $file = $_FILES['upload'];

        // var_dump($_FILES['upload']);

        // foreach ($file as $key => $value) {
        //     echo $key. '= ' .$value;
        //     echo '<br>';
        // }
        
        $name = $_FILES['upload']['name'];
        $tempat = $_FILES['upload']['tmp_name'];

        // echo $name. ' = ' .$tempat;

        move_uploaded_file($tempat, 'img/' .$name);

        echo 'DATA TELAH SUKSES TERKIRIM';
    }
?>