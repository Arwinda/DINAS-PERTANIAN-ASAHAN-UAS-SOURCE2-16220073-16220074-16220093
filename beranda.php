<div class="container">
    <div class="row">
           <!-- pop over -->
            <div class="col-md-12 col-sm">         
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button> <i class="fa fa-info-circle"></i>
                    Selamat Datang di Web Penyaluran Benih Kabupaten Asahan
                  </div>
            </div>
            <!-- end pop over -->
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-line-chart"></i> Data Penerima Benih</h3>
                </div>
                <div class="panel-body">
                     <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="5px">No.</th>
                                <th>Tanggal</th>
                                <th>Kelompok</th>
                                <th>Benih</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_terima,tbl_tani,tbl_benih WHERE tbl_terima.id_kelompok = tbl_tani.id_kelompok AND 
                                                                                      tbl_terima.id_benih = tbl_benih.id_benih";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['tgl'] ?></td>
                                    <td><?= $data['nm_kelompok'] ?></td>
                                    <td><?= $data['nm_benih'] ?></td>
                                    <td><?= $data['jml'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                   <center><h3 class="panel-title">Masuk Ke Sistem</h3></center> 
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>
