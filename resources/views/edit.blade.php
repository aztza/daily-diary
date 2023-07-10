@extends('main')

@section('content')
    <div class="row col-8 offset-2">
        <div class="mb-3 mt-5">
            <a href="{{route('read#diary')}}" class="text-decoration-none text-danger">
                <i class="fa-solid fa-circle-arrow-left fs-10"></i>
                <b>Back</b>
            </a>
        </div>
        <form action="{{ route('update#diary') }}" method="POST">
            @csrf
            <div>
                <input type="hidden" name="id" value="{{ $oldDatas->id }}">
                <label for="title" class="mb-2 font-weight-bold fs-4">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{old('title', $oldDatas['title'])}}">
                @error('title')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>
            <div>
                <label for="story" class="mb-2 font-weight-bold fs-4">Story</label>
                <textarea name="story" id="story" cols="30" rows="10" class="form-control">{{old('story', $oldDatas['story'])}}</textarea>
                @error('story')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
                </div>
            <input type="submit" name="update" value="Update" class="btn btn-danger mt-3 float-end">
        </form>
    </div>
@endsection
