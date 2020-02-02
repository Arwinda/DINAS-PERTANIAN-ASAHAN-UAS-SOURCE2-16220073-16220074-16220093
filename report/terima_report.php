<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penerimaan Benih</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        // $sql = "SELECT * FROM tbl_terima WHERE id_terima='" . $_GET ['id'] . "'";

         $sql = "SELECT * FROM tbl_terima,tbl_tani,tbl_benih WHERE tbl_terima.id_kelompok = tbl_tani.id_kelompok AND
                                                                   tbl_terima.id_benih    = tbl_benih.id_benih
                                                                   
                                                                   AND id_terima='" . $_GET['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Penyaluran Benih </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PEMINJAMAN ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td>Tanggal</td> <td><?= $data['tgl'] ?></td>
                                </tr>
								<tr>
                                    <td>Nama Ketua</td> <td><?= $data['nm_ketua'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Kelompok</td> <td><?= $data['nm_kelompok'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Anggota</td> <td><?= $data['jml_anggota'] ?> orang</td>
                                </tr>
                               

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Arwinda<strong></u><br>
                                        NIP.16220074
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
