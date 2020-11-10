@extends('layouts.back')

@section('title')
Blog List
@endsection

@section('page_title')
All Posts
@endsection

@section('css_plugins')
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{ asset('back/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection

@section('top_btn')
<a href="{{ route('post.create') }}" class="btn btn-primary float-right" style="line-height: 22px; margin-right: 5px;">Add New Post</a>
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
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Posted by</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Posted by</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach($posts->reverse() as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div style="width: 200px;">
                                            <a href="#">{{ $post->title }}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ url('front/images/post/', $post->image) }}" alt="Blog image" style="width: 200px; max-width: 200px; height: 100px; object-fit: cover;">
                                    </td>
                                    <td>
                                        <div style="width: 150px;">
                                            <a href="#"> {{ $post->category->name }} </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width: 100px; text-align: center;">
                                            <span>(32)</span>
                                        </div>
                                    </td>
                                    <td>
                                         <div style="width: 100px; text-align: center;">
                                            <span class="badge {{ $post->status == 1 ? 'badge-success' : 'badge-info'}}">{{ $post->status == 1 ? 'Published' : 'Unpublished'}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width: 120px; text-align: center;">
                                            <span>{{ $post->created_at->format('d/m/Y') }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width: 120px; text-align: center;">
                                            <span>{{ $post->updated_at->format('d/m/Y') }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="width:150px;">
                                            <span>{{ $post->user->profile->name }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action-btn d-flex" style="width: 150px;">
                                            <a href="{{ route('post.show', $post->id) }}" class="waves-effect waves-float btn-sm waves-light-blue text-black mr-2"><i class="zmdi zmdi-eye" style="line-height: 1.8;"></i></a>
                                            <a href="{{ route('post.edit', $post->id) }}" class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                            <form class="d-inline" action="{{ route('post.destroy', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
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
