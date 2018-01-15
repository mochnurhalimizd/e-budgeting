<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Master SKPD
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
              <h3 class="box-title">Form Master SKPD</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="kd_rek_skpd" class="col-sm-2 control-label">Kode Rekening SKPD</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kd_skpd" placeholder="Kode Rekening SKPD">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_skpd" class="col-sm-2 control-label">Nama SKPD</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_skpd" placeholder="Nama SKPD">
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
				$kd_skpd=@$_POST['kd_skpd'];
				$nama_skpd=@$_POST['nama_skpd'];
				
				if($save){
					if($kd_skpd =="" || $nama_skpd == "" ){
					?><script type="text/javascript">alert("input tidak boleh kosong");</script><?php
				}else{
					$sql=mysqli_query($con, "insert into `skpd` (`kd_rek_skpd`, `nama_skpd`) values ('$kd_skpd', '$nama_skpd')");
					if($sql){
						?><script type="text/javascript">alert("berhasil mendaftar");</script><?php
						}
					}
				
				}
				
				
			?>
          </div>
</section>