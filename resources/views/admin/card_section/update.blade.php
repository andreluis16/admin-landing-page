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


    <form method="POST" action="{{ route('admin.card-section.update', $section->id) }}" class="m-5">
        @csrf
        @method('put');
        <div class="form-group">
            <label for="">Icon Class</label>
            <input type="text" name="icon" class="form-control" value="{{ $section->icon }}">
            <a href="https://iconscout.com/unicons/explore/line" target="_blank">Get the icon here</a>
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control"value="{{ $section->title }}">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="content" class="form-control">{{ $section->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit card</button>
    </form>

@endsection
