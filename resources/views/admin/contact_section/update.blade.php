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


    <form method="POST" action="{{ route('admin.contact-section.update', $section->id) }}" class="m-5">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $section->address }}">
        </div>
        <div class="form-group">
            <label for="">Telephone</label>
            <input type="text" name="telephone" class="form-control" value="{{ $section->telephone }}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $section->email }}">
        </div>
        <div class="form-group">
            <label for="">Link</label>
            <textarea name="link" class="form-control">{{ $section->link }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit Section</button>
    </form>

@endsection
