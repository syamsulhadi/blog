@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-heading">
                <div class="panel-default">
                    <div class="panel-heading">Menu</div>
                        <a href=""><li>User</li></a>
                        <a href=""><li>Kategori</li></a>
                        <a href=""><li>Blog</li></a>
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
            {!! Form::model($post, ['method' => 'PATCH','route' => ['blog.update', $post->id]]) !!}

                @include('blog.form')

            {!! Form::close() !!}
            </div>
        </div>
        </div>
    </div>
</div>