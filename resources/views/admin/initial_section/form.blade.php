@extends('admin.index')

@section('table')
    @if ($errors->any())

        <div>
            @foreach ($errors->all() as $error)
            <div class="d-flex justify-content-center m-5 alert alert-danger">
                <li>{{ $error }}</li>
            </div>
            @endforeach
        </div>

    @endif


    <form method="POST" action="{{ route('admin.initial-section.update', $section->id) }}" enctype="multipart/form-data"
        class="m-5">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $section->title }}">
        </div>
        <div class="form-group">
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="content" class="form-control">{{ $section->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary ml-4">Edit Section</button>
    </form>

@endsection
