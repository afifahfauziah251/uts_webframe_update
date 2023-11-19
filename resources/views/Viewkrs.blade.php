@extends('layouts.index')

@section('content')
    <h1>KRS</h1>

    <table border="2">
        <thead>
            <tr>
                <th>KodeMatkul</th>
                <th>NamaMatkul</th>
                <th>SKS</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['KodeMatkul'] }}</td>
                    <td>{{ $post['NamaMatkul'] }}</td>
                    <td>{{ $post['SKS'] }}</td>
                    <td>{{ $post['Semester'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection