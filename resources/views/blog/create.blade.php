@extends('layouts.default')

@section('content')

{!! Form::open(array('route' => 'blog.store','method'=>'POST')) !!}

     @include('blog.form')

{!! Form::close() !!}

@endsection