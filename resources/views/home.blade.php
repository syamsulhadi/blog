@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-heading">
                <div class="panel-default">
                    <div class="panel-heading">Menu</div>
                        <ul>
                        <a href="user"><li>User</li></a>
                        <a href="kategori"><li>Kategori</li></a>
                        <a href="blog"><li>Blog</li></a>
                        </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
        <div class="panel panel-heading">
            <div class="panel-default">
                <div class="panel-heading">Welcome to Blog!</div>
            </div>
        </div>                            
        </div>
    </div>
</div>
@endsection
