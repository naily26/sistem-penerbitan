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
                        Data Perusahaan
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Perusahaan <small>Permohonan surat keterangan perusahaan</small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: INLINE TABS PANEL -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tabbable">
                                <ul id="myTab" class="nav nav-tabs tab-bricky">
                                    <li class="active">
                                        <a href="#data-dalam-proses" data-toggle="tab">
                                            Data dalam proses <span class="badge badge-danger">4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#data-disetujui" data-toggle="tab">
                                            Data disetujui
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#data-ditolak" data-toggle="tab">
                                            Data ditolak
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane in active" id="data-dalam-proses">
                                        <!-- start: DYNAMIC TABLE PANEL -->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <th class="hidden-xs">NIB</th>
                                                            <th>KBLI</th>
                                                            <th>Alamat</th>
                                                            <th>Action</th>
                                                            {{-- <th>Action</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>AOL Explorer</td>
                                                            <td class="hidden-xs">923123324</td>
                                                            <td>49212</td>
                                                            <td>Pasuruan</td>
                                                            <td>
                                                                <a class="btn btn-xs btn-light-grey"
                                                                    href="{{route('perusahaan.edit', 1)}}"><i
                                                                        class="fa fa-check-square-o"></i>
                                                                    konfirmasi status</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>AOL Explorer</td>
                                                            <td class="hidden-xs">923123324</td>
                                                            <td>49213</td>
                                                            <td>Pasuruan</td>
                                                            <td>
                                                                <a class="btn btn-xs btn-light-grey" href="#"><i
                                                                        class="fa fa-check-square-o"></i>
                                                                    konfirmasi status</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end: DYNAMIC TABLE PANEL -->
                                    </div>
                                    <div class="tab-pane" id="data-disetujui">
                                        <!-- start: DYNAMIC TABLE PANEL -->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <th class="hidden-xs">NIB</th>
                                                            <th>KBLI</th>
                                                            <th>Alamat</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            {{-- <th>Action</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>AOL Explorer</td>
                                                            <td class="hidden-xs">923123324</td>
                                                            <td>49212</td>
                                                            <td>Pasuruan</td>
                                                            <td>Belum dicetak</td>
                                                            <td>
                                                                <a class="btn btn-xs btn-green"
                                                                    href="#konfirmasi-penerbitan-surat"
                                                                    data-toggle="modal">
                                                                    <i class="fa fa-check-square-o"></i>
                                                                    konfirmasi penerbitan surat</a>
                                                                <a href="{{ url('cetak-surat-perusahaan') }}"
                                                                    target="_blank" class="btn btn-xs btn-blue">
                                                                    <i class="fa clip-file-pdf"></i>
                                                                    cetak surat</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>AOL Explorer</td>
                                                            <td class="hidden-xs">923123324</td>
                                                            <td>49213</td>
                                                            <td>Pasuruan</td>
                                                            <td>Belum dicetak</td>
                                                            <td>
                                                                <a class="btn btn-xs btn-light-grey"
                                                                    href="#konfirmasi-penerbitan-surat"
                                                                    data-toggle="modal">
                                                                    <i class="fa fa-check-square-o"></i>
                                                                    konfirmasi penerbitan surat</a>
                                                            </td>
                                                        </tr>
                                                        <div id="konfirmasi-penerbitan-surat" class="modal fade"
                                                            tabindex="-1" data-width="360" style="display: none;">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">
                                                                    &times;
                                                                </button>
                                                                <h4 class="modal-title">
                                                                    <i class="bi bi-exclamation-octagon-fill"
                                                                        style="color: red"></i>
                                                                    Konfirmasi Penerbitan Surat
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p>Apakah surat keterengan perusahaan telah
                                                                            diterbitkan?</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="#" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-footer">
                                                                    <button type="button" data-dismiss="modal"
                                                                        class="btn btn-default">
                                                                        Batalkan
                                                                    </button>
                                                                    <button type="submit" class="btn btn-danger"
                                                                        id="submit">
                                                                        Ya
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end: DYNAMIC TABLE PANEL -->
                                    </div>
                                    <div class="tab-pane" id="data-ditolak">
                                        <!-- start: DYNAMIC TABLE PANEL -->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <th class="hidden-xs">NIB</th>
                                                            <th>KBLI</th>
                                                            <th>Alamat</th>
                                                            <th>Action</th>
                                                            {{-- <th>Action</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>AOL Explorer</td>
                                                            <td class="hidden-xs">923123324</td>
                                                            <td>49212</td>
                                                            <td>Pasuruan</td>
                                                            <td>
                                                                <a class="btn btn-xs btn-light-grey" href="#"><i
                                                                        class="fa fa-eye"></i>
                                                                    detail</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>AOL Explorer</td>
                                                            <td class="hidden-xs">923123324</td>
                                                            <td>49213</td>
                                                            <td>Pasuruan</td>
                                                            <td>
                                                                <a class="btn btn-xs btn-light-grey" href="#"><i
                                                                        class="fa fa-eye"></i>
                                                                    detail</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end: DYNAMIC TABLE PANEL -->
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
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/DataTables/media/css/DT_bootstrap.css') }}" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet"
    type="text/css" />
<style>
    i {
        padding: 5px;
    }

</style>
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript" src="{{ asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/plugins/DataTables/media/js/jquery.dataTables.min.js')}}">
</script>
<script type="text/javascript" src="{{ asset('assets/admin/plugins/DataTables/media/js/DT_bootstrap.js')}}"></script>
<script src="assets/admin/js/table-data.js"></script>

<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('assets/admin/js/ui-modals.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        TableData.init();
    });

</script>
@endpush
