@extends('layouts.app')

@section('main-content')
    {{ dump($comics) }}

    @include('partials._card')
@endsection
