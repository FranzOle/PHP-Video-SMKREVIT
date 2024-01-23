<?php 

    require_once "../function.php";
    
    $sql = "SELECT * FROM tblkategori"; 
    $result = mysqli_query($koneksi, $sql);
    
    $jumlah = mysqli_num_rows($result);
    echo '<br>';
    echo $jumlah;
    echo'<br><br>';

    echo '
    <table border="1px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
    </tr>
    ';
    $no = 1;
    if ($jumlah) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $no++ . '</td>';
            echo '<td>' . $row['kategori'] . '</td>';
            echo '</tr>';
        }
    }
    echo '</table>';
?>


    
