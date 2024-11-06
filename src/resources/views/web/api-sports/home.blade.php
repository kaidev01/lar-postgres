@extends('web.layout')
@section('content')
    <div class="as-wrapper-test">
        <h2>
            Sport
        </h2>
        <div>
            <ul>
                <li><a href="{{ route('web.home') }}">Home</a></li>
                <li><a href="{{ route('web.livescore') }}">Livescore</a></li>
                <li><a href="{{ route('web.match_detail') }}">Match detail</a></li>
                <li><a href="{{ route('web.match_detail_basketball') }}">Match detail Basketball</a></li>
                <li><a href="{{ route('web.match_detail_tennis') }}">Match detail Tennis</a></li>
                <li><a href="{{ route('web.result') }}">Result</a></li>
                <li><a href="{{ route('web.schedule') }}">Schedule</a></li>
                <li><a href="{{ route('web.standing') }}">Standing</a></li>
            </ul>
        </div>
    </div>
    </div>
@endsection
@push('assets')
    @vite(['resources/scss/home.scss'])
@endpush
