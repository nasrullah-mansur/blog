@extends('layouts.back')

@section('title')
Tag
@endsection

@section('page_title')
Tag
@endsection

@section('css_plugins')
<link href="{{ asset('back/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('back/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection



@section('content')
<div class="container-fluid">
    <!-- Basic Validation -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="white-space: nowrap;">Tag name</th>
                                        <th>Slug</th>
                                        <th style="white-space: nowrap;">Created at</th>
                                        <th style="white-space: nowrap;">Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th style="white-space: nowrap;">Tag name</th>
                                        <th>Slug</th>
                                        <th style="white-space: nowrap;">Created at</th>
                                        <th style="white-space: nowrap;">Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Smart phone</a>
                                        </td>
                                        <td>
                                            <span>smart-phone</span>
                                        </td>
                                        <td>
                                            <div>
                                                <span style="white-space: nowrap;">19 day ago</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <span style="white-space: nowrap;">1 day ago</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-btn d-flex">
                                                <a href="javascript:void(0);" class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                                <form class="d-inline">
                                                    <button class="waves-effect waves-float btn-sm waves-red text-black border-0"><i class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Nokia</a>
                                        </td>
                                        <td>
                                            <span>smart-phone</span>
                                        </td>
                                        <td>
                                            <div>
                                                <span style="white-space: nowrap;">1 day ago</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <span style="white-space: nowrap;">1 day ago</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-btn d-flex">
                                                <a href="javascript:void(0);" class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                                <form class="d-inline">
                                                    <button class="waves-effect waves-float btn-sm waves-red text-black border-0"><i class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <a href="#">samsung</a>
                                        </td>
                                        <td>
                                            <span>smart-phone</span>
                                        </td>
                                        <td>
                                            <div>
                                                <span>1 day ago</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <span>1 day ago</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-btn d-flex">
                                                <a href="javascript:void(0);" class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                                <form class="d-inline">
                                                    <button class="waves-effect waves-float btn-sm waves-red text-black border-0"><i class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_plugins')
<!-- Jquery DataTable Plugin Js --> 
<script src="{{ asset('back/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('back/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('back/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('back/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('back/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('back/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('back/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
@endsection

@section('custom_js')
<script src="{{ asset('back/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
