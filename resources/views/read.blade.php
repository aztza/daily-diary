@extends('main')

@section('content')
<div class="container">
    @if(session('alert'))
        <div class="alert alert-danger" role="alert">
            {{session('alert')}}
        </div>
    @endif
    @if(session('updated'))
        <div class="alert alert-success" role="alert">
            {{session('updated')}}
        </div>
    @endif
    <div class="row">
        <div class="col-6 offset-3 mt-4">
            <a href="{{route('home#diary')}}" class="text-decoration-none text-danger mt-2">
                <i class="fa-solid fa-circle-arrow-left fs-10"></i>
                <b>Back</b>
            </a>
        </div>
    </div>
    @foreach ($data as $datas)
        <div class="row">
            <div class="card col-6 offset-3 mt-3">
                <h5 class="card-title p-3 text-center">{{ $datas->title }}</h5>
                <p class="card-text">{{ Str::words(($datas->story),15, '...') }}</p>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ route('delete#diary',$datas->id) }}"><i class="fa-solid fa-trash-can my-3 mx-1 btn text-danger fs-4"></i></a>
                    </div>
                    <div>
                        <a href="{{ route('view#diary',$datas->id) }}" class="btn btn btn-primary my-3 mx-1">View</a>
                        <a href="{{ route('edit#diary',$datas->id) }}" class="btn btn btn-warning my-3 mx-1">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="mt-4 d-flex justify-content-center">
        {{ $data->links() }}
    </div>
</div>
@endsection
