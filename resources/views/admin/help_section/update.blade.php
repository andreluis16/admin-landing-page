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


    <form method="POST" action="{{ route('admin.help-section.update', $section->id) }}" class="m-5">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $section->title }}">
        </div>
        <div class="form-group">
            <label for="">Phrase</label>
            <textarea name="phrase" class="form-control">{{ $section->phrase }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Help Title</label>
            <input type="text" name="help_title" class="form-control" value="{{ $section->help_title }}">
        </div>
        <div class="form-group">
            <label for="">Help Info</label>
            <textarea name="help_info" class="form-control">{{ $section->help_info }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit Section</button>
    </form>

@endsection
