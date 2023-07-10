@extends('main')

@section('content')
    <div  style="background-color: rgb(219, 208, 208)">
        <div class="container text-center">
            <div class="row align-items-center" style="height: 100vh">
                <div class="col-4 offset-2">
                    <a href="{{route('read#diary')}}" class="text-decoration-none btn btn-danger shadow-lg"><i class="fa-solid fa-book fs-1 p-5" style="font-size: 90px;"></i>
                    <br><medium class="text-white" style="font-family: 'Oswald', sans-serif;font-size:30px;">Read</medium></a>
                </div>
                <div class="col-4">
                    <a href="{{route('write#diary')}}" class="text-decoration-none btn btn-danger shadow-lg"><i class="fa-solid fa-file-pen fs-1 p-5"></i>
                    <br><medium class="text-white" style="font-family: 'Oswald', sans-serif;font-size:30px;">Write</medium></a>
                </div>
            </div>
        </div>
    </div>
@endsection
