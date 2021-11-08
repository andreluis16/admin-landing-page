@extends('admin.index')

@section('table')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Intituto Batucando Helper Section
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Icon</th>
                        <th>Helper</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Icon</th>
                        <th>Helper</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{ $section->id }}</td>
                            <td><i class="{{ $section->icon }}"></i></td>
                            <td>{{ $section->helper }}</td>
                            <td><a class="btn btn-primary"
                                    href="{{ route('admin.helper-section.edit', $section->id) }}">Edit</a></td>
                            <td>
                                <form method="POST" action="{{ route('admin.helper-section.delete', $section->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.helper-section.create-form') }}" class="btn btn-success">Add Card</a>
    </div>

@endsection
