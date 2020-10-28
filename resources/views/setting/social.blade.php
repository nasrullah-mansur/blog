@extends('layouts.back')

@section('title')
My profile
@endsection

@section('page_title')
My Profile
@endsection

@section('css_plugins')
<link href="{{ asset('back/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection

@section('custom_css')
<style>
    .profile-edit form label {
        margin-bottom: 0;
        width: 120px;
        font-weight: bold;
        text-transform: capitalize;
    }

    @media (min-width: 992px) {
        .profile-edit .form-group .form-control {
            width: calc(100% - 120px);
        }
    }

    .profile-edit .input-group-prepend {
        width: 50px;
        display: block;
    }

    .profile-edit .input-group-prepend i {
        display: block;
        line-height: 35px;
        margin-left: 7px;
    }

</style>
@endsection


@section('content')
<div class="container-fluid">

    <!-- Tabs With Icon Title -->
    <div class="row clearfix profile-edit">
        <div class="col-sm-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <form>
                                    <div class="input-group appendable mb-3">
                                            <label class="mt-2" for="facebook">Facebook</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-facebook"></i></span>
                                            </div>
                                            <input id="facebook" type="text" class="form-control timepicker" placeholder="https://www.facebook.com" data-dtp="dtp_5l6aS">
                                        </div>
                                        <div class="input-group appendable mb-3">
                                            <label class="mt-2" for="twitter">Twitter</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-twitter"></i></span>
                                            </div>
                                            <input id="twitter" type="text" class="form-control timepicker" placeholder="https://www.twitter.com" data-dtp="dtp_5l6aS">
                                        </div>
                                        <div class="input-group appendable mb-3">
                                            <label class="mt-2" for="linkdin">Linkedin</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-linkedin"></i></span>
                                            </div>
                                            <input id="linkdin" type="text" class="form-control timepicker" placeholder="https://www.linkedin.com" data-dtp="dtp_5l6aS">
                                        </div>
                                        <div class="input-group appendable mb-3">
                                            <label class="mt-2" for="youtube">Youtube</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-youtube"></i></span>
                                            </div>
                                            <input id="youtube" type="text" class="form-control timepicker" placeholder="https://www.youtube.com" data-dtp="dtp_5l6aS">
                                        </div>
                                        <div class="input-group appendable mb-3">
                                            <label class="mt-2" for="instragram">Instagram</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-instagram"></i></span>
                                            </div>
                                            <input id="instragram" type="text" class="form-control timepicker" placeholder="https://www.instagram.com" data-dtp="dtp_5l6aS">
                                        </div>
                                        <div class="input-group appendable mb-3">
                                            <label class="mt-2" for="pinterest">Pintarest</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-pinterest"></i></span>
                                            </div>
                                            <input id="pinterest" type="text" class="form-control timepicker" placeholder="https://www.pinterest.com" data-dtp="dtp_5l6aS">
                                        </div>
                                        <div class="form-group text-right">
                                            <button style="font-size: 14px;" class="btn btn-primary" type="submit">Update Social Links</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_plugins')
<script src="{{ asset('back/js/pages/forms/basic-form-elements.js') }}"></script>
@endsection
