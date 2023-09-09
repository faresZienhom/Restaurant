@extends('adminlte::page')
@section('content')
    <a href="{{ route('booking.create') }}" class="btn btn-primary">create</a>
    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
             <th>email</th>
            <th>phone</th>
            <th>doctor_id</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->doctor_id }}</td>
                    <td>{{ $booking->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('booking.destroy', $booking->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-booking btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-warning">update</a>
                        <a href="{{ route('booking.show', $booking->id) }}" class="btn btn-primary">show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-booking').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
