<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Master Eselon
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
              <h3 class="box-title">Form Master Eselon</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="kd_eselon" class="col-sm-2 control-label">Kode Eselon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kd_eselon" placeholder="Kode Eselon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_eselon" class="col-sm-2 control-label">Nama Eselon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_eselon" placeholder="Nama Eselon">
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
				$kd_eselon=@$_POST['kd_eselon'];
				$nama_eselon=@$_POST['nama_eselon'];
				
				if($save){
					if($kd_eselon =="" || $nama_eselon == "" ){
					?><script type="text/javascript">alert("input tidak boleh kosong");</script><?php
				}else{
					$sql=mysqli_query($con, "insert into `eselon` (`kd_eselon`, `nama_eselon`, kd_rek_tunjangan) values ('$kd_eselon', '$nama_eselon', '0')");
					if($sql){
						?><script type="text/javascript">alert("berhasil mendaftar");</script><?php
						}
					}
				
				}
			?>
          </div>
</section>