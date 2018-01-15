<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Table Master Pegawai
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-institution"></i> Level</a></li>
    <li class="active">Table Master Pegawai</li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">

  <!--------------------------
    | Your Page Content Here |
    -------------------------->

	      <div class="row">
	        <div class="col-xs-12">
	          <div class="box box-warning">
	            <div class="box-header">
	            	<div class="row">
	            		<div class="col-sm-6">
	            			<h3 class="box-title">Daftar PNS </h3>
	            		</div>

	            		<div class="col-sm-6">
	            		<div class=" pull-right">
	            			<a class="btn btn-app" href="?page=form_master_tunjangan">
								<i class="fa fa-plus"></i> Add Data
						    </a>
						    <a class="btn btn-app" data-toggle='modal' data-target='#modal-delete-multiple' style="cursor: pointer;">
								<i class="fa fa-trash"></i> Multiple Delete
						    </a>
						</div>
	            		</div>
	            	</div>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="bpkd-table" class="table table-bordered table-hover">
	                <thead>
	                <tr>
	                   <th width="80px">Kode Golongan</th>
	                  <th>Nama Golongan</th>
	                  <th width="80px">Opsi</th>
	                </tr>
	                </thead>
	                <tbody>
	            	
	            	 	
	            <?php  
      				$result = mysqli_query($con,"SELECT * FROM tunjangan");
      				while($row = mysqli_fetch_array($result))
      				{
      				?>
      				<tr class='default'>
      					<td><?php echo $row[0]; ?></td>
      					<td><?php echo $row[1]; ?></td>
      					<td> 
      	                  	<button type='button' data-toggle='modal' data-target='#modal-edit' class='btn btn-warning btn-flat' style='padding:0;padding:2px 4px;'><i class='fa fa-edit'></i></button>
      	                  	<button type='button' data-toggle='modal' data-target='#modal-delete' class='btn btn-danger  btn-flat' style='padding:0;padding:2px 4px;'><i class='fa fa-trash'></i></button>
      	                </td>
      			</tr>	
      			<?php  
      				}
      			?> 
	              </table>
	            </div>
	            <!-- /.box-body -->
	            <!-- box footer -->
	            <!-- <div class="box-footer">
					<a class="btn btn-app">
						<i class="fa fa-plus"></i> Add Data
				    </a>
				    <a class="btn btn-app" data-toggle='modal' data-target='#modal-delete-multiple' style="cursor: pointer;">
						<i class="fa fa-trash"></i> Multiple Delete
				    </a>
	            </div> -->
	            <!-- box footer -->
	          </div>
	          <!-- /.box -->

	        </div>
	    </div>


<!-- /.modal -->

        <div class="modal fade" id="modal-edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data <b>Nama</b></h4>
              </div>
              <div class="modal-body">
                <p><form class="form-horizontal" method="post">
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
                 
                </form></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-warning">Yes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

<!-- /.modal -->

        <div class="modal fade" id="modal-delete">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah anda yakin ingin <b>menghapus</b> data ini ?</h4>
              </div>
              <!-- <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div> -->
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Yes, Delete it</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

 <!-- /.modal -->

        <div class="modal fade" id="modal-delete-multiple">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah anda yakin ingin <b>menghapus beberapa</b> data ini ?</h4>
              </div>
              <!-- <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div> -->
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Yes, Delete All</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</section>