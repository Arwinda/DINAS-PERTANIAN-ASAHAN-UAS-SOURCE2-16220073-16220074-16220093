<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">

    

        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-print"></span> Laporan Data Penerima Benih</h3>
                </div>
                <div class="panel-body">
                  <!-- <a href="" id="cetak" class="btn btn-danger btn-sm">
                     <span class="fa fa-print"></span> Cetak Laporan
                  </a> -->
                  <br>
                  <br>

                   <div id='data-penerima'>
                  <!-- awal tampilkan saat mode print aktif -->
                    <div class='title'> 
                        <center>
                           <img src='img/pertanian.png' alt='' 
                         class='' style='height: 70px;width: 70px'></center>
                               <center>
                                  <b>LAPORAN DATA PENERIMA PENYALURAN BENIH<br/>
                           DINAS PERTANIAN KABUPATEN ASAHAN<br/>
                           <h6>Jl. Jendral Gatot Subroto No.268, Sentang - Kecamatan Kisaran Timur<br>
                              Kabupaten Asahan, Sumatera Utara, Kode Pos : 21223</h6>
                         </b>
                         </center>
                             <hr>
                     </div>
                        <!-- akhir tampilkan saat mode print aktif -->

                    <table id="" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Tanggal</th>
                                <th>Nama Kelompok</th>
                                <th>Nama Benih</th>
                                <th>Jumlah</th>
                                <th class="action">Status</th>
                                <th class="action">Aksi</th>
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
                                    <td class="action"><span class='text' style='color:green;'>
                                             <i class='fa fa-check'></i> sudah menerima
                                        </span>
                                    </td>

                                    <td>
                                        <a href="report/terima_report.php?id=<?= $data['id_terima'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    
                                    <a href="?page=terima&actions=hapus&id=<?= $data['id_terima'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-trash-o"></span>
                                        </a></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/terima_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Data

                                    </a>
                                  
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- <div id="cetak" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="_blank" action="report/peminjaman_pertahun.php" method="post">
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div> -->

