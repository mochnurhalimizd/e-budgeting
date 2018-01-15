<?php
/*header('Access-Control-Allow-Origin: *');*/
// header('Access-Control-Allow-Methods: GET, POST'); 

$page = (isset($_REQUEST['page']))?
		$_REQUEST['page'] : "page";
		switch($page){
	
	//view
	default:include 'page/dashboard.php';break;
	case 'home':include 'page/dashboard.php';break;	
	case 'login':include 'index.php';break;	

	case 'skpd':include 'page/skpd.php';break;	
	case 'kecamatan':include 'page/kecamatan.php';break;

	//FORM MASTER
	case 'form_master_pegawai':include 'page/form_master/master_pegawai/master_pegawai.php';break;	
	case 'form_master_skpd':include 'page/form_master/master_skpd/master_skpd.php';break;	
	case 'form_master_kecamatan':include 'page/form_master/master_kecamatan/master_kecamatan.php';break;	
	case 'form_master_tunjangan':include 'page/form_master/master_tunjangan/master_tunjangan.php';break;	
	case 'form_master_eselon':include 'page/form_master/master_eselon/master_eselon.php';break;	
	case 'form_master_golongan':include 'page/form_master/master_golongan/master_golongan.php';break;

	case 'form_master_dtl_tunjangan':include 'page/form_master/master_dtl_tunjangan/master_dtl_tunjangan.php';break;
	case 'form_master_gapok_skpd':include 'page/form_master/master_gapok_skpd/master_gapok_skpd.php';break;	
	case 'form_master_gapok_kecamatan':include 'page/form_master/master_gapok_kecamatan/master_gapok_kecamatan.php';break;	

	//TABLE MASTER
	case 'table_master_pegawai':include 'page/form_master/master_pegawai/table_master_pegawai.php';break;	
	case 'table_master_skpd':include 'page/form_master/master_skpd/table_master_skpd.php';break;	
	case 'table_master_kecamatan':include 'page/form_master/master_kecamatan/table_master_kecamatan.php';break;	
	case 'table_master_tunjangan':include 'page/form_master/master_tunjangan/table_master_tunjangan.php';break;	
	case 'table_master_eselon':include 'page/form_master/master_eselon/table_master_eselon.php';break;	
	case 'table_master_golongan':include 'page/form_master/master_golongan/table_master_golongan.php';break;

	case 'table_master_dtl_tunjangan':include 'page/form_master/master_dtl_tunjangan/table_dtl_tunjangan.php';break;
	case 'table_master_gapok_skpd':include 'page/form_master/master_gapok_skpd/table_gapok_skpd.php';break;	
	case 'table_master_gapok_kecamatan':include 'page/form_master/master_gapok_kecamatan/table_gapok_kecamatan.php';break;

	//EDIT
	case 'edit_master_pegawai':include 'page/form_master/master_pegawai/edit_master_pegawai.php';break;	

	//BPKD	
	case 'bpkd_view_pegawai':include 'page/skpd/bpkd/view_pegawai.php';break;
	case 'bpkd_view_anggaran':include 'page/skpd/bpkd/view_anggaran.php';break;
	case 'bpkd_add':include 'page/skpd/bpkd/add.php';break;
	case 'bpkd_edit':include 'page/skpd/bpkd/edit.php';break;
	case 'bpkd_insert':include 'page/skpd/bpkd/process/insert.php';break;
	case 'bpkd_update':include 'page/skpd/bpkd/process/update.php';break;
	case 'bpkd_delete':include 'page/skpd/bpkd/process/delete.php';break;

	//DISKOPUKM
	case 'diskopukm_view_pegawai':include 'page/skpd/diskopukm/view_pegawai.php';break;
	case 'diskopukm_view_anggaran':include 'page/skpd/diskopukm/view_anggaran.php';break;
	case 'diskopukm_add':include 'page/skpd/diskopukm/add.php';break;
	case 'diskopukm_edit':include 'page/skpd/diskopukm/edit.php';break;
	case 'diskopukm_insert':include 'page/skpd/diskopukm/process/insert.php';break;
	case 'diskopukm_update':include 'page/skpd/diskopukm/process/update.php';break;
	case 'diskopukm_delete':include 'page/skpd/diskopukm/process/delete.php';break;

	//LH	
	case 'lh_view_pegawai':include 'page/skpd/lh/view_pegawai.php';break;
	case 'lh_view_anggaran':include 'page/skpd/lh/view_anggaran.php';break;
	case 'lh_add':include 'page/skpd/lh/add.php';break;
	case 'lh_edit':include 'page/skpd/lh/edit.php';break;
	case 'lh_insert':include 'page/skpd/lh/process/insert.php';break;
	case 'lh_update':include 'page/skpd/lh/process/update.php';break;
	case 'lh_delete':include 'page/skpd/lh/process/delete.php';break;

	//DISBUDPAR	
	case 'disbudpar_view_pegawai':include 'page/skpd/disbudpar/view_pegawai.php';break;
	case 'disbudpar_view_anggaran':include 'page/skpd/disbudpar/view_anggaran.php';break;
	case 'disbudpar_add':include 'page/skpd/disbudpar/add.php';break;
	case 'disbudpar_edit':include 'page/skpd/disbudpar/edit.php';break;
	case 'disbudpar_insert':include 'page/skpd/disbudpar/process/insert.php';break;
	case 'disbudpar_update':include 'page/skpd/disbudpar/process/update.php';break;
	case 'disbudpar_delete':include 'page/skpd/disbudpar/process/delete.php';break;

	//DISPORA	
	case 'dispora_view_pegawai':include 'page/skpd/dispora/view_pegawai.php';break;
	case 'dispora_view_anggaran':include 'page/skpd/dispora/view_anggaran.php';break;
	case 'dispora_add':include 'page/skpd/dispora/add.php';break;
	case 'dispora_edit':include 'page/skpd/dispora/edit.php';break;
	case 'dispora_insert':include 'page/skpd/dispora/process/insert.php';break;
	case 'dispora_update':include 'page/skpd/dispora/process/update.php';break;
	case 'dispora_delete':include 'page/skpd/dispora/process/delete.php';break;

	//DPMTSP	
	case 'dpmtsp_view_pegawai':include 'page/skpd/dpmtsp/view_pegawai.php';break;
	case 'dpmtsp_view_anggaran':include 'page/skpd/dpmtsp/view_anggaran.php';break;
	case 'dpmtsp_add':include 'page/skpd/dpmtsp/add.php';break;
	case 'dpmtsp_edit':include 'page/skpd/dpmtsp/edit.php';break;
	case 'dpmtsp_insert':include 'page/skpd/dpmtsp/process/insert.php';break;
	case 'dpmtsp_update':include 'page/skpd/dpmtsp/process/update.php';break;
	case 'dpmtsp_delete':include 'page/skpd/dpmtsp/process/delete.php';break;

	//KEC.PARONGPONG
	case 'parongpong_view_pegawai':include 'page/kecamatan/parongpong/view_pegawai.php';break;
	case 'parongpong_view_anggaran':include 'page/kecamatan/parongpong/view_anggaran.php';break;
	case 'parongpong_add':include 'page/kecamatan/parongpong/add.php';break;
	case 'parongpong_edit':include 'page/kecamatan/parongpong/edit.php';break;
	case 'parongpong_insert':include 'page/kecamatan/parongpong/process/insert.php';break;
	case 'parongpong_update':include 'page/kecamatan/parongpong/process/update.php';break;
	case 'parongpong_delete':include 'page/kecamatan/parongpong/process/delete.php';break;

	//KEC.CISARUA
	case 'cisarua_view_pegawai':include 'page/kecamatan/cisarua/view_pegawai.php';break;
	case 'cisarua_view_anggaran':include 'page/kecamatan/cisarua/view_anggaran.php';break;
	case 'cisarua_add':include 'page/kecamatan/cisarua/add.php';break;
	case 'cisarua_edit':include 'page/kecamatan/cisarua/edit.php';break;
	case 'cisarua_insert':include 'page/kecamatan/cisarua/process/insert.php';break;
	case 'cisarua_update':include 'page/kecamatan/cisarua/process/update.php';break;
	case 'cisarua_delete':include 'page/kecamatan/cisarua/process/delete.php';break;

	//KEC.PADALARANG
	case 'padalarang_view_pegawai':include 'page/kecamatan/padalarang/view_pegawai.php';break;
	case 'padalarang_view_anggaran':include 'page/kecamatan/padalarang/view_anggaran.php';break;
	case 'padalarang_add':include 'page/kecamatan/padalarang/add.php';break;
	case 'padalarang_edit':include 'page/kecamatan/padalarang/edit.php';break;
	case 'padalarang_insert':include 'page/kecamatan/padalarang/process/insert.php';break;
	case 'padalarang_update':include 'page/kecamatan/padalarang/process/update.php';break;
	case 'padalarang_delete':include 'page/kecamatan/padalarang/process/delete.php';break;

	//KEC.LEMBANG
	case 'lembang_view_pegawai':include 'page/kecamatan/lembang/view_pegawai.php';break;
	case 'lembang_view_anggaran':include 'page/kecamatan/lembang/view_anggaran.php';break;
	case 'lembang_add':include 'page/kecamatan/lembang/add.php';break;
	case 'lembang_edit':include 'page/kecamatan/lembang/edit.php';break;
	case 'lembang_insert':include 'page/kecamatan/lembang/process/insert.php';break;
	case 'lembang_update':include 'page/kecamatan/lembang/process/update.php';break;
	case 'lembang_delete':include 'page/kecamatan/lembang/process/delete.php';break;
}

?>