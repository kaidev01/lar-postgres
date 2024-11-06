@extends('web.layout')
@section('content')
    <div class="main">
        <a href="{{ route('web.testDB') }}">Test DB</a>
        <a href="{{ route('web.testRedis') }}">Test Redis</a>
        <a href="{{ route('web.tennis') }}">tennis</a>
        <a href="{{ route('web.football') }}">football</a>
        <a href="{{ route('web.basketball') }}">basketball</a>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
