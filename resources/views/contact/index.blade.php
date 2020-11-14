@extends('layouts.back')

@section('title')
Contact
@endsection

@section('page_title')
All Contact Info
@endsection

@section('css_plugins')
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{ asset('back/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection

@section('breadcrumb')
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
    <li class="breadcrumb-item active">All Contact Info</li>
</ul>
@endsection

@section('top_btn')
<a href="#" class="btn btn-primary float-right" style="line-height: 22px; margin-right: 5px;">Reply</a>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $contact->name }} </td>
                                    <td> {{ $contact->email }} </td>
                                    <td> {{ $contact->subject }} </td>
                                    <td class="text-center"> 
                                        @if($contact->status == 0)
                                        <span class="badge badge-info">Unread</span>
                                        @else
                                        <span class="badge badge-primary">Read</span>
                                        @endif
                                    </td>
                                    <td> {{ $contact->created_at }} </td>
                                    
                                    <td>
                                        <div class="action-btn d-flex" style="width: 150px;">
                                            <a href="{{ route('contact.show', $contact->id) }}" class="waves-effect waves-float btn-sm waves-light-blue text-black mr-2"><i class="zmdi zmdi-eye" style="line-height: 1.8;"></i></a>
                                            <a href="{{ route('contact.reply', $contact->id) }}" class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i class="zmdi zmdi-mail-reply" style="line-height: 1.8;"></i></a>
                                            <form class="d-inline" action="{{ route('contact.delete', $contact->id) }}" method="POST">
                                                @csrf
                                                <button class="waves-effect waves-float btn-sm waves-red text-black border-0"><i class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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