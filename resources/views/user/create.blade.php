@extends('layouts.back')

@section('title')
User Create
@endsection

@section('page_title')
Create a new user
@endsection

@section('css_plugins')

@endsection


@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-6 m-auto col-sm-12">
            <div class="card">
            <div class="body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control  @error('username') is-invalid @enderror"
                            placeholder="Username" name="username" value="{{ old('username') }}" required
                            autocomplete="name" autofocus>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror"
                            placeholder="Enter email" name="email" value="{{ old('email') }}" required
                            autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            placeholder="Password" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirm password"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group mb-3">
                        <div class="radio">
                            <input type="radio" id="blogger" name="role" value="2" checked>
                            <label for="blogger">Blogger</label>

                            <input type="radio" id="administrator" name="role" value="3">
                            <label for="administrator">Administrator</label>
                        </div>
                    </div>
                    <button type="submit"
                        class="btn btn-primary btn-block waves-effect waves-light">Create user</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('custom_js')
<script>
    // Password show hide;
let allPassArea = document.querySelectorAll('input[type="password"');
allPassArea.forEach(function (value) {
    value.style.cssText = 'width: 100%; ';
    // Icon Class name;
    let openEyeClassName = 'zmdi zmdi-eye';
    let closeEyeClassName = 'zmdi zmdi-eye-off'; 
    let passArea = document.createElement('div');
    passArea.classList.add('password_area');
    let eyeOn = document.createElement('i');
    eyeOn.setAttribute('class', openEyeClassName);
    passArea.appendChild(value.cloneNode(true));
    value.parentNode.replaceChild(passArea, value);
    passArea.appendChild(eyeOn);
    eyeOn.addEventListener('click', function (e) {
        if (e.target.classList.value == openEyeClassName) {
            this.setAttribute('class', closeEyeClassName);
            this.previousSibling.setAttribute('type', 'text');
        } else if (e.target.classList.value == closeEyeClassName) {
            this.setAttribute('class', openEyeClassName);
            this.previousSibling.setAttribute('type', 'password');
        }
    });

// CSS;
passArea.style.cssText = 'position: relative;';
eyeOn.style.cssText = 'position: absolute; z-index: 1; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer; color: #666;';

});
</script>
@endsection