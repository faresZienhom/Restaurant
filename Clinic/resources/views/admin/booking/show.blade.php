@extends('adminlte::page')
@section('content')
    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>Doctor Name</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->doctor->name}}</td>
                <td>{{ $booking->created_at }}</td>
                <td>
                    <form action="{{ route('booking.destroy', $booking->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="delete-major btn btn-danger" type="submit">delete</button>
                    </form>
                    <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-warning">update</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
