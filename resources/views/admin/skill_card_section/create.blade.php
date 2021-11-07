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


    <form method="POST" action="{{ route('admin.skill-card-section.create-save') }}" class="m-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" placeholder="card title">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="content" class="form-control" placeholder="card content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Slide</button>
    </form>

@endsection
