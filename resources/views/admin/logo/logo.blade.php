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
            Intituto Batucando Logo
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Logo</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Logo</th>
                        <th>Editar</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($logos as $logo)
                        <tr>
                            <td>{{ $logo->id }}</td>
                            <td><img src="{{ url("storage/{$logo->logo}") }}" class="img-small" alt="logo-img"></td>
                            <td><a class="btn btn-primary" href="{{ route('admin.logo.edit', $logo->id) }}">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
