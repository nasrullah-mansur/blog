@extends('layouts.back')

@section('title')
Category List
@endsection

@section('page_title')
Category
@endsection

@section('css_plugins')
<link rel="stylesheet" href="{{ asset('back/plugins/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('back/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row clearfix">

        <div class="col-sm-4">
            <div class="card">
                <div class="body">
                    <form id="form" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name">Category name (max 55 characters)</label>
                                    <input id="name" rows="4" class="form-control no-resize"
                                        placeholder="Please type what you want..." name="name"
                                        value="{{ old('name') }}">
                                    <small><span id="title-count">0</span> of 55</small>
                                    @if($errors->has('name'))
                                    <span style="color: red;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="form-group">

                                    <label for="slug">Category slug</label>
                                    <input id="slug" rows="4" class="form-control no-resize" name="slug"
                                        value="{{ old('slug') }}">
                                    @if($errors->has('slug'))
                                    <span style="color: red;">{{ $errors->first('slug') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name-under" class="d-block">Category under</label>
                                    <select class="form-control show-tick show-tick ms select2"
                                        data-placeholder="Select" name="p_id">
                                        <option value="0">--None--</option>
                                        @if(count($cats)>0)
                                        @foreach($cats as $cat)
                                        <option value="{!! $cat->id !!}">{!! $cat->name !!}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-3 text-right">
                                <button class="btn btn-primary" type="submit">Save Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                                    <td>{!! $count++ !!}</td>
                                    <td>{!! $cat->name !!}</td>
                                    <td>{!! $cat->slug !!}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('category.edit', $cat->id) }}"
                                            class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i
                                                class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                        <form class="d-inline" method="POST"
                                            action="{{ route('category.destroy', $cat->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="waves-effect waves-float btn-sm waves-red text-black border-0"><i
                                                    class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @foreach($cat->childs as $subcat)
                                <tr>
                                    <td>{!! $count++ !!}</td>
                                    <td> - {!! $subcat->name !!}</td>
                                    <td>{!! $subcat->slug !!}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('category.edit', $subcat->id) }}"
                                            class="waves-effect waves-float btn-sm waves-green text-black mr-2"><i
                                                class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                        <form class="d-inline" method="POST"
                                            action="{{ route('category.destroy', $subcat->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="waves-effect waves-float btn-sm waves-red text-black border-0"><i
                                                    class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
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
                                        <a href="{{ route('category.edit', $cat->id) }}"
                                            class="waves-effect waves-float btn-sm waves-green text-black mr-2 edit-btn"><i
                                                class="zmdi zmdi-edit" style="line-height: 1.8;"></i></a>
                                        <form class="d-inline" method="POST"
                                            action="{{ route('category.destroy', $cat->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="waves-effect waves-float btn-sm waves-red text-black border-0"><i
                                                    class="zmdi zmdi-delete" style="line-height: 1.8;"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4" style="text-align: center;">No Category Found</td>
                                </tr>
                                @endif

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

<script src="{{ asset('back/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
<script src="{{ asset('back/js/pages/tables/jquery-datatable.js') }}"></script>

<script>
    $("#name").on('keyup blur', function () {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
        $("#slug").val(Text);

        let titleLength = $(this).val().length;
        $('#title-count').text(titleLength);

    });
    $("#slug").on('blur', function () {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
        $("#slug").val(Text);
    });


    // Select2 selectbox
    $(function () {
        $('.select2').select2();
        $(".search-select").select2({
            allowClear: true
        });
        $("#max-select").select2({
            placeholder: "Select",
            maximumSelectionSize: 2,
        });
        $("#loading-select").select2({
            placeholder: "Select",
            minimumInputLength: 1,
            query: function (query) {
                var data = {
                        results: []
                    },
                    i, j, s;
                for (i = 1; i < 5; i++) {
                    s = "";
                    for (j = 0; j < i; j++) {
                        s = s + query.term;
                    }
                    data.results.push({
                        id: query.term + i,
                        text: s
                    });
                }
                query.callback(data);
            }
        });
        var data = [{
            id: 0,
            tag: 'enhancement'
        }, {
            id: 1,
            tag: 'bug'
        }, {
            id: 2,
            tag: 'duplicate'
        }, {
            id: 3,
            tag: 'invalid'
        }, {
            id: 4,
            tag: 'wontfix'
        }];

        function format(item) {
            return item.tag;
        }
        $("#array-select").select2({
            placeholder: "Select",
            data: {
                results: data,
                text: 'tag'
            },
            formatSelection: format,
            formatResult: format
        });
    });

</script>
@endsection
