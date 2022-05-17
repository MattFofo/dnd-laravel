@extends('templates.base')

@section('pageTitle', 'Details - {{ $monster->name }}')

@section('content')
    <main>
        <h1>{{ $monster->name }}</h1>
    </main>
@endsection


