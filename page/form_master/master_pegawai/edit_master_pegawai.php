<!-- Content Header (Page header) -->
<?php
  $nip=$_GET['nip'];
  $result = mysqli_query($con,"SELECT * FROM pegawai WHERE nip='$nip'");
  $data = mysqli_fetch_array($result);

  $jenis_kelamin = array('Laki-laki','Perempuan');
  $status = array('Lajang','Kawin', 'Janda', 'Duda');
  $skpd = array('0','BPKD','DISBUDPAR','DISDUKCAPIL','DISKOPUKM','DISPORA','DPMPTSP');
  $golongan = array('-','I', 'II', 'III', 'IV');
  $kecamatan = array('0','cisarua','lembang','padalarang','parongpong');
  $eselon = array('-','I/A','I/B','II/A','II/B','III/A','III/B','IV/A','IV/B','V/A');
  $jml_anak = array(0,1,2);
  
?>

<section class="content-header">
  <h1>
    Edit Data <b><?php echo $data['nama']; ?></b>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-institution"></i> Level</a></li>
    <li class="active"><a href="?page=skpd">SKPD</a></li>
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
                    <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?php echo $data['nip'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $data['nama'];?>">
                  </div>
                </div>
				        <div class="form-group">
                  <label for="tempat" class="col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ttl" class="col-sm-2 control-label">Tgl Lahir</label>
                    <div class="input-group date col-sm-10" style="padding-left: 15px;padding-right: 15px;">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" id="datepicker" value="<?php echo $data['tgl_lahir'];?>">
                    </div>
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">                   
	                  <select name="jenis_kelamin" class="form-control">
                      <?php 
                        foreach ($jenis_kelamin as $jk) {
                                echo "<option value='$jk' ";
                                echo $data['jenis_kelamin']==$jk?'selected="selected"':'';
                                echo ">$jk</option>";
                        }
                      ?>
                    </select>             
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status Perkawinan</label>
                  <div class="col-sm-10">                   
	                  <select name="status" class="form-control">
                      <?php 
                        foreach ($status as $s) {
                                echo "<option value='$s'";
                                echo $data['status_perkawinan']==$s?'selected="selected"':'';
                                echo ">$s</option>";
                        }
                      ?>
                    </select>               
                  </div>
                </div>
				        <div class="form-group">
                  <label for="skpd" class="col-sm-2 control-label">Kode Rekening SKPD</label>
                  <div class="col-sm-10">                   
	                  <select name="skpd" class="form-control">
                      <?php 
                        foreach ($skpd as $skpd) {
                                echo "<option value='$skpd'";
                                echo $data['kd_rek_skpd']==$skpd?'selected="selected"':'';
                                echo ">$skpd</option>";
                        }
                      ?>
                    </select>               
                  </div>
                </div>
				        <div class="form-group">
                  <label for="golongan" class="col-sm-2 control-label">Golongan</label>
                  <div class="col-sm-10">                   
	                  <select name="golongan" class="form-control">
                       <?php 
                        foreach ($golongan as $g) {
                                echo "<option value='$g'";
                                echo $data['kd_golongan']==$g?'selected="selected"':'';
                                echo ">$g</option>";
                        }
                      ?>
                    </select>                  
                  </div>
                </div>
				        <div class="form-group">
                  <label for="kecamatan" class="col-sm-2 control-label">Kode Rekening Kecamatan</label>
                  <div class="col-sm-10">                   
	                  <select name="kecamatan" class="form-control" value="<?php echo $data['kd_rek_kecamatan'];?>">
                      <?php 
                        foreach ($kecamatan as $k) {
                                echo "<option value='$k'";
                                echo $data['kd_rek_kecamatan']==$k?'selected="selected"':'';
                                echo ">$k</option>";
                        }
                      ?>
                    </select>               
                  </div>
                </div>
				        <div class="form-group">
                  <label for="eselon" class="col-sm-2 control-label">Eselon</label>
                  <div class="col-sm-10">                   
	                  <select name="eselon" class="form-control">
                      <?php 
                        foreach ($eselon as $eselon) {
                                echo "<option value='$eselon'";
                                echo $data['eselon']==$eselon?'selected="selected"':'';
                                echo ">$eselon</option>";
                        }
                      ?>
                    </select>               
                  </div>
                </div>
               <!--  <div class="form-group">
                  <label for="ket_istri_suami" class="col-sm-2 control-label">Ket Isti/Suami</label>
                  <div class="col-sm-10">                   
                    <select name="ket_istri_suami" class="form-control" value="<?php echo $data['jml_anak'];?>">
                        <?php 
                        foreach ($ket_istri_suami as $$ket) {
                                echo "<option value='$$ket'";
                                echo $data['ket_istri_suami']==$$ket?'selected="selected"':'';
                                echo ">$$ket</option>";
                        }
                      ?>
                    </select>              
                  </div>
                </div> -->
				        <div class="form-group">
                  <label for="anak" class="col-sm-2 control-label">Jumlah Anak</label>
                  <div class="col-sm-10">                   
	                  <select name="jml_anak" class="form-control" value="<?php echo $data['jml_anak'];?>">
                        <?php 
                        foreach ($jml_anak as $jml_anak) {
                                echo "<option value='$jml_anak'";
                                echo $data['jml_anak']==$jml_anak?'selected="selected"':'';
                                echo ">$jml_anak</option>";
                        }
                      ?>
                    </select>              
                  </div>
                </div>
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="?page=table_master_pegawai">
                  <button type="button" class="btn btn-default">Cancel</button>
                </a>
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
        // $ket_istri_suami=@$_POST['ket_istri_suami'];
        $jml_anak=@$_POST['jml_anak'];
      
        if($save=="save")
        {
          // var_dump($con);die;
          $query = "UPDATE pegawai SET nama='$nama', tempat_lahir='$tempat', 
            tgl_lahir='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat', status_perkawinan='$status',
            kd_rek_skpd='$skpd', kd_golongan='$golongan', kd_rek_kecamatan='$kecamatan', eselon='$eselon',
            jml_anak=$jml_anak WHERE nip=$nip";
          // var_dump($query);
          $result=mysqli_query($con,$query);
           // var_dump($result);die;
            if($result){ ?>
               <script type="text/javascript">
                  window.location.href = 'home.php?page=table_master_pegawai';
               </script>
           <?php }else{
            ?>
              <script type="text/javascript">alert("Gagal update");</script>
            <?php
            }        
       }    
      ?>
          </div>
</section>