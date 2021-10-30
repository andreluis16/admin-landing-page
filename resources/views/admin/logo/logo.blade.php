@extends('admin.index')

@section('table')
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>Id</th>
                <th>Logo</th>
                <th>Editar</th>
            </tr>
        </thead>
        @foreach ( $logos as $logo )
        <tbody>
            <tr>
                <td>{{ $logo->id }}</td>
                <td><img src="{{ $logo->logo }}" alt="logo-img"></td>
                <td><a class="btn btn-primary" href="">Editar</a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
