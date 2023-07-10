@extends('main')

@section('content')
    <div class="container">
        <div class="col-8 offset-2 mt-4">
            <div class="mb-3">
                <a href="{{route('home#diary')}}" class="text-decoration-none text-danger">
                    <i class="fa-solid fa-circle-arrow-left fs-10"></i>
                    <b>Back</b>
                </a>
            </div>
                @if(session('alert'))
                    <div class="alert alert-success" role="alert">
                        {{session('alert')}}
                    </div>
                @endif
            <form action="{{route('save#diary')}}" method="POST">
                @csrf
                <div>
                    <label for="title" class="mb-2 font-weight-bold fs-4">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                    @error('title')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>
                <div>
                    <label for="story" class="mb-2 font-weight-bold fs-4">Story</label>
                    <textarea name="story" id="story" cols="30" rows="10" class="form-control">{{ old('story') }}</textarea>
                    @error('story')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                    </div>
                <input type="submit" name="create" value="Create" class="btn btn-danger mt-3 float-end">
            </form>
        </div>
    </div>
@endsection
