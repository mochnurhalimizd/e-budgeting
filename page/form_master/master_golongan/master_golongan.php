<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Master Golongan
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
              <h3 class="box-title">Form Master Golongan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="kd_golongan" class="col-sm-2 control-label">Kode Golongan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kd_golongan" placeholder="Kode Golongan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_golongan" class="col-sm-2 control-label">Nama Golongan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_golongan" placeholder="Nama Golongan">
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
				$kd_golongan=@$_POST['kd_golongan'];
				$nama_golongan=@$_POST['nama_golongan'];
				
				if($save){
					if($kd_golongan =="" || $nama_golongan == "" ){
					?><script type="text/javascript">alert("input tidak boleh kosong");</script><?php
				}else{
					$sql=mysqli_query($con, "insert into `golongan` (`kd_golongan`, `nama_golongan`) values ('$kd_golongan', '$nama_golongan')");
					if($sql){
						?><script type="text/javascript">alert("berhasil mendaftar");</script><?php
						}
					}
				
				}
			?>
          </div>
</section>