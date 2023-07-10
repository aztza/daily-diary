@extends('main')

@section('content')
    <div class="container">
        <div class="row shadow-lg mt-3">
            <a href="{{route('read#diary')}}" class="text-decoration-none text-danger mt-2">
                <i class="fa-solid fa-circle-arrow-left fs-10"></i>
                <b>Back</b>
            </a>
            <div class="col-8 offset-2 text-center mt-3">
                <h3>{{ $data->title }}</h3>
            </div>
            <div class="col-8 offset-2 text-center mt-3">
                <p>{{ $data->story }}</p>
            </div>
        </div>
    </div>
@endsection
