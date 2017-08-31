@extends('layouts.default')

@section('content')

        
            {!! Form::model($post, ['method' => 'PATCH','route' => ['user.update', $post->id]]) !!}

            @include('user.form')

            {!! Form::close() !!}
        
@endsection