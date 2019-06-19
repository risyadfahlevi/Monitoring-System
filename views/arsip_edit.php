<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM arsip WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						<div class="form-group">
                            <label for="ruang_arsip" class="col-sm-3 control-label">Category</label> <font color="red">*update kembali</font>
                            <div class="col-sm-2 col-xs-9">
                                <select name="ruang_arsip" class="form-control">
									<option value="USER">USER</option>
                                    <option value="MES">MES</option>
									<option value="CCTV">CCTV</option>
								</select>
                            </div>
                        </div>
                      
					  <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Plant Location</label> <font color="red">*update kembali</font>
                            <div class="col-sm-2 col-xs-9">
                                <select name="no_perkara" value="<?=$data['no_perkara']?>" class="form-control">
									<option value="Plate Mill">Plate Mill</option>
                                    <option value="Energy Center">Energy Center</option>
									<option value="Blue Water">Blue Water</option>
									<option value="Warehouse">Warehouse</option>
									<option value="Physical Testing">Physical Testing</option>
									<option value="CMF">CMF</option>
									<option value="Lime Calcination">Lime Calcination</option>
									<option value="HQ">HQ</option>
									<option value="PCO">PCO</option>
									<option value="Integrated Slab Yard">Integrated Slab Yard</option>
									<option value="Construction Dist">Construction Dist</option>
									<option value="Blast Furnace">Blast Furnace</option>
									<option value="Sinter Plant">Sinter Plant</option>
									<option value="Raw Material">Raw Material</option>
									<option value="Coke Plant">Coke Plant</option>
									<option value="Steel Making Plant">Steel Making Plant</option>
									<option value="Countinuos Casting Plant">Countinuos Casting Plant</option>
                                    <option value="Small Office">Small Office</option>
																	
                                </select>
                            </div>
                        </div>
					  
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?=$data['penerima']?>"  class="form-control" id="inputEmail3" placeholder="Masukan Nama" required>
                            </div>
                        </div> 
					  					  
						<div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">IP</label>
                            <div class="col-sm-9">
                                <input type="textdomain" name="para_pihak" value="<?=$data['para_pihak']?>"class="form-control" id="inputEmail3" placeholder="IP">
                            </div>
                        </div>
						
                        <!--untuk tanggal-->
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" value="<?=$data['tgl_masuk']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>
						<!--end tanggal-->

                        
                        <!--Status-->
                        
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label> <font color="red">*update kembali</font>
                            <div class="col-sm-5">
								<select name="status" class="form-control">
									<option value="Shutdown Port">Shutdown Port</option>
									<option value="Block Firewall">Block Firewall</option>
									<option value="Block Proxy">Block Proxy</option>
									<option value="Shutdown Port + Block Firewall">Shutdown Port + Block Firewall</option>
									<option value="Shutdown Port + Block Proxy">Shutdown Port + Block Proxy</option>
									<option value="Block Firewall + Block Proxy">Block Firewall + Block Proxy</option>
									<option value="Block Firewall + Block Proxy + Shutdown Port">Block Firewall + Block Proxy + Shutdown Port</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Information</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Back To Dashboard
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $ruang_arsip=$_POST['ruang_arsip'];
    $noRak=$_POST['noRak'];
	$noLaci=$_POST['noLaci'];
    $noBoks=$_POST['noBoks'];
	$para_pihak=$_POST['para_pihak'];
    $no_perkara=$_POST['no_perkara'];
    $tglmasuk=$_POST['tgl_masuk'];
    $pengantar=$_POST['pemberi'];
	$penerima=$_POST['penerima'];
    $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE arsip SET ruang_arsip='$ruang_arsip',no_rak='$noRak',no_laci='$noLaci',no_boks='$noBoks',para_pihak='$para_pihak',
	no_perkara='$no_perkara',tgl_masuk='$tglmasuk',penerima='$penerima',pemberi='$pengantar',status='$status',keterangan='$ket' WHERE id ='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



