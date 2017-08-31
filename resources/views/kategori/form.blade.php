@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-heading">
                <div class="panel-default">
                    <div class="panel-heading">Menu</div>
                        <a href="user"><li>User</li></a>
                        <a href="kategori"><li>Kategori</li></a>
                        <a href="blog"><li>Blog</li></a>
                </div>
            </div>
        </div>
        <div class="col-md-10">
        <div class="panel panel-heading">
            <div class="panel-default">
                <div class="panel-heading">Welcome to Blog!</div>
            </div>
        </div>                            
        </div>
        <div class="col-md-10">
        <div class="panel panel-heading">
            <div class="panel-default">
                <div class="panel-heading">Table Edit</div>
                <div class="form-group">

                    <strong>ID:</strong>

                    {!! Form::text('ID', null, array('placeholder' => 'ID','class' => 'form-control')) !!}

                </div>
                <div class="form-group">

                    <strong>Name:</strong>

                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                <button type="submit" href="kategori" class="btn btn-primary">Submit</button>
                </div>
    </div>
</div>