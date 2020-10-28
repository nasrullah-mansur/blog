@extends('layouts.back')

@section('title')
Blog Create
@endsection

@section('page_title')
Create a new blog
@endsection

@section('css_plugins')
<link href="{{ asset('back/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('back/plugins/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('back/plugins/summernote/dist/summernote.css') }}"/>
<link rel="stylesheet" href="{{ asset('back/plugins/select2/select2.css') }}"/>
<!-- Bootstrap Tagsinput Css -->
<link rel="stylesheet" href="{{ asset('back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <!-- Basic Validation -->
    <div class="container-fluid">
        <form action="" method="POST" id="" enctype="multipart/form-data">
        @csrf
            <div class="card">
                <div class="body">
                    <div class="form-group">
                        <label for="blog-title">Blog title (max 160 characters)</label>
                        <textarea id="blog-title" rows="4" class="form-control no-resize" placeholder="Please type what you want..." name="title"></textarea>
                        <small><span id="title-count">0</span> of 160</small>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <label>Blog category</label>
                    <select class="form-control" name="category" required>
                        <option value="" disabled>Please select one</option>
                        <option value="">web design</option>
                        <option value="">web development</option>
                        <option value="">digital marketing</option>
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <label>Yor blog content here</label>
                    <textarea name="description" class="summernote" name="content"></textarea>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <label>Blog image</label>
                    <input name="image" type="file" class="dropify">
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <label for="img-alt">Image alternative</label>
                    <div class="form-group">
                        <input name="alt" type="text" id="img-alt" class="form-control" placeholder="Img alternative here">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <label for="slag-input">Slag</label>
                    <div class="form-group">
                        <input name="slag" type="text" id="slag-input" class="form-control" placeholder="Post slag here">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <label for="tags">Tags</label>
                    <div class="form-group">
                        <!-- <input name="tags" type="text" id="tags" data-role="tagsinput" class="form-control" placeholder="Tags for blog"> -->
                        <select class="form-control show-tick ms select2" multiple data-placeholder="Select">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <div class="form-group mb-0">
                    <div class="radio">
                        <input type="radio" name="status" id="radio1" value="option1">
                        <label for="radio1">Save for review</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="status" id="radio2" value="option2" checked="">
                        <label for="radio2">Publish post</label>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="body">
                    <div class="form-group mb-0">
                        <div class="form-line">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js_plugins')
<script src="{{ asset('back/plugins/jquery-validation/jquery.validate.js') }}"></script>
<!-- Jquery Validation Plugin Css -->
<script src="{{ asset('back/plugins/jquery-steps/jquery.steps.js') }}"></script> <!-- JQuery Steps Plugin Js -->
<script src="{{ asset('back/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="{{ asset('back/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
@endsection

@section('custom_js')
<script src="{{ asset('back/js/pages/forms/form-validation.js') }}"></script>
<script src="{{ asset('back/js/pages/forms/dropify.js') }}"></script>
<script src="{{ asset('back/plugins/summernote/dist/summernote.js') }}"></script>
<script>
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
            var data = {results: []}, i, j, s;
            for (i = 1; i < 5; i++) {
                s = "";
                for (j = 0; j < i; j++) {s = s + query.term;}
                data.results.push({id: query.term + i, text: s});
            }
            query.callback(data);
        }
    });
    var data=[{id:0,tag:'enhancement'},{id:1,tag:'bug'},{id:2,tag:'duplicate'},{id:3,tag:'invalid'},{id:4,tag:'wontfix'}];
    function format(item) { return item.tag; }
    $("#array-select").select2({
        placeholder: "Select",
        data:{ results: data, text: 'tag' },
        formatSelection: format,
        formatResult: format
    });
});
</script>
@endsection
