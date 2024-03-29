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
                    <strong>Perhatian!</strong> Untuk mengajukan permohonan surat keterangan perusahaan harap melengkapi
                    persyaratan yang sudah ditentukan
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
                                                <small>Step 1 petunjuk</small> </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <div class="stepNumber">
                                                2
                                            </div>
                                            <span class="stepDesc"> Step 2
                                                <br />
                                                <small>Step 2 pengisian form permohonan</small> </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="progress progress-striped active progress-sm">
                                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                        class="progress-bar progress-bar-success step-bar">
                                        <span class="sr-only"> 0% Complete (success)</span>
                                    </div>
                                </div>
                                <div id="step-1">
                                    <h2 class="StepTitle">Step 1 Content</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-2">
                                            Silahkan persiapkan beberapa dokumen berikut ini:
                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet
                                                </li>
                                                <li>
                                                    Consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    Integer molestie lorem at massa
                                                </li>
                                                <li>
                                                    Facilisis in pretium nisl aliquet
                                                </li>
                                                <li>
                                                    Nulla volutpat aliquam velit
                                                </li>
                                                <li>
                                                    Faucibus porta lacus fringilla vel
                                                </li>
                                                <li>
                                                    Aenean sit amet erat nunc
                                                </li>
                                                <li>
                                                    Eget porttitor lorem
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-sm-offset-8">
                                            <button class="btn btn-blue next-step btn-block">
                                                Next <i class="fa fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="step-4">
                                    <h2 class="StepTitle">Step 3 Title</h2>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Keterangan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <select class="form-control" id="keterangan" name="keterangan"
                                                onchange="cekKeterangan(this)">
                                                <option value="">&nbsp;</option>
                                                <option value="perpanjangan-STNK">Perpanjangan STNK</option>
                                                <option value="kendaraan-baru">Kendaraan Baru</option>
                                                <option value="kendaraan-mutasi">Kendaraan Mutasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Kendaraan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="full_name" name="full_name"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Uji <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="full_name" name="full_name"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Merk <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Tipe <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Tahun Pembuatan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nama Pemilik Kendaraan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Warna TNKB <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div id="izin-trayek" class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Surat Keputusan Izin Trayek <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="file" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            STNKB <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="file" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Buku Uji Berkala <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="file" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Surat Kuasa <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="file" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Surat Kuasa <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
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
                                        <label class="col-sm-3 control-label">
                                            Foto Kendaraan (bagian depan) <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 160px; height: 120px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 160px; max-height: 120px; line-height: 20px;"></div>
                                                    <div>
                                                        <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                                                            <input type="file">
                                                        </span>
                                                        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div id="kendaraan-baru">
                                        <div id="surat-faktur" class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Surat Faktur Intern dari dealer <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="file" class="form-control" id="city" name="surat-faktur"
                                                    placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div id="srut" class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Sertifikat Registrasi Uji Tipe <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="file" class="form-control" id="city" name="srut"
                                                    placeholder="Text Field">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="kendaraan-mutasi">
                                        <div id="keterangan-fiskal" class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Surat Keterangan Fiskal <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="file" class="form-control" id="city"
                                                    name="keterangan-fiskal" placeholder="Text Field">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
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
<script src="{{asset('assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
<script src="{{asset('assets/admin/js/form-wizard.js')}}"></script>

<script src="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{asset('assets/admin/js/form-elements.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        FormWizard.init();
        FormElements.init();
    });

</script>

<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == divId ? 'block' : 'none';
    }

    function cekKeterangan(element) {
        showDiv('kendaraan-baru', element);
        showDiv('kendaraan-mutasi', element);
    }

</script>
@endpush

@push('style')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">

<style>
    #izin-trayek {
        display: none
    }

    #kendaraan-baru {
        display: none
    }

    #kendaraan-mutasi {
        display: none
    }

</style>
@endpush
