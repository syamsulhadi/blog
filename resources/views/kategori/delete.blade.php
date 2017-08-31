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
                <div class="panel-heading">Table Kategori</div>
<table class="table table-bordered">
    <tr>

        <th width="80px">ID</th>
        <th>Name</th>
        <th width="140px" class="text-center">
            <a class="btn btn-success btn-sm" href="{{ route('kategori.create') }}">Add</a>
        </th>

    </tr>

@foreach ($posts as $post)

<tr>

    <td>{{ ++$i }}</td>
    <td>{{ $post->name }}</td>
    <td>

        <center><a class="btn btn-info btn-sm" href="{{ route('kategori.show',$post->id) }}">Show</a></center>

        <center><a class="btn btn-primary btn-sm" href="{{ route('blog.edit',$post->id) }}">Edit</a></center>

        {!! Form::open(['method' => 'DELETE','route' => ['kategori.destroy', $post->id],'style'=>'display:inline']) !!}

        <center><button type="submit" style="display: inline;" class="btn btn-danger btn-sm">Delete</button></center>

        {!! Form::close() !!}

    </td>

</tr>

@endforeach
