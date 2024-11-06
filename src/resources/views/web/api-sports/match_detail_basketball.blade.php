@extends('web.layout')
@section('content')
    <div class="as-wrapper-test">
        <h2>
            <a href="{{ route('web.home') }}">Home</a>
            match_detail_basketball
        </h2>
        <div>
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essenti
        </div>
    </div>
    </div>
@endsection
@push('assets')
    @vite(['resources/scss/match_detail_basketball.scss'])
@endpush
