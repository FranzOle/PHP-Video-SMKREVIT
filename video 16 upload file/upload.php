<form action="" method="post" enctype="multipart/form-data">
    pilih file gambar:
    <input type="file" name="upload">
    <br>
    <input type="submit" name="kirim" value="simpan">
</form>

<?php 

if (isset($_POST['kirim'])){
    var_dump($_FILES['upload']);

    $file = $_FILES["upload"];

    foreach ($file as $key => $value){
        echo $key. "=>" .$value;
        echo "<br>";
    }

    $name = $_FILES['upload']['name'];
    $temp = $_FILES['upload']['tmp_name'];

    echo $name. "=" .$temp;
    echo $temp;
    move_uploaded_file($temp,"./gambar/" . $name);
}

?>