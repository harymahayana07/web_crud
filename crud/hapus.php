<!-- web_dasar Crud By Arikk -->
<?php
if (isset($_GET['id'])){
require 'conn.php';

$id = $_GET['id'];
$query="DELETE FROM article WHERE id = '$id'";
$result = mysqli_query($koneksi,$query);

if($result) {
   
     header('location:index.php');
     
} else {
    echo 'Data Gagal Terhapus'.mysqli_error($koneksi);
}
}

?>
