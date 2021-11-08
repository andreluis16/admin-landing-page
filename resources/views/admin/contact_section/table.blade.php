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
            Intituto Batucando Contact Section
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Map Link</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Map Link</th>
                        <th>Edit</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{ $section->id }}</td>
                            <td>{{ $section->address }}</td>
                            <td>{{ $section->telephone }}</td>
                            <td>{{ $section->email }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($section->link, 20, $end='...') }}</td>
                            <td><a class="btn btn-primary" href="{{ route('admin.contact-section.edit', $section->id) }}">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
