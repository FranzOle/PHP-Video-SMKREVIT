<!-- <h1>Home Page</h1> -->

<?php 
    session_start();
    require_once "dbcontrol.php";
    $db = new DB;

    $sql = "SELECT * FROM tblkategori ORDER BY kategori";
    $row = $db -> getALL($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Restoran SMK | Home Page Page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-4">
                <h2>Home Page Restoran</h2>
            </div>
            <div class="col-md-9">
                <div class="float-end mt-4">Logout</div>
                <div class="float-end mt-4 mr-4 me-4">Login</div>
                <div class="float-end mt-4 mr-4 me-4">Pelanggan</div>
                <div class="float-end mt-4 mr-4 me-4">Daftar</div>
            </div>
            
        </div>

        <div class="row">
        <div class="row mt-4">
            <div class="col-md-3">
                <h3>Kategori</h3>
                <hr>
                <?php if(!empty($row)) {?>
                <ul class="nav flex-column">
                    
                    <?php foreach($row as $r): ?>
                    <li class="nav-item"><a class="nav-link" href="#"><?php echo $r['kategori']?></a></li>
                    <?php endforeach ?>
                </ul>
                <?php }?>
            </div>

            <div class="col-md-9">
                <!-- <h1>Tes</h1> -->
               <?php 
                    if (isset($_GET['f']) && isset($_GET['m'])) {
                        $f = $_GET['f'];
                        $m = $_GET['m'];
    
                        $file = $f . '/' . $m . '.php';
    
                        require_once $file;
                    } else {
                        require_once "home/produk.php";
                    }
                ?>
            </div>
        </div>

        <div class="row fixed-bottom">
            <div class="col">
            <p class="text-center">2024 - copyright@societyco.com</p>
            </div>
        </div>
    </div>
</body>
</html>