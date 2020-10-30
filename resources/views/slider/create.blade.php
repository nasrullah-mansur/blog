@extends('layouts.back')

@section('title')
Banner Slider Create
@endsection

@section('page_title')
Banner Slider Create
@endsection

@section('css_plugins')
<link rel="stylesheet" href="{{ asset('back/plugins/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('back/plugins/summernote/dist/summernote.css') }}"/>
@endsection


@section('content')
<div class="container-fluid">
    <!-- Exportable Table -->
    <form action="{{ isset($slider) ? route('slider.update', $slider->id) : route('slider.store') }}" method="POST" enctype="multipart/form-data">
        
        @csrf
        @if(isset($slider))
            @method('PUT')
        @endif
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Slider Image</h2>
                    </div>
                    <div class="body">
                        <input type="file" class="dropify" name="image" data-default-file="{{ isset($slider) ? url('front/images/slider', $slider->image) : '' }}">
                        @if($errors->has('image'))
                        <span style="color: red;">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Your Slider Content Here</h2>
                    </div>
                    <div class="body">
                        <textarea class="summernote" name="text">
                            {{ isset($slider) ? $slider->text : old('text') }}
                        </textarea>
                        @if($errors->has('text'))
                        <span style="color: red;">{{ $errors->first('text') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Item Status</h2>
                    </div>
                    <div class="body">
                        <div class="radio">
                            <input type="radio" name="status" id="radio1" value="1">
                            <label for="radio1">Active</label>
                        
                            <input type="radio" name="status" id="radio2" value="2">
                            <label for="radio2">Inactive</label>
                        </div>
                    </div>
                    @if($errors->has('status'))
                    <span style="color: red;">{{ $errors->first('status') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <button class="btn btn-primary" type="submit">Save Slider</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js_plugins')
<script src="{{ asset('back/plugins/dropify/js/dropify.min.js') }}"></script>
@endsection

@section('custom_js')
<script src="{{ asset('back/js/pages/forms/dropify.js') }}"></script>
<script src="{{ asset('back/plugins/summernote/dist/summernote.js') }}"></script>
@endsection
