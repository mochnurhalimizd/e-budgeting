<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Master Pegawai
    <small>Add Data </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-institution"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
<!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Master Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nip" class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nip" placeholder="NIP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                  </div>
                </div>
				      <div class="form-group">
                  <label for="tempat" class="col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ttl" class="col-sm-2 control-label">Tgl Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="ttl" placeholder="Tgl Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">                   
	                  <select name="jenis_kelamin" class="form-control">
	                    <option>Laki-laki</option>
	                    <option>Perempuan</option>
	                  </select>               
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status Perkawinan</label>
                  <div class="col-sm-10">                   
	                  <select name="status" class="form-control">
	                    <option>Lajang</option>
	                    <option>Kawin</option>
	                    <option>Duda</option>
	                    <option>Janda</option>
	                  </select>               
                  </div>
                </div>
				 <div class="form-group">
                  <label for="skpd" class="col-sm-2 control-label">SKPD</label>
                  <div class="col-sm-10">                   
	                  <select name="skpd" class="form-control">
	                    <option>0</option>
						<option>DISKOPUKM</option>
	                    <option>BPKD</option>
						<option>DISDUKCAPIL</option>
						<option>DISBUDPAR</option>
						<option>DPMPTSP</option>
						<option>DISPORA</option>
	                  </select>               
                  </div>
                </div>
				<div class="form-group">
                  <label for="golongan" class="col-sm-2 control-label">Golongan</label>
                  <div class="col-sm-10">                   
	                  <select name="golongan" class="form-control">
	                    <option>I</option>
	                    <option>II</option>
						<option>III</option>
	                    <option>IV</option>
	                  </select>               
                  </div>
                </div>
				<div class="form-group">
                  <label for="kecamatan" class="col-sm-2 control-label">Kode Rekening Kecamatan</label>
                  <div class="col-sm-10">                   
	                  <select name="kecamatan" class="form-control">
						<option>0</option>
	                    <option>parongpong</option>
						<option>cisarua</option>
						<option>padalarang</option>
						<option>lembang</option>
	                  </select>               
                  </div>
                </div>
				<div class="form-group">
                  <label for="eselon" class="col-sm-2 control-label">Eselon</label>
                  <div class="col-sm-10">                   
	                  <select name="eselon" class="form-control">
	                    <option>0</option>
						<option>I/A</option>
	                    <option>I/B</option>
						<option>II/A</option>
	                    <option>II/B</option>
						<option>III/A</option>
	                    <option>III/B</option>
						<option>IV/A</option>
	                    <option>IV/B</option>
						<option>V/A</option>
	                  </select>               
                  </div>
                </div>
				<div class="form-group">
                  <label for="anak" class="col-sm-2 control-label">Jumlah Anak</label>
                  <div class="col-sm-10">                   
	                  <select name="anak" class="form-control">
						<option>0</option>
	                    <option>1</option>
	                    <option>2</option>
	                  </select>               
                  </div>
                </div>
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                	
					<input type="submit" name="save" value="save" class="btn btn-info pull-right"/>
            	
              </div>
              <!-- /.box-footer -->
            </form>
			<?php
		
				$save=@$_POST['save'];
				$nip=@$_POST['nip'];
				$nama=@$_POST['nama'];
				$tempat=@$_POST['tempat'];
				$ttl=@$_POST['ttl'];
				$jenis_kelamin=@$_POST['jenis_kelamin'];
				$alamat=@$_POST['alamat'];
				$status=@$_POST['status'];
				$skpd=@$_POST['skpd'];
				$golongan=@$_POST['golongan'];
				$kecamatan=@$_POST['kecamatan'];
				$eselon=@$_POST['eselon'];
				$anak=@$_POST['anak'];
			
				
				if($save){
					if($nip =="" || $nama == "" || $tempat=="" || $ttl== "" || $jenis_kelamin== "" || $alamat== "" || $status== ""  || $skpd=="" || $golongan== "" || $kecamatan== "" || $eselon== "" || $anak== "" ){
					?><script type="text/javascript">alert("input tidak boleh kosong");</script><?php
				}else{
					$sql=mysqli_query($con, "insert into `pegawai` (`nip`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `status_perkawinan`, `kd_rek_skpd`, `kd_golongan`, `kd_rek_kecamatan`, `eselon`, `jml_anak`) values ('$nip', '$nama', '$tempat', '$ttl', '$jenis_kelamin', '$alamat', '$status', '$skpd', '$golongan', '$kecamatan', '$eselon', '$anak')");
					if($sql){
						?><script type="text/javascript">alert("berhasil mendaftar");</script><?php
						}
					}
				
				}
				
				
			?>
          </div>
</section>