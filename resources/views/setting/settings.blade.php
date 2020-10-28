@extends('layouts.back')

@section('title')
Theme Setting
@endsection

@section('page_title')
Theme Setting
@endsection

@section('css_plugins')
<link href="{{ asset('back/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection

@section('custom_css')
<style>
    .profile-edit .form label {
        margin-bottom: 0;
        width: 210px;
        font-weight: bold;
        text-transform: capitalize;
    }

    @media (min-width: 992px) {
        .profile-edit .form-group .form-control {
            width: calc(100% - 210px);
        }
    }


    @media (min-width: 992px) {
        .profile-edit .row .form-group .form-control {
            width: 100%;
        }
    }



    .profile-edit .row.with-control label {
        width: 100%;
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
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs mb-3 px-0 nav-tabs-success" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                href="#profile-info">INFORMATION</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                href="#profile-contact">CONTACT</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                href="#profile-property">PROPERTY</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                href="#profile-config">CONFIG</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane in active" id="profile-info">
                                            <div class="form">
                                                <div class="form-group d-lg-flex align-items-center">
                                                    <label for="name">Company Name</label>
                                                    <input id="name" type="text" class="form-control"
                                                        placeholder="Company name">
                                                </div>
                                                <div class="form-group d-lg-flex align-items-center">
                                                    <label for="web-name">Website name</label>
                                                    <input id="web-name" type="text" class="form-control"
                                                        placeholder="Website name">
                                                </div>
                                                <div class="form-group d-lg-flex align-items-center">
                                                    <label for="web-url">Website URl</label>
                                                    <input id="web-url" type="text" class="form-control"
                                                        placeholder="Website URl">
                                                </div>
                                                <div class="form-group d-lg-flex align-items-start">
                                                    <label for="site-des">Site description</label>
                                                    <textarea rows="4" class="form-control no-y" id="site-des"
                                                        placeholder="Site description"></textarea>
                                                </div>
                                                <div class="form-group d-lg-flex align-items-start">
                                                    <label for="site-meta">Meta keyword</label>
                                                    <textarea rows="4" class="form-control no-y" id="site-meta"
                                                        placeholder="Meta keyword"></textarea>
                                                </div>
                                                <div class="form-group d-lg-flex align-items-start">
                                                    <label for="copyright">Copyright</label>
                                                    <textarea rows="4" class="form-control no-y" id="copyright"
                                                        placeholder="Copyright"></textarea>
                                                </div>

                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="profile-contact">
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label for="street">Street</label>
                                                    <input id="street" type="text" class="form-control"
                                                        placeholder="Street">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="city">city</label>
                                                    <input id="city" type="text" class="form-control"
                                                        placeholder="city">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="pos-code">Postal code</label>
                                                    <input id="pos-code" type="number" class="form-control"
                                                        placeholder="Postal code">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="state">State</label>
                                                    <input id="state" type="text" class="form-control"
                                                        placeholder="State">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="country">Country</label>
                                                    <input id="country" type="text" class="form-control"
                                                        placeholder="Country">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="email">Email</label>
                                                    <input id="email" type="email" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="phone">phone</label>
                                                    <input id="phone" type="number" class="form-control"
                                                        placeholder="phone">
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="site">Address</label>
                                                    <textarea rows="4" class="form-control no-y" id="site"
                                                        placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="profile-property"></div>

                                        <div role="tabpanel" class="tab-pane" id="profile-config">
                                            <div class="row with-control">
                                                <div class="col-12 mb-3">
                                                    <div class="input-group appendable">
                                                        <label class="mt-2" for="google-id">Google Analytics ID</label>
                                                        <div class="input-group-prepend"> 
                                                            <span class="input-group-text"><i class="zmdi zmdi-google-glass"></i></span>
                                                        </div>
                                                        <input id="google-id" type="text" class="form-control timepicker" placeholder="Google Analytics ID" data-dtp="dtp_5l6aS">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="input-group appendable">
                                                        <label class="mt-2" for="publish-id">Publisher ID</label>
                                                        <div class="input-group-prepend"> 
                                                            <span class="input-group-text"><i class="zmdi zmdi-google-glass"></i></span>
                                                        </div>
                                                        <input id="publish-id" type="text" class="form-control timepicker" placeholder="Publisher ID" data-dtp="dtp_5l6aS">
                                                    </div>
                                                </div>
                                                        <div class="form-group col-12">
                                                        <label for="google-map">Google map</label>
                                                        <textarea rows="4" class="form-control no-y" id="google-map"
                                                            placeholder="Google map"></textarea>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <button style="font-size: 14px;" class="btn btn-primary"
                                                type="submit">Update Information</button>
                                        </div>
                                    </div>
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
