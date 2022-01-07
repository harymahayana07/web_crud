<!-- index web_dasar by Arikk -->

<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Article</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.css">
</head>
<body>
    <div class="container">
    <h3 class="alert alert-info"> Welcome 
        <?= $_SESSION['fullname'];?> To Web Data Artikel 
        
    </h3>
    <a href="tambah.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
    <a href="logout.php" class="btn btn-danger float-end mb-3">Logout</a>
    <!-- menambahkan search -->
<!-- <div class="row">
    <div class="col-md">
         <a href="tambah.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
         <form action="" method="POST">
         <input type="text" name="txtsearch" class="form-control" placeholder="Search Data Mahasiswa" autofocus autocomplete="off">
         <button class="btn btn-outline-secondary" name="btnsearch" type="button" ><i class="fas fa-search"></i></button>
         </form>
    </div>
    </div>  -->
    <!-- <input type="text" name="txtSearch" class="form-control" placeholder="Search Data Mahasiswa">
    <input type="submit" name="btnCari" class="form-control"> -->
<!-- <div class="input-group sm-3">
    <div class="row">
        <div class="col ">
        <a href="tambah.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
        </div>
<div class="col-lg-4">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
  </div> 
</div>
</div> -->
    <br><br>
<table class="table table-dark table-bordered border-primary" >
<thead>
    <tr>
        <th>No</th>
        <th>Author</th>
        <th>Title</th>
        <th>Body</th>
        <th>Keyword</th>
        <th>Aksi</th>  
    </tr>
    <tbody>
        <?php
        require 'conn.php';
        $query = "SELECT * FROM article";
        $sql = mysqli_query($koneksi,$query);
        $no = 1;
        while ($data = mysqli_fetch_object($sql)) {
        ?>
        <tr>
        <td><?= $no++; ?></td>
        <td><?= $data->author; ?></td>
        <td><?= $data->title; ?></td>
        <td><?= $data->body; ?></td>
        <td><?= $data->keyword; ?></td>
       <td><a href="edit.php?url-id=<?= $data->id;?>">
       <input type="submit" value="Edit" class="btn btn-warning" >
       <?php
       if($_SESSION['role']=='admin'){

       
       ?>
    </a> <a href="hapus.php?id=<?= $data->id;?>">
       <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
       <?php 
       }
       ?>
    </td>
    </tr>
    <?php
        }
        ?>
    </tbody>
</thead>
</table>
    </div>
</body>
</html>