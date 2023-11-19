@extends('layouts.index')

@section('content')
    <h1>KRS</h1>

    <table border="2">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataMahasiswa as $mahasiswa)
                <tr>
                    <td><a href="{{ route('mahasiswa.krs', $mahasiswa['NIM']) }}">{{ $mahasiswa['NIM'] }}</a></td>
                    <td>{{ $mahasiswa['Nama'] }}</td>
                    <td>{{ $mahasiswa['Jurusan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection