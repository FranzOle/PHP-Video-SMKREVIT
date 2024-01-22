<form action="" method="get">
    <label for="">Email :</label>
    <input type="text" name="email" id="">
    <br>
    <label for="">Password :</label>
    <input type="text" name="password" id="">
    <input type="submit" name="kirim" value="login">
</form>
<?php 

if (isset($_GET["kirim"])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    echo $email;
    echo '<br>';
    echo $password;
}

?>