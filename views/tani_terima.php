<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambahkan Penerima Benih Kelompok Tani </h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail tani-->
                    <?php
                    $sql = "SELECT * FROM tbl_tani WHERE id_kelompok ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel --->

                     

                    <table class="table table-bordered table-striped table-hover"> 
                       
                        
                        <tr>
                            <td width="30%">Nama Kelompok</td> <td><?= $data['nm_kelompok'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Ketua</td> <td><?= $data['nm_ketua'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Anggota</td> <td><?= $data['jml_anggota'] ?> orang</td>
                        </tr>
                        
                    </table>

                    
                        


                        
                        <form class="form-horizontal" action="" method="post">

                                 <div class="form-group col-sm-6">
                            <label for="" class="col-sm-3 control-label">Nama Benih*</label>
                            <div class="col-sm-9">
                                <select name="id_benih" class="form-control" required>
                                  <option value="">-Pilih Nama Benih-</option>  
                                  <?php 
                                    $sql   = "SELECT * FROM tbl_benih";
                                    $d     = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");

                                      
                                      while ($k = mysqli_fetch_array($d)) {?>

                                        <option value="<?php echo $k['id_benih']?>">
                                          <?php echo $k['nm_benih'] ?>
                                              
                                        </option>
                                  <?php           
                                      }
                                   ?>
                                </select>
                            </div>
                            <br>
                            <br>
                            <br>
                            <label for="" class="col-sm-3 control-label">Tanggal*</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl" class="form-control" id="inputEmail3" placeholder="Inputkan nama kelompok" required>
                            </div>
                         </div>
                          
                         <div class="form-group col-sm-6">
                            <label for="" class="col-sm-3 control-label">Jumlah*</label>
                            <div class="col-sm-9">
                                <input type="text" name="jml" class="form-control" id="inputEmail3" placeholder="Inputkan nama kelompok" required>
                            </div>
                            <br>
                            <br>
                            <br>
                            <label for="" class="col-sm-3 control-label">Keterangan*</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="Inputkan nama kelompok" required>
                            </div>
                         </div>
                      
                      
                   
                        <div class="form-group">

                            <div class=" col-sm-12">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>



                </div> 
                <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                  <a href="?page=tani&actions=tampil" class="btn btn-danger btn-sm">
                                    <span class="fa fa-undo"></span> Kembali</a>

        
          
                </div>
                <!--end panel footer-->

                 </form>
            </div>

        </div>
    </div>
</div>




<?php
if($_POST){
    //Ambil data dari form
 
    
    $id_kelompok = $_GET ['id']; 
    $id_benih    = $_POST['id_benih'];
    $tgl         = $_POST['tgl'];
    $jml         = $_POST['jml'];
    $ket         = $_POST['ket'];

    //buat sql
    $sql="INSERT INTO tbl_terima (id_kelompok,id_benih,tgl,jml,ket) 
                    VALUES ('$id_kelompok','$id_benih','$tgl','$jml','ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=tani&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
