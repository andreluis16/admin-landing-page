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


    <form method="POST" action="{{ route('admin.helper-section.create-save') }}" class="m-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Icon Class</label>
            <input type="text" name="icon" class="form-control" placeholder="put the icon class, example 'uil uil-icon'" >
            <a href="https://iconscout.com/unicons/explore/line" target="_blank">Get the icon here</a>
        </div>
        <div class="form-group">
            <label for="">Helper</label>
            <input type="text" name="helper" class="form-control" placeholder="helper description">
        </div>

        <button type="submit" class="btn btn-primary">Add Helper</button>
    </form>

@endsection
