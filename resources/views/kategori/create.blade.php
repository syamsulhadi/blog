@extends('layouts.default')

@section('content')

{!! Form::open(array('route' => 'kategori.create','method'=>'POST')) !!}

     @include('kategori.form')

{!! Form::close() !!}

@endsection