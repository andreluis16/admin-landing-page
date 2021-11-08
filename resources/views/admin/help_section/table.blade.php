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
            Intituto Batucando Help Section
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Phrase</th>
                        <th>Help Title</th>
                        <th>Help Info</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Phrase</th>
                        <th>Help Title</th>
                        <th>Help Info</th>
                        <th>Edit</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{ $section->id }}</td>
                            <td>{{ $section->title }}</td>
                            <td>{{ $section->phrase }}</td>
                            <td>{{ $section->help_title }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($section->help_info, 25, $end='...') }}</td>
                            <td><a class="btn btn-primary" href="{{ route('admin.help-section.edit', $section->id) }}">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
