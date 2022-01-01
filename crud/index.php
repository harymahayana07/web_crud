<!-- index web_dasar by Arikk -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Article</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h3 class="alert alert-info"> Data Artikel</h3>

    <a href="tambah.php" class="btn btn-info"> Tambah Data</a>
    <br><br>
<table class="table" border="1px">
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
    </a> <a href="hapus.php?id=<?= $data->id;?>">
       <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
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