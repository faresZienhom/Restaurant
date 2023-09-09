@extends('adminlte::page')
@section('content')
    <a href="{{ route('major.create') }}" class="btn btn-primary">create</a>
    <table class="table">
        <thead>
            <th>id</th>
            <th>Rate</th>
            <th>doctor_id</th>
            <th>doctor name</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($rates as $rate)
                <tr>
                    <td>{{ $rate->id }}</td>
                    <td>{{ $rate->rate }}</td>
                    <td>{{ $rate->doctor_id }}</td>
                    <td>{{ $rate->doctor->name}}</td>
                    <td>{{ $rate->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('rate.destroy', $rate->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-rate btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-rate').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
