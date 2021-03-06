<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Laporan Anggaran DISKOPUKM
    <small>Dinas Koperasi Usaha Kecil dan Menengah  </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-institution"></i> Level</a></li>
    <li class="active"><a href="?page=skpd">SKPD</a></li>
    <li class="active">DISKOPUKM</li>
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
	            			<h3 class="box-title"></h3>
	            		</div>

	            		<div class="col-sm-6">
	            		<div class=" pull-right">
	            			<button type="submit" class="btn btn-app" onclick="tableToExcel('bpkd-table2', 'Laporan Anggaran')">
								<i class="fa fa-download"></i>Download Excel
						    </button>
						    
						</div>
	            		</div>
	            	</div>	            	
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	            <?php 
				//-----Start Gapok --->
				$con = mysqli_connect("localhost","root","","ebudget");
				$result = mysqli_query($con, "SELECT gapok  FROM dtl_gapok_skpd where kd_rek_skpd like '%DISKOPUKM' AND kd_golongan LIKE 'IV'");
				while($row = mysqli_fetch_array($result))
				{	
					$angka =  $row[0];	  
				}
				$result2 = mysqli_query($con, "SELECT gapok  FROM dtl_gapok_skpd where kd_rek_skpd like '%DISKOPUKM' AND kd_golongan LIKE 'III'");
				while($row2 = mysqli_fetch_array($result2))
				{	
					$angka2 =  $row2[0]; 
				}
				
								
				
				$hasil = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_skpd like '%DISKOPUKM' AND kd_golongan LIKE 'IV'");
				$row = mysqli_num_rows($hasil);
				
				$hasil2 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_skpd like '%DISKOPUKM' AND kd_golongan LIKE 'III'");
				$row2 = mysqli_num_rows($hasil2);
				
				
				
				$jumlah=$row*14;
				$jumlah2=$row2*14;
				
				$total = $jumlah * $angka;
				$total2 = $jumlah2 * $angka2;
				
				$gaji = $total + $total2;
				//-------Finis Gapok ----->
				
				//-----Start Tunjangan Keluarga --->
				$jumlah4=0;
				$result4 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'IV'");
				while($row4 = mysqli_fetch_array($result4))
				{	
					$jumlah4 = $jumlah4 + $row4[0];
				}
				$result5 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_golongan LIKE 'IV' AND kd_rek_tunjangan LIKE '5.1.1.01.02'");
				while($row5 = mysqli_fetch_array($result5))
				{	
					$angka4 =  $row5[0];	  
				}
				$hasil5 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'IV'");
				$angka5 = mysqli_num_rows($hasil5);
				$total4=$angka5+$jumlah4;
				$total5=$total4*13;
				$gaji4=$total5*$angka4;
				
				$jumlah5=0;
				$result6 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'III'");
				while($row6 = mysqli_fetch_array($result6))
				{	
					$jumlah5 = $jumlah5 + $row6[0];
				}
				$result7 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan LIKE '5.1.1.01.02'");
				while($row7 = mysqli_fetch_array($result7))
				{	
					$angka6 =  $row7[0];	  
				}
				$hasil6 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'III'");
				$angka7 = mysqli_num_rows($hasil6);
				$total6=$angka7+$jumlah5;
				$total7=$total6*13;
				$gaji5=$total7*$angka6;
				
				
				$gaji7=$gaji4+$gaji5;
				//-------Finis Tunjangan Keluarga ----->
				
				//-----Start Tunjangan Jabatan --->
				$result10 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_eselon LIKE 'II/b'");
				while($row10 = mysqli_fetch_array($result10))
				{	
					$angka10 =  $row10[0];	  
				}
				$result12 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_eselon LIKE 'III/a'");
				while($row12 = mysqli_fetch_array($result12))
				{	
					$angka12 =  $row12[0]; 
				}
				$result13 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_eselon LIKE 'III/b'");
				while($row13 = mysqli_fetch_array($result13))
				{	
					$angka13 =  $row13[0];	  
				}
				$result14 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_eselon LIKE 'IV/a'");
				while($row14 = mysqli_fetch_array($result14))
				{	
					$angka14 =  $row14[0];	  
				}
								
				
				$hasil11 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_skpd LIKE 'DISKOPUKM' AND kd_golongan LIKE 'IV' AND eselon LIKE 'II/b'");
				$row11 = mysqli_num_rows($hasil11);
				
				$hasil12 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_skpd LIKE 'DISKOPUKM' AND kd_golongan LIKE 'IV' AND eselon LIKE 'III/a'");
				$row12 = mysqli_num_rows($hasil12);
				
				$hasil13 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_skpd LIKE 'DISKOPUKM' AND kd_golongan LIKE 'III' AND eselon LIKE 'III/b'");
				$row13 = mysqli_num_rows($hasil13);
				
				$hasil14 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_skpd LIKE 'DISKOPUKM' AND kd_golongan LIKE 'III' AND eselon LIKE 'IV/a'");
				$row14 = mysqli_num_rows($hasil14);
				
				$jumlah11=$row11*13;
				$jumlah12=$row12*13;
				$jumlah13=$row13*13;
				$jumlah14=$row14*13;
				$total10 = $jumlah11 * $angka10;
				$total12 = $jumlah12 * $angka12;
				$total13 = $jumlah13 * $angka13;
				$total14 = $jumlah14 * $angka14;
				$gaji10 = $total10 + $total12 + $total13 + $total14;
				//-------Finis Jabatan ----->
				
				
				//-----Start Tunjangan beras --->
				$jumlah20=0;
				$result20 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'IV'");
				while($row20 = mysqli_fetch_array($result20))
				{	
					$jumlah20 = $jumlah20 + $row20[0]+1;
				}
				$result21 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_golongan LIKE 'IV' AND kd_rek_tunjangan LIKE '5.1.1.01.06'");
				while($row21 = mysqli_fetch_array($result21))
				{	
					$angka21 =  $row21[0];	  
				}
				$hasil22 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'IV'");
				$angka22 = mysqli_num_rows($hasil22);
				
				$total22=$angka22+$jumlah20;
				$total23=$total22*12;
				$gaji24=$total23*$angka21;
				
				$jumlah25=0;
				$result25 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'III'");
				while($row25 = mysqli_fetch_array($result25))
				{	
					$jumlah25 = $jumlah25 + $row25[0];
				}
				$result26 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan LIKE '5.1.1.01.06'");
				while($row26 = mysqli_fetch_array($result26))
				{	
					$angka26 =  $row26[0];	  
				}
				$hasil27 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'III'");
				$angka27 = mysqli_num_rows($hasil27);
				
				$total25=$angka27+$jumlah25+15;
				$total26=$total25*12;
				$gaji25=$total26*$angka26;
				
				
				
				$gaji27=$gaji24+$gaji25;
				//-------Finis Tunjangan Beras ----->
				
				
				//-----Start PPh --->
				$result40 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_golongan LIKE 'IV' AND kd_rek_tunjangan like '5.1.1.01.07'");
				while($row40 = mysqli_fetch_array($result40))
				{	
					$angka40 =  $row40[0];	  
				}
				$result41 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan like '5.1.1.01.07'");
				while($row41 = mysqli_fetch_array($result41))
				{	
					$angka41 =  $row41[0]; 
				}
				
								
				
				$hasil43 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_skpd like '%DISKOPUKM' AND kd_golongan LIKE 'IV'");
				$row43 = mysqli_num_rows($hasil43);
				
				$hasil44 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_skpd like '%DISKOPUKM' AND kd_golongan LIKE 'III'");
				$row44 = mysqli_num_rows($hasil44);
				
				
				
				$jumlah40=$row43*14;
				$jumlah41=$row44*14;
				
				$total40 = $jumlah40 * $angka40;
				$total41 = $jumlah41 * $angka41;
				
				$gaji40 = $total40 + $total41;
				//-------Finis PPh----->
				
				//-----Start Pembulatan Gaji --->
				$result50 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_golongan LIKE 'IV' AND kd_rek_tunjangan like '5.1.1.01.08'");
				while($row50 = mysqli_fetch_array($result50))
				{	
					$angka50 =  $row50[0];	  
				}
				$result51 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_skpd LIKE '%DISKOPUKM' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan like '5.1.1.01.08'");
				while($row51 = mysqli_fetch_array($result51))
				{	
					$angka51 =  $row51[0]; 
				}
				
				
				$hasil53 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_skpd like '%DISKOPUKM' AND kd_golongan LIKE 'IV'");
				$row53 = mysqli_num_rows($hasil53);
				
				$hasil54 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_skpd like '%DISKOPUKM' AND kd_golongan LIKE 'III'");
				$row54 = mysqli_num_rows($hasil54);
				
				
				
				$jumlah50=$row53*14;
				$jumlah51=$row54*14;
				
				$total50 = $jumlah50 * $angka50;
				$total51 = $jumlah51 * $angka51;
				
				$gaji50 = $total50 + $total51;
				//-------Finis Pembulatan Gaji----->
				
				
?>
				<table id="bpkd-table2" class="table table-bordered table-hover"  summary="Code page support in different versions of MS Windows." >			
						<tr>
							<th style="border:1pt  solid black;" rowspan=2>Uraian</th>
							<th style="border:1pt  solid black;" colspan=3 align=center>Rincian Perhitungan</th>
							<th style="border:1pt  solid black;" rowspan=2>Jumlah</th>
						</tr>
						<tr>
							<th style="border:1pt  solid black;">Volume</th>
							<th style="border:1pt  solid black;">Satuan</th>
							<th style="border:1pt  solid black;">Harga Satuan</th>
							
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Gaji Pokok</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Gaji Pokok PNS/Uang Reperensi</b><br><br>
								<?php echo "Gol IV ($row x 14)";?><br><br>
								<?php echo "Gol III ($row2 x 14) ";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $jumlah;?><br><br>
								<?php  echo $jumlah2;?></td>
								
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka;?><br><br>
								<?php echo $angka2;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$gaji2 = number_format($gaji);
									echo " Rp. ".$gaji2;?></b><br><br>
								<?php 
									$satuan = number_format($total);
								    echo " Rp. ".$satuan;?><br><br>
								<?php 
									$satuan2 = number_format($total2);
									echo " Rp. ".$satuan2;?></td>
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan Keluarga</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan Keluarga</b><br><br>
								<?php echo "Gol IV ($total4 x 13)";?><br><br>
								<?php echo "Gol III ($total6 x 13) ";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $total5;?><br><br>
								<?php  echo $total7;?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka4;?><br><br>
								<?php echo $angka6;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$satuan7 = number_format($gaji7);
									echo " Rp. ".$satuan7;?></b><br><br>
								<?php 
									$satuan4 = number_format($gaji4);
									echo " Rp. ".$satuan4;?><br><br>
								<?php 
									$satuan5 = number_format($gaji5);
									echo " Rp. ".$satuan5;?></td>
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan Jabatan</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan Jabatan</b><br><br>
								<?php echo "Eselon II/b ($row11 x 13)";?><br><br>
								<?php echo "Eselon III/a ($row12 x 13) ";?><br><br>
								<?php echo "Eselon III/b   ($row13 x 13)";?><br><br>
								<?php echo "Eselon IV/a   ($row14 x 13)";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $jumlah11;?><br><br>
								<?php  echo $jumlah12;?><br><br>
								<?php  echo $jumlah13;?><br><br>
								<?php  echo $jumlah14;?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB<br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka10;?><br><br>
								<?php echo $angka12;?><br><br>
								<?php echo $angka13;?><br><br>
								<?php echo $angka14;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$satuan15 = number_format($gaji10);
									echo " Rp. ".$satuan15;?></b><br><br>
								<?php 
									$satuan10 = number_format($total10);
									echo " Rp. ".$satuan10;?><br><br>
								<?php 
									$satuan12 = number_format($total12);
									echo " Rp. ".$satuan12;?><br><br>
								<?php 
									$satuan13 = number_format($total13);
									echo " Rp. ".$satuan13;?><br><br>
								<?php 
									$satuan14 = number_format($total14);
									echo " Rp. ".$satuan14;?></td>
						</tr>
						
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan Beras</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan Beras</b><br><br>
								<?php echo "Gol IV ($total22 x 12)";?><br><br>
								<?php echo "Gol III ($total25 x 12) ";?></td>
								
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $total23;?><br><br>
								<?php  echo $total26;?></td>
								
							
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka21;?><br><br>
								<?php echo $angka26;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$satuan23 = number_format($gaji27);
									echo " Rp. ".$satuan23;?></b><br><br>
								<?php 
									$satuan20 = number_format($gaji24);
									echo " Rp. ".$satuan20;?><br><br>
								<?php 
									$satuan21 = number_format($gaji25);
									echo " Rp. ".$satuan21;?></td>
						</tr>
							
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan PPh/Tunjangan Khusus</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan PPh/Tunjangan Khusus</b><br><br>
								<?php echo "Gol IV ($row43 x 14)";?><br><br>
								<?php echo "Gol III ($row44 x 14) ";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $jumlah40;?><br><br>
								<?php  echo $jumlah41;?></td>
								
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka40;?><br><br>
								<?php echo $angka41;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$gaji41 = number_format($gaji40);
									echo " Rp. ".$gaji41;?></b><br><br>
								<?php 
									$satuan40 = number_format($total40);
								    echo " Rp. ".$satuan40;?><br><br>
								<?php 
									$satuan41 = number_format($total41);
									echo " Rp. ".$satuan41;?></td>
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Pembulatan Gaji</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Pembulatan Gaji</b><br><br>
								<?php echo "Gol IV ($row53 x 14)";?><br><br>
								<?php echo "Gol III ($row54 x 14) ";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $jumlah50;?><br><br>
								<?php  echo $jumlah51;?></td>
								
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka50;?><br><br>
								<?php echo $angka51;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$gaji51 = number_format($gaji50);
									echo " Rp. ".$gaji51;?></b><br><br>
								<?php 
									$satuan50 = number_format($total50);
								    echo " Rp. ".$satuan50;?><br><br>
								<?php 
									$satuan51 = number_format($total51);
									echo " Rp. ".$satuan51;?></td>
						</tr>
						
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
                <h4 class="modal-title">Apakah anda yakin ingin <b>mengedit</b> data ini ?</h4>
              </div>
             <!--  <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div> -->
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