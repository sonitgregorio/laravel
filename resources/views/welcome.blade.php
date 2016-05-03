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
                                                <input type="text" class="form-control"  name="fname" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Middle Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Confiirm Password</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="" value="">
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/" class="btn btn-success">Reset</a>
                                            <button type="submit" class="btn btn-primary" name="button">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <center>
                                <p>
                                    All Right Reserved 2016
                                </p>
                            </center>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    @stop
