<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Kelompok Tani </h3>
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
				
                </div> 
                <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=tani&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data tani </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

