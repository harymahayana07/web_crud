<!-- Web_dasar Crud by Arikk -->
<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
?>
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
    <h3 class="alert alert-info"> EDIT DATA ARTIKEL</h3>
    <?php
    require 'conn.php';
        //menampilan data dalam table
        if(isset($_GET['url-id'])){
            $input_id = $_GET['url-id'];
            $query = "SELECT * FROM article WHERE id ='$input_id'";
            $result = mysqli_query($koneksi,$query);
            $data = mysqli_fetch_object($result);
        }
        //simpan data yang telah dirubah dalam table
       if(isset($_POST['simpan'])){
                 $input_id = $_POST['txtid'];
                 $txtauthor = $_POST['txtauthor'];
                 $txttitle = $_POST['txttitle'];
                 $txtbody = $_POST['txtbody'];
                 $txtkeyword = $_POST['txtkeyword'];
        //update syntax dalam mysql
                 $sql = "UPDATE article SET 
                         author='$txtauthor', title='$txttitle',body='$txtbody',keyword='$txtkeyword'
                         WHERE id = $input_id";
                 $result = mysqli_query($koneksi,$sql);
        //perulangan jika dia berhasil maka ke index dan data diperbarui
                if($result)  {
                  header('location:index.php');
      //jika salah data tidak berhasil diperbarui dan menghasilkan error
                }else {
                  echo 'Query Error'. mysqli_error($koneksi);
                }
                }
              ?>
<form action="#" method="Post">
<div class="mb-3">
    <label for="">Author</label>
    <input type="hidden" name="txtid" class="form-control" value="<?=$data->id;?>">
    <input type="text" name="txtauthor" class="form-control" value="<?=$data->author;?>">
</div>
<div class="mb-3">
    <label for="">Title</label>
    <input type="text"  name="txttitle" class="form-control" value="<?=$data->title;?>" >
</div>
<div class="mb-3">
    <label for="">Body</label>
     <textarea name="txtbody"  class="form-control" cols="30" rows="5" ><?=$data->body;?></textarea>
</div>
<div class="mb-3">
    <label for="">Keyword</label>
    <input type="text"  name="txtkeyword" class="form-control" value="<?=$data->keyword;?>">
</div>

<input type="submit" name="simpan" value="Simpan Perubahan Data" class="btn btn-primary">
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>
    </div>
</body>
</html>