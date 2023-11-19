@extends('layouts.index')

@section('content')

<div>
    <h1>Detail KRS - {{ $mahasiswa['Nama'] }}</h1>

    <p>NIM: {{ $mahasiswa['NIM'] }}</p>

    <h2>Daftar KRS</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach($krs as $item)
                <tr>
                    <td>{{ $item['KodeMatkul'] }}</td>
                    <td>{{ $item['NamaMatkul'] }}</td>
                    <td>{{ $item['SKS'] }}</td>
                    <td>{{ $item['Semester'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection