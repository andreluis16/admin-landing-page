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


    <form method="POST" action="{{ route('admin.logo.update', $logo->id) }}" enctype="multipart/form-data"
        class="form-inline d-flex justify-content-center m-5">
        @csrf
        @method('put')
        <div class="form-group">
            <input type="file" name="logo" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary ml-4">Editar Logo</button>
    </form>

@endsection
