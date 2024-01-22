<form action="" method="post">
    <label for="">Email :</label>
    <input type="text" name="email" id="">
    <br>
    <label for="">Password :</label>
    <input type="text" name="password" id="">
    <input type="submit" name="kirim" value="login">
</form>
<?php 

if (isset($_POST["kirim"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;
    echo '<br>';
    echo $password;
}

?>