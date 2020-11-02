@extends('layouts.back')

@section('title')
Our Profile
@endsection

@section('page_title')
Our Profile
@endsection

@section('css_plugins')

@endsection

@section('top_btn')
<a href="{{ route('user.create') }}" class="btn btn-primary float-right" style="line-height: 22px; margin-right: 5px;">Add User</a>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        @foreach($users as $user)
        <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="card mcard_3">
                <div class="body position-relative">
                    <ul class="header-dropdown" style="list-style: none; position: absolute; right: 15px; top: 15px;">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-edit"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{ route('user.edit', $user->id) }}">Edit</a></li>
                                <li><a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a></li>
                                <form id="delete-form" action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </ul>
                        </li>
                    </ul>
                    <img src="{{ asset('back/images/profile_av.jpg') }}" class="rounded-circle" alt="profile-image">
                    <h4 class="m-t-10">{{ ucfirst($user->username) }}</h4>
                    <a href="#">{{ $user->email }}</a>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <ul class="social-links list-unstyled">
                                <li><a href="#" title="facebook"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li><a href="#" title="twitter"><i class="zmdi zmdi-twitter-box"></i></a></li>
                                <li><a href="#" title="instagram"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-5 text-left">
                            <small>User Role</small>
                            <p>Supper Admin</p>
                        </div>
                        <div class="col-7 text-right">
                            <small>Phone</small>
                            <p><a class="text-black" href="#">01728619733</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        

        
        <div class="col-12">
            <div class="card">
                {{ $users->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Attention Please</h4>
            </div>
            <div class="modal-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_plugins')

@endsection
