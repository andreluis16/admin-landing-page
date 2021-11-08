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


    <form method="POST" action="{{ route('admin.contributors-section.create-save') }}" class="m-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="contributor name">
        </div>

        <button type="submit" class="btn btn-primary">Add Contributor</button>
    </form>

@endsection
