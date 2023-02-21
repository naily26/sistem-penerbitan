@extends('layout.master-pemohon')

@section('content')
    <!-- start: PAGE -->
			<div class="main-content">
				
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-pencil"></i>
									<a href="#">
										Data Angkutan
									</a>
								</li>
								<li class="active">
									tambah data
								</li>
							</ol>
							<div class="page-header">
								<h1>Tambah Data Angkutan </h1>
							</div>
                            
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: TEXT FIELDS PANEL -->
							<div class="panel panel-default">
								<div class="panel-body">
									<form role="form" class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												Text Field
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-1" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-2">
												Password
											</label>
											<div class="col-sm-9">
												<input type="password" placeholder="Password" id="form-field-2" class="form-control">
											</div>
										</div>
										<div class="form-group has-success">
											<label class="col-sm-2 control-label" for="form-field-3" >
												Success Field
											</label>
											<div class="col-sm-9">
												<input type="text" id="form-field-3" class="form-control">
											</div>
										</div>
										<div class="form-group has-warning">
											<label class="col-sm-2 control-label" for="form-field-4" >
												Warning Field
											</label>
											<div class="col-sm-9">
												<input type="text" id="form-field-4" class="form-control">
											</div>
										</div>
										<div class="form-group has-error">
											<label class="col-sm-2 control-label" for="form-field-5" >
												Error Field
											</label>
											<div class="col-sm-9">
												<input type="text" id="form-field-5" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-6">
												Block Help
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-6" class="form-control">
												<span class="help-block"><i class="fa fa-info-circle"></i> A block of help text that breaks onto a new line and may extend beyond one line.</span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-7">
												Inline Help
											</label>
											<div class="col-sm-7">
												<input type="text" placeholder="Text Field" id="form-field-7" class="form-control">
											</div>
											<span class="help-inline col-sm-2"> <i class="fa fa-info-circle"></i> Inline help text </span>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-8">
												Tooltip and Help Button
											</label>
											<div class="col-sm-9">
												<span class="input-help">
													<input id="form-field-8" class="form-control tooltips" type="text" data-placement="top" title="" placeholder="Tooltip on hover" data-rel="tooltip" data-original-title="Hello Tooltip!">
													<i class="help-button popovers" title="" data-content="More details." data-placement="right" data-trigger="hover" data-rel="popover" data-original-title="Popover on hover"></i> </span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">
												Sizes
											</label>
											<div class="col-sm-2">
												<input type="text" placeholder="Text Field" id="form-field-9" class="form-control">
											</div>
											<div class="col-sm-3">
												<input type="text" placeholder="Text Field" id="form-field-10" class="form-control">
											</div>
											<div class="col-sm-4">
												<input type="text" placeholder="Text Field" id="form-field-11" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-12">
												Large Field
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-12" class="form-control input-lg">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-13">
												Small Field
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-13" class="form-control input-sm">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">
												Input with Icon
											</label>
											<div class="col-sm-3">
												<span class="input-icon">
													<input type="text" placeholder="Text Field" id="form-field-14" class="form-control">
													<i class="fa fa-user"></i> </span>
											</div>
											<div class="col-sm-3">
												<span class="input-icon">
													<input type="text" placeholder="Text Field" id="form-field-15" class="form-control">
													<i class="fa fa-quote-left"></i> </span>
											</div>
											<div class="col-sm-3">
												<span class="input-icon">
													<input type="text" placeholder="Text Field" id="form-field-16" class="form-control">
													<i class="fa fa-hand-o-right"></i> </span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">
												Right Icon
											</label>
											<div class="col-sm-3">
												<span class="input-icon input-icon-right">
													<input type="text" placeholder="Text Field" id="form-field-17" class="form-control">
													<i class="fa fa-rocket"></i> </span>
											</div>
											<div class="col-sm-3">
												<span class="input-icon input-icon-right">
													<input type="text" placeholder="Text Field" id="form-field-18" class="form-control">
													<i class="fa fa-quote-right"></i> </span>
											</div>
											<div class="col-sm-3">
												<span class="input-icon input-icon-right">
													<input type="text" placeholder="Text Field" id="form-field-19" class="form-control">
													<i class="fa fa-hand-o-left"></i> </span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-20">
												With Character Limit
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-20" class="form-control limited" maxlength="40">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-21">
												Disabled
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-21" class="form-control" disabled="disabled">
											</div>
										</div>
										<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-22">
													Advanced
												</label>
												<div class="col-sm-9 fileupload fileupload-new" data-provides="fileupload">
													<div class="input-group">
														<div class="form-control uneditable-input">
															<i class="fa fa-file fileupload-exists"></i>
															<span class="fileupload-preview"></span>
														</div>
														<div class="input-group-btn">
															<div class="btn btn-light-grey btn-file">
																<span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Select file</span>
																<span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Change</span>
																<input type="file" class="file-input" id="form-field-22">
															</div>
															<a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
																<i class="fa fa-times"></i> Remove
															</a>
														</div>
													</div>
												</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<label class="col-sm-2 control-label" for="form-field-23">
													Image Upload
												</label>
												<div class="col-sm-9 fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
													</div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
															<input type="file" id="form-field-23">
														</span>
														<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
															<i class="fa fa-times"></i> Remove
														</a>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- end: TEXT FIELDS PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
@endsection

@push('script')
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/admin/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
		<script src="assets/admin/js/form-wizard.js"></script>
  
        <script src="assets/admin/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/admin/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="assets/admin/plugins/select2/select2.min.js"></script>
		<script src="assets/admin/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="assets/admin/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="assets/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/admin/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/admin/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="assets/admin/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/admin/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="assets/admin/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/admin/plugins/summernote/build/summernote.min.js"></script>
		<script src="assets/admin/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/admin/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="assets/admin/js/form-elements.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormWizard.init();
			});
		</script>
@endpush

@push('style')
<link rel="stylesheet" href="assets/admin/plugins/select2/select2.css">
<link rel="stylesheet" href="assets/admin/plugins/datepicker/css/datepicker.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
<link rel="stylesheet" href="assets/admin/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<link rel="stylesheet" href="assets/admin/plugins/summernote/build/summernote.css">
@endpush