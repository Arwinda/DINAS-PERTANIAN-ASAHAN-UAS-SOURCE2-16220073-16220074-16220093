<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Kelompok Tani</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        


                        

                        
						 <div class="form-group">
                            <label for="nm_kelompok" class="col-sm-3 control-label">Nama Kelompok *</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_kelompok" class="form-control" id="inputEmail3" placeholder="Inputkan nama kelompok" required>
                            </div>
                        </div>
                       

                         <div class="form-group">
                            <label for="nm_ketua" class="col-sm-3 control-label">Nama Ketua *</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_ketua" class="form-control" id="inputEmail3" placeholder="Inputkan nama ketua" required>
                            </div>
                        </div>
                       

						<div class="form-group">
                            <label for="jml_anggota" class="col-sm-3 control-label">Jumlah Anggota *</label>
                            <div class="col-sm-9">
                                <input type="text" name="jml_anggota" class="form-control" id="inputPassword3" placeholder="Inputkan jumlah anggota">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tani&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data tani
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
 
	
    $nm_kelompok = $_POST['nm_kelompok'];
    $nm_ketua    = $_POST['nm_ketua'];
	$jml_anggota = $_POST['jml_anggota'];
    //buat sql
    $sql="INSERT INTO tbl_tani (nm_kelompok,nm_ketua,jml_anggota) 
                    VALUES ('$nm_kelompok','$nm_ketua','$jml_anggota')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=tani&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
