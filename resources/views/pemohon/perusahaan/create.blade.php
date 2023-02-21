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
										Data Perusahaan
									</a>
								</li>
								<li class="active">
									tambah data
								</li>
							</ol>
							<div class="page-header">
								<h1>Tambah Data Perusahaan </h1>
							</div>
                            <div class="alert alert-info">
                                <button data-dismiss="alert" class="close">
                                    &times;
                                </button>
                                <i class="fa fa-info-circle"></i>
                                <strong>Perhatian!</strong> Untuk menambah satu perusahaan baru anda
                            </div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: FORM WIZARD PANEL -->
							<div class="panel panel-default">
								<div class="panel-body">
									<form action="#" role="form" class="smart-wizard form-horizontal" id="form">
										<div id="wizard" class="swMain">
											<ul>
												<li>
													<a href="#step-1">
														<div class="stepNumber">
															1
														</div>
														<span class="stepDesc"> Step 1
															<br />
															<small>Step 1 description</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-2">
														<div class="stepNumber">
															2
														</div>
														<span class="stepDesc"> Step 2
															<br />
															<small>Step 2 description</small> </span>
													</a>
												</li>
											</ul>
											<div class="progress progress-striped active progress-sm">
												<div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar progress-bar-success step-bar">
													<span class="sr-only"> 0% Complete (success)</span>
												</div>
											</div>
											<div id="step-1">
												<h2 class="StepTitle">Step 1 Content</h2>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nama Perusahaan <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="username" name="username" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														NIB <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="email" class="form-control" id="email" name="email" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nama Pimpinan <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="password" class="form-control" id="password" name="password" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Alamat Perusahaan<span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="password" class="form-control" id="password_again" name="password_again" placeholder="Text Field">
													</div>
												</div>
                                                <div class="form-group">
                                                    <div class="col-sm-3 control-label">
                                                        <label>
                                                            Advanced
                                                        </label>
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="input-group">
                                                                <div class="form-control uneditable-input">
                                                                    <i class="fa fa-file fileupload-exists"></i>
                                                                    <span class="fileupload-preview"></span>
                                                                </div>
                                                                <div class="input-group-btn">
                                                                    <div class="btn btn-light-grey btn-file">
                                                                        <span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Select file</span>
                                                                        <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Change</span>
                                                                        <input type="file" class="file-input">
                                                                    </div>
                                                                    <a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
                                                                        <i class="fa fa-times"></i> Remove
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label>
                                                            Image Upload
                                                        </label>
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                                            </div>
                                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                            <div>
                                                                <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                                                                    <input type="file">
                                                                </span>
                                                                <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                                    <i class="fa fa-times"></i> Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="alert alert-warning">
                                                            <span class="label label-warning">NOTE!</span>
                                                            <span> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead. </span>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															Next <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
                                                
											</div>
											<div id="step-2">
												<h2 class="StepTitle">Step 2 Content</h2>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														full_name <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Phone Number <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="phone" name="phone" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Gender <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="f" name="gender" id="gender_female" >
															Female
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="gender"  id="gender_male">
															Male
														</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Address <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="address" name="address" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Country <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<select class="form-control" id="country" name="country">
															<option value="">&nbsp;</option>
															<option value="Country 1">Country 1</option>
															<option value="Country 2">Country 2</option>
															<option value="Country 3">Country 3</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														City <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="city" name="city" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-light-grey back-step btn-block">
															<i class="fa fa-circle-arrow-left"></i> Back
														</button>
													</div>
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-blue next-step btn-block">
															Next <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- end: FORM WIZARD PANEL -->
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