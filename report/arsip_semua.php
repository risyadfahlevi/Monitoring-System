<!DOCTYPE html>
<html>
    <head>
        <title>Print All Data</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center"><br>
					<div class="text-right"><img src="posco.png" alt="posco" style="width:125px;height:35px;">
                   &nbsp &nbsp &nbsp &nbsp </div>
                        <h2>Monitoring Posco ICT </h2>
                        <h4></h4>
                        <hr>
                        <h3>All Data</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th><center>No.</center></th><th><center>Category</center></th><th width="18%"><center>Plant Location</center></th><th><center>Name</center></th><th width="15%"><center>IP</center></th><th width="10%"><center>Date</center></th><th><center>Status</center></th><th><center>keterangan</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM arsip";
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
									<td><?= $data['ruang_arsip'] ?></td>
									<td><?= $data['no_perkara'] ?></td>
									<td><?= $data['penerima'] ?></td>
                                    <td><?= $data['para_pihak'] ?></td>
									<td><?= $data['tgl_masuk'] ?></td>
									<td><?= $data['status'] ?></td>
									<td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Network Security
                                        <br><br><br><br>
                                        <u>Snys<strong></u><br>
									</td>
								</tr>
							</tfoot> 
                        </table>
						<div class="text-left"><img src="kp.png" alt="krakatau posco" style="width:165px;height:40px;">
                   &nbsp &nbsp &nbsp &nbsp </div>
                    </div>
                </div>
            </div>
    </body>
</html>