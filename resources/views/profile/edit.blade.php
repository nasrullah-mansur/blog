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
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs mb-3 px-0 nav-tabs-success" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#profile-setting">SETTING</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile-photo">PHOTO</a></li>
                            </ul>
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane in active" id="profile-setting">
                                    <form>
                                        <div class="form-group d-lg-flex align-items-center">
                                            <label for="name">name</label>                     
                                            <input id="name" type="text" class="form-control" placeholder="Name">                                    
                                        </div>
                                        <div class="form-group d-lg-flex align-items-center">
                                            <label for="username">Username</label>                     
                                            <input id="username" type="text" class="form-control" placeholder="Username">                                    
                                        </div>
                                        <div class="form-group d-lg-flex align-items-center">
                                            <label for="email">Email</label>                     
                                            <input id="email" type="email" class="form-control" placeholder="Email">                                    
                                        </div>
                                        <div class="form-group d-lg-flex align-items-center">
                                            <label for="occupation">Occupation</label>                     
                                            <input id="occupation" type="text" class="form-control" placeholder="Occupation">                                    
                                        </div>
                                        <div class="form-group d-lg-flex align-items-start">
                                            <label for="about">About</label>                     
                                            <textarea id="about" rows="4" class="form-control no-y" placeholder="About"></textarea>                                    
                                        </div>
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
                                        <div class="form-group text-right">
                                            <select class="form-control">
                                                <option disabled value="">Disabled</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                            </select>                             
                                        </div>
                                        <div class="form-group text-right">
                                            <button style="font-size: 14px;" class="btn btn-primary" type="submit">Update Profile</button>                              
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile-photo"> <b>Photo Content</b>
                                    <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel. </p>
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
