@extends('layout.master-petugas')

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
						<div class="col-sm-12">
							<!-- start: INLINE TABS PANEL -->
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-12">
											<div class="tabbable">
												<ul id="myTab" class="nav nav-tabs tab-bricky">
													<li class="active">
														<a href="#panel_tab2_example1" data-toggle="tab">
															 Data dalam proses <span class="badge badge-danger">4</span>
														</a>
													</li>
													<li>
														<a href="#panel_tab2_example2" data-toggle="tab">
															Data disetujui 
														</a>
													</li>
													<li>
														<a href="#panel_tab2_example3" data-toggle="tab">
															Data ditolak 
														</a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane in active" id="panel_tab2_example1">
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
												<td>
                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-check-square-o"></i>
                                                        konfirmasi status</a>
                                                </td>
											</tr>
											<tr>
												<td>AOL Explorer</td>
												<td class="hidden-xs">America Online, Inc</td>
												<td>Free</td>
                                                <td>Pasuruan</td>
												<td>
                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-check-square-o"></i>
                                                        konfirmasi status</a>
                                                </td>
											</tr>
											<tr>
												<td>Arora</td>
												<td class="hidden-xs">Benjamin C. Meyer</td>
												<td>Free</td>
                                                <td>Pasuruan</td>
												<td>
													<a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-check-square-o"></i>
                                                        konfirmasi status</a>
                                                </td>
											</tr>
											<tr>
												<td>Arora</td>
												<td class="hidden-xs">Benjamin C. Meyer</td>
												<td>Free</td>
                                                <td>Pasuruan</td>
												<td>
													<a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-check-square-o"></i>
                                                        konfirmasi status</a>
                                                </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: DYNAMIC TABLE PANEL -->
													</div>
													<div class="tab-pane" id="panel_tab2_example2">
														<p>
															Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
														</p>
														<p>
															<a href="#panel_tab2_example3" class="btn btn-red show-tab">
																Go to Dropdown 1
															</a>
														</p>
													</div>
													<div class="tab-pane" id="panel_tab2_example3">
														<p>
															Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
														</p>
														<p>
															Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
														</p>
														<p>
															<a href="#panel_tab2_example4" class="btn btn-purple show-tab">
																Go to Dropdown 2
															</a>
														</p>
													</div>
													<div class="tab-pane" id="panel_tab2_example4">
														<p>
															Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
														</p>
														<p>
															<a href="#panel_tab2_example1" class="btn btn-purple show-tab">
																Return to tab 1
															</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: INLINE TABS PANEL -->
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