@extends('web.layout')
@section('content')
    <div class="main">
        <a href="{{ route('web.testDB') }}">Test DB</a>
        <a href="{{ route('web.testRedis') }}">Test Redis</a>
    </div>
@endsection
