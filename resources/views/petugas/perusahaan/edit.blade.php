@extends('layouts.admin.master')

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
                        <a href="{{ route('perusahaan.index')}}">
                            Data Perusahaan
                        </a>
                    </li>
                    <li class="active">
                        Konfimasi permohonan
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Pengecekan <small>Permohonan surat keterangan perusahaan</small></h1>
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
                        <form method="post" action="#" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Perusahaan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="Nama_Perusahaan" name="Nama_Perusahaan"
                                        placeholder="Text Field" value="PT. AOE Explore" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Pimpinan Perusahaan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="Nama_Pimpinan_Perusahaan"
                                        name="Nama_Pimpinan_Perusahaan" placeholder="Text Field" value="PT. AOE Explore"
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Telepon </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Text Field" value="0812912323" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Alamat </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Text Field" value="Surabyaa" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    KBLI </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Text Field" value="41212" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    NIB </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Text Field" value="2130202434" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Dokumen NIB </span>
                                </label>
                                <div class="col-sm-7">
                                    <a href="{{asset('assets/admin/images/image01.jpg')}}" class="btn btn-file"
                                        target="_blank" title="Lihat Dokumen">
                                        <i class="clip-file-2"> | Dokumen NIB</i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Konfirmasi Persyaratan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <select class="form-control" id="country" name="status-tahap-1" onchange="showDiv('catatan-form',this)">
                                        <option value="">&nbsp;</option>
                                        <option value="lengkap">Lengkap</option>
                                        <option value="tidak-lengkap">Tidak Lengkap</option>
                                    </select>
                                </div>
                            </div>
                            <div id="catatan-form" class="form-group">
                                <label class="col-sm-3 control-label">
                                    Catatan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <textarea placeholder="Uraian" name="uraian" id="form-field-22" class="form-control" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-9">
                                    <button type="submit" class="btn btn-blue next-step btn-block">
                                        Submit <i class="fa fa-arrow-circle-right"></i>
                                    </button>
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

<script src="assets/admin/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/admin/plugins/autosize/jquery.autosize.min.js"></script>
<script src="{{asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script src="assets/admin/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
<script src="assets/admin/plugins/summernote/build/summernote.min.js"></script>
<script src="assets/admin/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/admin/plugins/ckeditor/adapters/jquery.js"></script>
<script src="assets/admin/js/form-elements.js"></script>
<script src="{{asset('assets/js/ui-buttons.js')}}"></script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        FormWizard.init();
    });

</script>

<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == 'tidak-lengkap' ? 'block' : 'none';
    }

</script>
@endpush

@push('style')
<link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/select2.css')}}">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
<link rel="stylesheet" href="assets/admin/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<link rel="stylesheet" href="assets/admin/plugins/summernote/build/summernote.css">
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-social-buttons/social-buttons-3.css')}}">

<style>
    .btn-file {
        color: #000000;
        background-color: #fafafa;
        border-color: #cccccc;
    }

    #catatan-form {
        display: none
    }

</style>
@endpush
