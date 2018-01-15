<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Master Kecamatan
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
              <h3 class="box-title">Form Master Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="kd_rek_skpd" class="col-sm-2 control-label">Kode Rekening Kecamatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kd_kecamatan" placeholder="Kode Rekening Kecamatan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_skpd" class="col-sm-2 control-label">Nama Kecamatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kecamatan" placeholder="Nama Kecamatan">
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
		
				$con =mysqli_connect("localhost","root","","ebudget");
				$save=@$_POST['save'];
				$kd_kecamatan=@$_POST['kd_kecamatan'];
				$nama_kecamatan=@$_POST['nama_kecamatan'];
				
				if($save){
					if($kd_kecamatan =="" || $nama_kecamatan == "" ){
					?><script type="text/javascript">alert("input tidak boleh kosong");</script><?php
				}else{
					$sql=mysqli_query($con, "insert into `kecamatan` (`kd_rek_kecamatan`, `nama_kecamatan`) values ('$kd_kecamatan', '$nama_kecamatan')");
					if($sql){
						?><script type="text/javascript">alert("berhasil mendaftar");</script><?php
						}
					}
				
				}
			?>
          </div>
</section>