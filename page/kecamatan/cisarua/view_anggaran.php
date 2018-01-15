<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Laporan Anggaran Kec.Cisarua
    <!-- <small>Dinas Koperasi Usaha Kecil dan Menengah  </small> -->
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-institution"></i> Level</a></li>
    <li class="active"><a href="?page=kecamatan">Kecamatan</a></li>
    <li class="active">Cisarua</li>
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
				$result = mysqli_query($con, "SELECT gapok  FROM dtl_gapok_kecamatan where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'IV'");
				while($row = mysqli_fetch_array($result))
				{	
					$angka =  $row[0];	  
				}
				$result2 = mysqli_query($con, "SELECT gapok  FROM dtl_gapok_kecamatan where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'III'");
				while($row2 = mysqli_fetch_array($result2))
				{	
					$angka2 =  $row2[0]; 
				}
				$result3 = mysqli_query($con, "SELECT gapok  FROM dtl_gapok_kecamatan where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'II'");
				while($row3 = mysqli_fetch_array($result3))
				{	
					$angka3 =  $row3[0];	  
				}
				$result60 = mysqli_query($con, "SELECT gapok  FROM dtl_gapok_kecamatan where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'I'");
				while($row60 = mysqli_fetch_array($result60))
				{	
					$angka60 =  $row60[0];	  
				}
								
				
				$hasil = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'IV'");
				$row = mysqli_num_rows($hasil);
				
				$hasil2 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'III'");
				$row2 = mysqli_num_rows($hasil2);
				
				$hasil3 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'II'");
				$row3 = mysqli_num_rows($hasil3);
				
				$hasil61 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'I'");
				$row61 = mysqli_num_rows($hasil61);
				
				$jumlah=$row*14;
				$jumlah2=$row2*14;
				$jumlah3=$row3*14;
				$jumlah61=$row61*14;
				$total = $jumlah * $angka;
				$total2 = $jumlah2 * $angka2;
				$total3 = $jumlah3 * $angka3;
				$total61 = $jumlah61 * $angka60;
				$gaji = $total + $total2 + $total3 + $total61;
				//-------Finis Gapok ----->
				
				//-----Start Tunjangan Keluarga --->
				$jumlah4=0;
				$result4 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'IV'");
				while($row4 = mysqli_fetch_array($result4))
				{	
					$jumlah4 = $jumlah4 + $row4[0];
				}
				$result5 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'IV' AND kd_rek_tunjangan LIKE '5.1.1.01.02'");
				while($row5 = mysqli_fetch_array($result5))
				{	
					$angka4 =  $row5[0];	  
				}
				$hasil5 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'IV'");
				$angka5 = mysqli_num_rows($hasil5);
				$total4=$angka5+$jumlah4;
				$total5=$total4*13;
				$gaji4=$total5*$angka4;
				
				$jumlah5=0;
				$result6 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'III'");
				while($row6 = mysqli_fetch_array($result6))
				{	
					$jumlah5 = $jumlah5 + $row6[0];
				}
				$result7 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan LIKE '5.1.1.01.02'");
				while($row7 = mysqli_fetch_array($result7))
				{	
					$angka6 =  $row7[0];	  
				}
				$hasil6 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'III'");
				$angka7 = mysqli_num_rows($hasil6);
				$total6=$angka7+$jumlah5;
				$total7=$total6*13;
				$gaji5=$total7*$angka6;
				
				$jumlah6=0;
				$result8 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'II'");
				while($row8 = mysqli_fetch_array($result8))
				{	
					$jumlah6 = $jumlah6 + $row8[0];
				}
				$result9 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'II' AND kd_rek_tunjangan LIKE '5.1.1.01.02'");
				while($row9 = mysqli_fetch_array($result9))
				{	
					$angka8 =  $row9[0];	  
				}
				$hasil7 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'II'");
				$angka9 = mysqli_num_rows($hasil7);
				$total8=$angka9+$jumlah6;
				$total9=$total8*13;
				$gaji6=$total9*$angka8;
				
				
				$jumlah70=0;
				$result70 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'I'");
				while($row70 = mysqli_fetch_array($result70))
				{	
					$jumlah70 = $jumlah70 + $row70[0];
				}
				$result71 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'I' AND kd_rek_tunjangan LIKE '5.1.1.01.02'");
				while($row71 = mysqli_fetch_array($result71))
				{	
					$angka71 =  $row71[0];	  
				}
				$hasil72 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'I'");
				$angka72 = mysqli_num_rows($hasil72);
				$total73=$angka72+$jumlah70;
				$total74=$total73*13;
				$gaji75=$total74*$angka71;
				$gaji7=$gaji4+$gaji5+$gaji6+$gaji75;
				//-------Finis Tunjangan Keluarga ----->
				
				//-----Start Tunjangan Jabatan --->
				$result10 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_eselon LIKE 'III/a'");
				while($row10 = mysqli_fetch_array($result10))
				{	
					$angka10 =  $row10[0];	  
				}
				$result12 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_eselon LIKE 'III/b'");
				while($row12 = mysqli_fetch_array($result12))
				{	
					$angka12 =  $row12[0]; 
				}
				$result13 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_eselon LIKE 'IV/a'");
				while($row13 = mysqli_fetch_array($result13))
				{	
					$angka13 =  $row13[0];	  
				}
				$result14 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_eselon LIKE 'IV/b'");
				while($row14 = mysqli_fetch_array($result14))
				{	
					$angka14 =  $row14[0];	  
				}
								
				
				$hasil11 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_kecamatan LIKE 'cisarua' AND kd_golongan LIKE 'IV' AND eselon LIKE 'III/a'");
				$row11 = mysqli_num_rows($hasil11);
				
				$hasil12 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_kecamatan LIKE 'cisarua' AND kd_golongan LIKE 'IV' AND eselon LIKE 'III/b'");
				$row12 = mysqli_num_rows($hasil12);
				
				$hasil13 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_kecamatan LIKE 'cisarua' AND kd_golongan LIKE 'III' AND eselon LIKE 'IV/a'");
				$row13 = mysqli_num_rows($hasil13);
				
				$hasil14 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_kecamatan LIKE 'cisarua' AND kd_golongan LIKE 'II' AND eselon LIKE 'IV/b'");
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
				
				//-----Start Tunjangan Umum --->
				
				$result16 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan like '5.1.1.01.05'");
				while($row16 = mysqli_fetch_array($result16))
				{	
					$angka16 =  $row16[0]; 
				}
				$result17 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'II' AND kd_rek_tunjangan like '5.1.1.01.05'");
				while($row17 = mysqli_fetch_array($result17))
				{	
					$angka17 =  $row17[0];	  
				}
				$result80 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'I' AND kd_rek_tunjangan like '5.1.1.01.05'");
				while($row80 = mysqli_fetch_array($result80))
				{	
					$angka80 =  $row80[0];	  
				}
				
				
				
				$hasil16 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_kecamatan LIKE 'cisarua' AND kd_golongan LIKE 'III' AND eselon LIKE 'V'");
				$row16 = mysqli_num_rows($hasil16);
				
				$hasil17 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_kecamatan LIKE 'cisarua' AND kd_golongan LIKE 'II'");
				$row17 = mysqli_num_rows($hasil17);
				
				$hasil81 = mysqli_query($con, "SELECT * FROM pegawai WHERE kd_rek_kecamatan LIKE 'cisarua' AND kd_golongan LIKE 'I'");
				$row81 = mysqli_num_rows($hasil81);
				
			
				
				$jumlah16=$row16*13;
				$jumlah17=$row17*13;
				$jumlah81=$row81*13;
				
				
				$total16 = $jumlah16 * $angka16;
				$total17 = $jumlah17 * $angka17;
				$total81 = $jumlah81 * $angka80;
				
				$gaji11 = $total16 + $total17 + $total81;
				//-------Finis Tunjangan Umum----->
				
				//-----Start Tunjangan beras --->
				$jumlah20=0;
				$result20 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'IV'");
				while($row20 = mysqli_fetch_array($result20))
				{	
					$jumlah20 = $jumlah20 + $row20[0] +1;
				}
				$result21 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'IV' AND kd_rek_tunjangan LIKE '5.1.1.01.06'");
				while($row21 = mysqli_fetch_array($result21))
				{	
					$angka21 =  $row21[0];	  
				}
				$hasil22 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'IV'");
				$angka22 = mysqli_num_rows($hasil22);
				
				$total22=$angka22+$jumlah20 ;
				$total23=$total22*12;
				$gaji24=$total23*$angka21;
				
				$jumlah25=0;
				$result25 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'III'");
				while($row25 = mysqli_fetch_array($result25))
				{	
					$jumlah25 = $jumlah25 + $row25[0];
				}
				$result26 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan LIKE '5.1.1.01.06'");
				while($row26 = mysqli_fetch_array($result26))
				{	
					$angka26 =  $row26[0];	  
				}
				$hasil27 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'III'");
				$angka27 = mysqli_num_rows($hasil27);
				
				$total25=$angka27+$jumlah25+13;
				$total26=$total25*12;
				$gaji25=$total26*$angka26;
				
				$jumlah30=0;
				$result30 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'II'");
				while($row30 = mysqli_fetch_array($result30))
				{	
					$jumlah30 = $jumlah30 + $row30[0];
				}
				$result31 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'II' AND kd_rek_tunjangan LIKE '5.1.1.01.06'");
				while($row31 = mysqli_fetch_array($result31))
				{	
					$angka31 =  $row31[0];	  
				}
				$hasil32 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'II'");
				$angka32 = mysqli_num_rows($hasil32);
				
				$total30=$angka32+$jumlah30+5;
				$total31=$total30*12;
				$gaji26=$total31*$angka31;
				
				$jumlah90=0;
				$result90 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'I'");
				while($row90 = mysqli_fetch_array($result90))
				{	
					$jumlah90 = $jumlah90 + $row90[0];
				}
				$result91 = mysqli_query($con, "SELECT harga_satuan FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'I' AND kd_rek_tunjangan LIKE '5.1.1.01.06'");
				while($row91 = mysqli_fetch_array($result91))
				{	
					$angka91 =  $row91[0];	  
				}
				$hasil92 = mysqli_query($con, "SELECT jml_anak FROM pegawai WHERE kd_rek_kecamatan LIKE '%cisarua' AND status_perkawinan LIKE 'kawin' AND kd_golongan LIKE 'I'");
				$angka92 = mysqli_num_rows($hasil92);
				
				$total90=$angka92+$jumlah90;
				$total91=$total90*12;
				$gaji92=$total91*$angka91;
				
				$gaji27=$gaji24+$gaji25+$gaji26+$gaji92;
				//-------Finis Tunjangan Beras ----->
				
				
				//-----Start PPh --->
				$result40 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'IV' AND kd_rek_tunjangan like '5.1.1.01.07'");
				while($row40 = mysqli_fetch_array($result40))
				{	
					$angka40 =  $row40[0];	  
				}
				$result100 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan like '5.1.1.01.07'");
				while($row100 = mysqli_fetch_array($result100))
				{	
					$angka100 =  $row100[0];	  
				}
				
								
				
				$hasil43 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'IV'");
				$row43 = mysqli_num_rows($hasil43);
				$hasil101 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'III'");
				$row101 = mysqli_num_rows($hasil101);
				
				
				
				$jumlah40=$row43*14;
				$jumlah101=$row101*14;
				
				$total40 = $jumlah40 * $angka40;
				$total100 = $jumlah101 * $angka100;
				
				$gaji40 = $total40+$total100;
				//-------Finis PPh----->
				
				//-----Start Pembulatan Gaji --->
				$result50 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'IV' AND kd_rek_tunjangan like '5.1.1.01.08'");
				while($row50 = mysqli_fetch_array($result50))
				{	
					$angka50 =  $row50[0];	  
				}
				$result51 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'III' AND kd_rek_tunjangan like '5.1.1.01.08'");
				while($row51 = mysqli_fetch_array($result51))
				{	
					$angka51 =  $row51[0]; 
				}
				$result52 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'II' AND kd_rek_tunjangan like '5.1.1.01.08'");
				while($row52 = mysqli_fetch_array($result52))
				{	
					$angka52 =  $row52[0];	  
				}
				$result110 = mysqli_query($con, "SELECT harga_satuan  FROM dtl_tunjangan_golongan WHERE kd_rek_kecamatan LIKE '%cisarua' AND kd_golongan LIKE 'I' AND kd_rek_tunjangan like '5.1.1.01.08'");
				while($row110 = mysqli_fetch_array($result110))
				{	
					$angka110 =  $row110[0];	  
				}
								
				
				$hasil53 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'IV'");
				$row53 = mysqli_num_rows($hasil53);
				
				$hasil54 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'III'");
				$row54 = mysqli_num_rows($hasil54);
				
				$hasil55 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'II'");
				$row55 = mysqli_num_rows($hasil55);
				
				$hasil111 = mysqli_query($con, "SELECT * FROM pegawai where kd_rek_kecamatan like '%cisarua' AND kd_golongan LIKE 'I'");
				$row111 = mysqli_num_rows($hasil111);
				
				$jumlah50=$row53*14;
				$jumlah51=$row54*14;
				$jumlah52=$row55*14;
				$jumlah112=$row111*14;
				$total50 = $jumlah50 * $angka50;
				$total51 = $jumlah51 * $angka51;
				$total52 = $jumlah52 * $angka52;
				$total113 = $jumlah112 * $angka110;
				$gaji50 = $total50 + $total51 + $total52+$total113;
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
								<?php echo "Gol III ($row2 x 14) ";?><br><br>
								<?php echo "Gol II   ($row3 x 14)";?><br><br>
								<?php echo "Gol I   ($row61 x 14)";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $jumlah;?><br><br>
								<?php  echo $jumlah2;?><br><br>
								<?php  echo $jumlah3;?><br><br>
								<?php  echo $jumlah61;?></td>
								
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB<br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka;?><br><br>
								<?php echo $angka2;?><br><br>
								<?php echo $angka3;?><br><br>
								<?php echo $angka60;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$gaji2 = number_format($gaji);
									echo " Rp. ".$gaji2;?></b><br><br>
								<?php 
									$satuan = number_format($total);
								    echo " Rp. ".$satuan;?><br><br>
								<?php 
									$satuan2 = number_format($total2);
									echo " Rp. ".$satuan2;?><br><br>
								<?php 
									$satuan3 = number_format($total3);
									echo " Rp. ".$satuan3;?><br><br>
								<?php 
									$satuan61 = number_format($total61);
									echo " Rp. ".$satuan61;?></td>
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan Keluarga</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan Keluarga</b><br><br>
								<?php echo "Gol IV ($total4 x 13)";?><br><br>
								<?php echo "Gol III ($total6 x 13) ";?><br><br>
								<?php echo "Gol II   ($total8 x 13)";?><br><br>
								<?php echo "Gol I   ($total73 x 13)";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $total5;?><br><br>
								<?php  echo $total7;?><br><br>
								<?php  echo $total9;?><br><br>
								<?php  echo $total74;?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB<br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka4;?><br><br>
								<?php echo $angka6;?><br><br>
								<?php echo $angka8;?><br><br>
								<?php echo $angka71;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$satuan7 = number_format($gaji7);
									echo " Rp. ".$satuan7;?></b><br><br>
								<?php 
									$satuan4 = number_format($gaji4);
									echo " Rp. ".$satuan4;?><br><br>
								<?php 
									$satuan5 = number_format($gaji5);
									echo " Rp. ".$satuan5;?><br><br>
								<?php 
									$satuan6 = number_format($gaji6);
									echo " Rp. ".$satuan6;?><br><br>
								<?php 
									$satuan70 = number_format($gaji75);
									echo " Rp. ".$satuan70;?></td>
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan Jabatan</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan Jabatan</b><br><br>
								<?php echo "Eselon III/a ($row11 x 13)";?><br><br>
								<?php echo "Eselon III/b ($row12 x 13) ";?><br><br>
								<?php echo "Eselon IV/a   ($row13 x 13)";?><br><br>
								<?php echo "Eselon IV/b   ($row14 x 13)";?></td>
							
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
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan Umum</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan Umum</b><br><br>
								<?php echo "Gol III ($row16 x 13) ";?><br><br>
								<?php echo "Gol II   ($row17 x 13)";?><br><br>
								<?php echo "Gol I   ($row81 x 13)";?></td>
								
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $jumlah16;?><br><br>
								<?php  echo $jumlah17;?><br><br>
								<?php  echo $jumlah81;?></td>
								
							
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka16;?><br><br>
								<?php echo $angka17;?><br><br>
								<?php echo $angka80;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$satuan19 = number_format($gaji11);
									echo " Rp. ".$satuan19;?></b><br><br>
								<?php 
									$satuan17 = number_format($total16);
									echo " Rp. ".$satuan17;?><br><br>
								<?php 
									$satuan18 = number_format($total17);
									echo " Rp. ".$satuan18;?><br><br>
								<?php 
									$satuan81 = number_format($total81);
									echo " Rp. ".$satuan81;?></td>
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan Beras</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan Beras</b><br><br>
								<?php echo "Gol IV ($total22 x 12)";?><br><br>
								<?php echo "Gol III ($total25 x 12) ";?><br><br>
								<?php echo "Gol II   ($total30 x 12)";?><br><br>
								<?php echo "Gol I   ($total90 x 12)";?></td>
								
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $total23;?><br><br>
								<?php  echo $total26;?><br><br>
								<?php  echo $total31;?><br><br>
								<?php  echo $total91;?></td>
								
							
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB<br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka21;?><br><br>
								<?php echo $angka26;?><br><br>
								<?php echo $angka31;?><br><br>
								<?php echo $angka91;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$satuan23 = number_format($gaji27);
									echo " Rp. ".$satuan23;?></b><br><br>
								<?php 
									$satuan20 = number_format($gaji24);
									echo " Rp. ".$satuan20;?><br><br>
								<?php 
									$satuan21 = number_format($gaji25);
									echo " Rp. ".$satuan21;?><br><br>
								<?php 
									$satuan22 = number_format($gaji26);
									echo " Rp. ".$satuan22;?><br><br>
								<?php 
									$satuan92 = number_format($gaji92);
									echo " Rp. ".$satuan92;?></td>
						</tr>
							
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Tunjangan PPh/Tunjangan Khusus</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Tunjangan PPh/Tunjangan Khusus</b><br><br>
								<?php echo "Gol IV ($row43 x 14)";?><br><br>
								<?php echo "Gol III ($row101 x 14)";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $jumlah40;?><br><br>
								<?php  echo $jumlah101;?></td>
								
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka40;?><br><br>
								<?php echo $angka100;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$gaji41 = number_format($gaji40);
									echo " Rp. ".$gaji41;?></b><br><br>
									<?php 
									$gaji40 = number_format($total40);
									echo " Rp. ".$gaji40;?><br><br>
									<?php 
									$gaji101 = number_format($total100);
									echo " Rp. ".$gaji101;?></td>
						</tr>
						<tr>
							<th style="border:1pt  solid black;" colspan=5 align=center>Pembulatan Gaji</th>
						</tr>
						<tr>
							<td style="border:1pt  solid black;"><b>Pembulatan Gaji</b><br><br>
								<?php echo "Gol IV ($row53 x 14)";?><br><br>
								<?php echo "Gol III ($row54 x 14) ";?><br><br>
								<?php echo "Gol II   ($row55 x 14)";?><br><br>
								<?php echo "Gol I   ($row111 x 14)";?></td>
							
							<td style="border:1pt  solid black;"><br><br>
								<?php  echo $jumlah50;?><br><br>
								<?php  echo $jumlah51;?><br><br>
								<?php  echo $jumlah52;?><br><br>
								<?php  echo $jumlah112;?></td>
								
							<td style="border:1pt  solid black;"><br><br>
								OB<br><br>
								OB<br><br>
								OB<br><br>
								OB</td>
								
							<td style="border:1pt  solid black;"><br><br>
								<?php echo $angka50;?><br><br>
								<?php echo $angka51;?><br><br>
								<?php echo $angka52;?><br><br>
								<?php echo $angka110;?></td>
							
							
							<td style="border:1pt  solid black;"><b><?php 
									$gaji51 = number_format($gaji50);
									echo " Rp. ".$gaji51;?></b><br><br>
								<?php 
									$satuan50 = number_format($total50);
								    echo " Rp. ".$satuan50;?><br><br>
								<?php 
									$satuan51 = number_format($total51);
									echo " Rp. ".$satuan51;?><br><br>
								<?php 
									$satuan52 = number_format($total52);
									echo " Rp. ".$satuan52;?><br><br>
								<?php 
									$satuan100 = number_format($total113);
									echo " Rp. ".$satuan100;?></td>
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