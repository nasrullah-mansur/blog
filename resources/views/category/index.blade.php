@extends('layouts.back')

@section('title')
Category List
@endsection

@section('page_title')
Category
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
            <div class="col-lg-4">
                <form action="{{ route('category.store') }}" method="POST" id="" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="name">Category name (max 55 characters)</label>
                                        <input id="name" rows="4" class="form-control no-resize"
                                            placeholder="Please type what you want..." name="name">
                                        <small><span id="title-count">0</span> of 55</small>
                                        @if($errors->has('name'))
                                        <span style="color: red;">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <label for="slug">Category slug</label>
                                        <input id="slug" rows="4" class="form-control no-resize" name="slug">
                                        @if($errors->has('slug'))
                                        <span style="color: red;">{{ $errors->first('slug') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-3 mt-3">
                                    <label for="name-under d-block">Category under</label>
                                    <select class="form-control show-tick" name="p_id">
                                        <option value="0">--None--</option>
                                        @if(count($cats)>0)
                                        @foreach($cats as $cat)
                                        <option value="{!! $cat->id !!}">{!! $cat->name !!}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>slug</th>
                                    <th style="text-align: left;">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>slug</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php
                                $count = 1;
                                @endphp
                                @if(count($cats)>0)
                                @foreach($cats as $cat)
                                @if($cat->childs->count()>0)
                                <tr>
                                    <td>{!! $loop->iteration !!}</td>
                                    <td>{!! $cat->name !!}</td>
                                    <td>{!! $cat->slug !!}</td>
                                    <td class="d-flex">
                                        <a href="javascript:void(0);" class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                        <form class="d-inline" method="POST" action="{{ route('category.destroy', $cat->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="waves-effect waves-float btn-sm waves-red text-black border-0"><i class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @foreach($cat->childs as $subcat)
                                <tr>
                                    <td>{!! $loop->iteration !!} . {{ $count++ }}</td>
                                    <td> - {!! $subcat->name !!}</td>
                                    <td>{!! $subcat->slug !!}</td>
                                    <td class="d-flex">
                                        <a href="javascript:void(0);" class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                        <form class="d-inline" method="POST" action="{{ route('category.destroy', $subcat->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="waves-effect waves-float btn-sm waves-red text-black border-0"><i class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else

                                <tr>
                                    <td>{!! $loop->iteration !!}</td>
                                    <td>{!! $cat->name !!}</td>
                                    <td>{!! $cat->slug !!}</td>
                                    <td class="d-flex">
                                        <a href="javascript:void(0);" class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                        <form class="d-inline" method="POST" action="{{ route('category.destroy', $cat->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="waves-effect waves-float btn-sm waves-red text-black border-0"><i class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4">No Category Found</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
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
<script>
    $("#name").on('keyup blur',function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text);
        
        let titleLength = $(this).val().length;
        $('#title-count').text(titleLength);

    });
    $("#slug").on('blur',function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text);
    });


</script>
@endsection
