<!DOCTYPE html>
<html>
    <head>
        <title>Print Report</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM arsip WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center"> <br>
					<div class="text-right"><img src="posco.png" alt="posco" style="width:125px;height:35px;">
                   &nbsp &nbsp &nbsp &nbsp </div>
						<h2>Monitoring</h2>
                        <h4></h4>
                        <hr>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Category</td> <td><?= $data['ruang_arsip'] ?></td>
                                </tr>
								<tr>
                                    <td>Plant Location</td> <td><?= $data['no_perkara'] ?></td>
                                </tr>
								<tr>
                                    <td>Name</td> <td><?= $data['penerima'] ?></td>
                                </tr>
                                <tr>
                                    <td>IP</td> <td><?= $data['para_pihak'] ?></td>
                                </tr>
								<tr>
                                    <td>Date</td> <td><?= $data['tgl_masuk'] ?> - <?php echo date('Y-m-d')?></td>
                                </tr>
								<tr>
                                    <td>Status</td> <td><?= $data['status'] ?></td>
                                </tr>
								<tr>
                                    <td>Information</td> <td><?= $data['keterangan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Network Security  
                                        <br><br><br><br>
                                        <u>snys<strong></u><br>
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