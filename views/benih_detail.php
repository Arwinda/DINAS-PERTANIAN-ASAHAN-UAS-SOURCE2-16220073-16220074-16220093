<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Benih </h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail benih-->
                    <?php
                    $sql = "SELECT * FROM tbl_benih WHERE id_benih ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel --->
                    <table class="table table-bordered table-striped table-hover"> 
                       
                        
                        <tr>
                            <td width="30%">Nama Benih</td> <td><?= $data['nm_benih'] ?></td>
                        </tr>
						<tr>
                            <td>Jenis Benih</td> <td><?= $data['jenis'] ?></td>
                        </tr>
                        <tr>
                            <td>Varietas</td> <td><?= $data['varietas'] ?></td>
                        </tr>
						
                    </table>
				
                </div> 
                <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=benih&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Benih </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

