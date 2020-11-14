@extends('layouts.back')

@section('title')
Dashboard
@endsection

@section('page_title')
Blog Dashboard
@endsection

@section('custom_css')

<style>
    .report-item {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        /* background-color: rgba(70, 182, 254, .5); */
        background-color: #fff;
        padding: 5px;
        border-radius: 5px;
        box-shadow: 0 0 15px #ddd;
    }

    .report-item i {
        width: 60px;
        height: 60px;
        display: inline-block;
        background-color: rgba(70, 182, 254, .5);
        line-height: 60px;
        text-align: center;
        color: #fff;
        font-size: 32px;
        border-radius: 5px;
        margin-right: 15px;
    }

    .report-item .text span {
        display: block;
        font-size: 14px;
        text-transform: capitalize;
    }

    .report-item.two i {
        background-color: rgba(111, 66, 193, .5);
    }
    .report-item.three i {
        background-color: rgba(4, 190, 91, .5);
    }
        .report-item.four i {
        background-color: #ef6f6c;
    }
    .report-item.five i {
        background-color: #20c997;
    }
    .report-item.six i {
        background-color: #67C5Df;
    }
    .report-item.seven i {
        background-color: #ffc107;
    }
    .report-item.eight i {
        background-color: rgba(255, 77, 171, .5);
    }
</style>

@endsection

@section('css_plugins')
<link rel="stylesheet" href="{{asset('back/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('back/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection


@section('breadcrumb')
<ul class="breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
</ul>
@endsection


@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="report-item">
                <div class="icon">
                    <i class="zmdi zmdi-collection-text"></i>
                </div>
                <div class="text">
                    <span>posts</span>
                    <strong>{{ $post_count }}</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="report-item two">
                <div class="icon"> 
                    <i class="ti-book"></i>
                </div>
                <div class="text">
                    <span>pages</span>
                    <strong>4</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="report-item three">
                <div class="icon">
                <i class="ti-tag"></i>
                </div>
                <div class="text">
                    <span>categories</span>
                    <strong>{{ $category_count }}</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="report-item four">
                <div class="icon">
                    <i class="ti-pin2"></i>
                </div>
                <div class="text">
                    <span>tags</span>
                    <strong>{{ $tag_count }}</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="report-item five">
                <div class="icon">
                <i class="zmdi zmdi-accounts-outline"></i>
                </div>
                <div class="text">
                    <span>Users</span>
                    <strong>{{ $user_count }}</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="report-item six">
                <div class="icon">
                <i class="zmdi zmdi-tv-list"></i>
                </div>
                <div class="text">
                    <span>visitors</span>
                    <strong>1200</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="report-item seven">
                <div class="icon">
                    <i class="zmdi zmdi-notifications-none"></i>
                </div>
                <div class="text">
                    <span>Subscribers</span>
                    <strong>{{ $subscriber_count }}</strong>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="report-item eight">
                <div class="icon">
                    <i class="zmdi zmdi-book-image"></i>
                </div>
                <div class="text">
                    <span>Galleries</span>
                    <strong>{{ $gallery_count }}</strong>
                </div>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="most-visited-page">
                <div class="card h-100">
                    <div class="header">
                        <h2>Most Visited Posts</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Post</th>
                                        <th>Views</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Post</th>
                                        <th>Views</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Laravel is a web application framework with expressive.</a>
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Laravel is a web application framework with expressive.</a>
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Laravel is a web application framework with expressive.</a>
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Laravel is a web application framework with expressive.</a>
                                        </td>
                                        <td>123</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="most-visited-page">
                <div class="card h-100">
                    <div class="header">
                        <h2>Recent posts</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Post</th>
                                        <th>Views</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Post</th>
                                        <th>Views</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Laravel is a web application framework with expressive.</a>
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Laravel is a web application framework with expressive.</a>
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Laravel is a web application framework with expressive.</a>
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Laravel is a web application framework with expressive.</a>
                                        </td>
                                        <td>123</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="most-visited-country">
                <div class="card h-100">
                    <div class="header">
                        <h2>Session by country</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Post</th>
                                        <th>Views</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Post</th>
                                        <th>Views</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Bangladesh
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Pakistan
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            India
                                        </td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Saudi arabia
                                        </td>
                                        <td>123</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h100">
                <div class="header">
                    <h2>Quick contact</h2>
                </div>
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{ route('quickMail') }}" method="POST">
                                @csrf
                                <div class="form-group">                                
                                    <input type="email" id="email_address" class="form-control" placeholder="To:" name="email" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">                                
                                    <input type="text" class="form-control" placeholder="Subject" name="subject" value="{{ old('subject') }}">
                                    @if($errors->has('subject'))
                                    <span style="color: red;">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea name="content" rows="4" class="form-control no-resize" placeholder="Please type what you want...">{{ old('content') }}</textarea>
                                    @if($errors->has('content'))
                                    <span style="color: red;">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">SENT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

</div>
@endsection
