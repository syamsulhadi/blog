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
                <h2>Show Post</h2>
                <table class="table table-bordered">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $post->ID}}
                </div>
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $post->name}} 
                </div>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>