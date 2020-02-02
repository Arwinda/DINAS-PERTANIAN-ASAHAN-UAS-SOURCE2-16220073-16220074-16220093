<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_benih WHERE id_benih='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Edit Data Benih</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="POST">
                    <input type="hidden" name="id" value="<?= $id ?>">
						 <div class="form-group">
                            <label for="nm_benih" class="col-sm-3 control-label">Nama Benih *</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_benih" value="<?=$data['nm_benih']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Benih" required>
                            </div>
                        </div>
                       

                         <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis *</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" value="<?=$data['jenis']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis" required>
                            </div>
                        </div>
                       

						<div class="form-group">
                            <label for="varietas" class="col-sm-3 control-label">Varietas *</label>
                            <div class="col-sm-9">
                                <input type="text" name="varietas" value="<?=$data['varietas']?>" class="form-control" id="inputPassword3" placeholder="Inputkan varietas">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=benih&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data benih
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

                        </div>
                        
                        </div>

<?php
if($_POST){
    //Ambil data dari form
 
    $nm_benih = $_POST['nm_benih'];
    $jenis    = $_POST['jenis'];
	$varietas = $_POST['varietas'];
    //buat sql
    $sql="UPDATE tbl_benih SET nm_benih = '$nm_benih',
                               jenis    = '$jenis',
                               varietas = '$varietas'
                         WHERE id_benih = '$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Update Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=benih&actions=tampil');</script>";
    }else{
        echo "<script>alert('Update Data Gagal');<script>";
    }
    }

?>
