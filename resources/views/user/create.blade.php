@extends('layouts.default')

@section('content')


{!! Form::open(array('route' => 'user.store','method'=>'POST')) !!}

     @include('user.form')

{!! Form::close() !!}

@endsection