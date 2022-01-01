<!-- web dasar Crud By Arikk -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h3 class="alert alert-info"> Data Artikel</h3>

    <?php
//kekurangan : tambahnya masih bisa menginputkan script/tag html.(belum menambahkan htmlspecialchars);
require 'conn.php';
    if(isset($_POST['simpan'])){
        $txtauthor = $_POST['txtauthor'];
        $txttitle = $_POST['txttitle'];
        $txtbody = $_POST['txtbody'];
        $txtkeyword = $_POST['txtkeyword'];
$sql = "INSERT INTO article VALUES (NULL,'$txtauthor','$txttitle','$txtbody','$txtkeyword')";
$query = mysqli_query($koneksi,$sql);

if($query)  {
    header('location:index.php');
}else {
    echo 'Query Error'. mysqli_error($koneksi);
}
}
    ?>

<form action="#" method="Post">

<div class="mb-3">
    <label for="author">Author</label>
    <input type="text" id="author" name="txtauthor" class="form-control" required>
</div>
<div class="mb-3">
    <label for="title">Title</label>
    <input type="text" id="title" name="txttitle" class="form-control" required>
</div>
<div class="mb-3">
    <label for="body">Body</label>
     <textarea name="txtbody" id="body" class="form-control" cols="30" rows="5" required></textarea>
</div>
<div class="mb-3">
    <label for="keyword">Keyword</label>
    <input type="text" id="keyword" name="txtkeyword" class="form-control" required>
</div>

<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>
    </div>
</body>
</html>