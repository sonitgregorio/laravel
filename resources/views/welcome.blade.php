    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="content">
                <div class="panel">
                    <div class="panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h1>Laravel 5.2</h1>
                            </div>
                        </div>
                            <div class="panel-body">
                                <div class="col-md-8 col-md-offset-2">
                                    @if (session('success'))
                                        <div class="flash-message">
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        </div>
                                    @endif

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form class="form-horizontal" action="/insert_data" method="post">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"  name="firstname" value="{{ old('firstname')}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Middle Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="middlename" value="{{ old('middlename')}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="username" value="{{ old('username')}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Confiirm Password</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="cpassword" value="">
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/" class="btn btn-success">Reset</a>
                                            <button type="submit" class="btn btn-primary" name="button">Save</button>
                                        </div>
                                    </form>
                                   
                                    <div class="table table-responsive">
                                     <br />  
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr class="navbar-inverse" style="color:white;text-align:center">
                                                    <td>First Name</td>
                                                    <td>Middle Name</td>
                                                    <td>Last Name</td>
                                                    <td>Username</td>
                                                    <td>Password</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($data as $key)
                                                <tr>
                                                    <td>{{ $key->fname }}</td>   
                                                    <td>{{ $key->lname }}</td>
                                                    <td>{{ $key->mname }}</td>
                                                    <td>{{ $key->username }}</td>
                                                    <td>{{ $key->password }}</td>
                                                    <td style="text-align: center">
                                                        <a href="" class="btn btn-primary btn-xs">Edit&nbsp;<span class="glyphicon glyphicon-pencil"></span></a>
                                                        <a href="" class="btn btn-danger btn-xs">Delete&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <center>
                                <p>
                                    All Right Reserved &copy;2016
                                </p>
                            </center>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    @stop
