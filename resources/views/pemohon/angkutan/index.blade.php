@extends('layouts.admin.master')

@section('content')
    <!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								
								<li class="active">
									Data Angkutan
								</li>
								
							</ol>
							<div class="page-header">
								<h1>Data Angkutan <small>Permohonan surat rekomendasi peruntukan angkutan umum</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
                    <div class="row">
						<div class="col-md-12">
                            <a class="btn btn-primary" href="{{route('angkutan.create')}}"><i class="fa fa-plus"></i>
                                Tambah Angkutan</a>
                        </div>
                    </div><br/>
					<div class="row">
						<div class="col-md-12">
							<!-- start: DYNAMIC TABLE PANEL -->
                           
							<div class="panel panel-default">
								
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
												<th>Nama Perusahaan</th>
												<th class="hidden-xs">KBLI</th>
												<th>Nomor Kendaraan</th>
                                                <th>Merk</th>
												<th class="hidden-xs"> Status</th>
												<th>Action</th>
                                                {{-- <th>Action</th> --}}
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Amaya</td>
												<td class="hidden-xs">W3C,
												INRIA</td>
												<td>Free</td>
                                                <td>Pasuruan</td>
												<td class="hidden-xs"><span class="label label-primary">Diproses</span></td>
												<td>
                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-eye"></i>
                                                        detail</a>
                                                </td>
											</tr>
											<tr>
												<td>AOL Explorer</td>
												<td class="hidden-xs">America Online, Inc</td>
												<td>Free</td>
                                                <td>Pasuruan</td>
												<td class="hidden-xs"><span class="label label-danger">Ditolak</span></td>
												<td>
                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-edit"></i>
                                                        edit</a>
                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-trash-o"></i>
                                                    hapus</a>
                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-eye"></i>
                                                    detail</a>
                                                </td>
											</tr>
											<tr>
												<td>Arora</td>
												<td class="hidden-xs">Benjamin C. Meyer</td>
												<td>Free</td>
                                                <td>Pasuruan</td>
												<td class="hidden-xs"><span class="label label-success">Disetujui</span></td>
												<td>
                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-eye"></i>
                                                        detail</a>
                                                </td>
											</tr>
											<tr>
												<td>Arora</td>
												<td class="hidden-xs">Benjamin C. Meyer</td>
												<td>Free</td>
                                                <td>Pasuruan</td>
												<td class="hidden-xs"><span class="label label-warning">Tertunda</span></td>
												<td>
                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-eye"></i>
                                                        detail</a>
                                                        <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-info"></i>
                                                            tinjau perusahaan</a>
                                                </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: DYNAMIC TABLE PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
@endsection
@push('style')
<link rel="stylesheet" type="text/css"
href="{{ asset('assets/admin/plugins/select2/select2.css') }}" />
<link rel="stylesheet"
href="{{ asset('assets/admin/plugins/DataTables/media/css/DT_bootstrap.css') }}" />
<style>
    i {
padding: 5px;
}
</style>
@endpush

@push('script')
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="assets/admin/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/admin/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/admin/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/admin/js/table-data.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
		</script>
@endpush