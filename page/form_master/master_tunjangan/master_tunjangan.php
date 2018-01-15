<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Master Tunjangan
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
              <h3 class="box-title">Form Master Tunjangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="kd_rekening_tunjangan" class="col-sm-2 control-label">Kode Rekening Tunjangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kd_rek_tunjangan" placeholder="Kode Rekening Tunjangan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_tunjangan" class="col-sm-2 control-label">Nama Tunjangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_tunjangan" placeholder="Nama Tunjangan">
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
				$kd_rek_tunjangan=@$_POST['kd_rek_tunjangan'];
				$nama_tunjangan=@$_POST['nama_tunjangan'];
				
				if($save){
					if($kd_rek_tunjangan =="" || $nama_tunjangan == "" ){
					?><script type="text/javascript">alert("input tidak boleh kosong");</script><?php
				}else{
					$sql=mysqli_query($con, "insert into `tunjangan` (`kd_rek_tunjangan`, `nama_tunjangan`) values ('$kd_rek_tunjangan', '$nama_tunjangan')");
					if($sql){
						?><script type="text/javascript">alert("berhasil mendaftar");</script><?php
						}
					}
				
				}
			?>
          </div>
</section>