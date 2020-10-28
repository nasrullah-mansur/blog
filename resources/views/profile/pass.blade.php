@extends('layouts.back')

@section('title')
Password change
@endsection

@section('page_title')
Password Change
@endsection

@section('css_plugins')
<link href="{{ asset('back/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection

@section('custom_css')
<style>
    .profile-edit form label {
        margin-bottom: 0;
        width: 215px;
        font-weight: bold;
        text-transform: capitalize;
    }

    @media (min-width: 992px) {
        .profile-edit .form-group .form-control {
            width: calc(100% - 215px);
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
                                        <div class="form-group d-lg-flex align-items-center">
                                            <label for="old-pass">old password</label>
                                            <input id="old-pass" type="password" class="form-control" placeholder="Old password">
                                        </div>
                                        <div class="form-group d-lg-flex align-items-center">
                                            <label for="new-pass">new password</label>
                                            <input id="new-pass" type="password" class="form-control" placeholder="New password">
                                        </div>
                                        <div class="form-group d-lg-flex align-items-center">
                                            <label for="new-pass-again">new password (again)</label>
                                            <input id="new-pass-again" type="password" class="form-control" placeholder="New password (again)">
                                        </div>
                                        <div class="form-group text-right">
                                            <button style="font-size: 14px;" class="btn btn-primary" type="submit">Update Password</button>
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
