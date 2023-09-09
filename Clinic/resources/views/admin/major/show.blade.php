@extends('adminlte::page')
@section('content')
    <table class="table">
        <thead>
            <th>id</th>
            <th>title</th>
            <th>created_at</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $major->id }}</td>
                <td>{{ $major->title }}</td>
                <td>{{ $major->created_at }}</td>
            </tr>
        </tbody>
    </table>


    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>city</th>
            <th>image</th>
            <th>created_at</th>
        </thead>
        <tbody>
            @foreach ($major->doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->city }}</td>
                    <td><img src="{{ $doctor->image }}" width="40"></td>
                    <td>{{ $doctor->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
