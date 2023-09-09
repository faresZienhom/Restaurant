@extends('adminlte::page')
@section('content')
    <a href="{{ route('major.create') }}" class="btn btn-primary">create</a>
    <table class="table">
        <thead>
            <th>id</th>
            <th>title</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($majors as $major)
                <tr>
                    <td>{{ $major->id }}</td>
                    <td>{{ $major->title }}</td>
                    <td>{{ $major->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('majors.delete', $major->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-major btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('major.edit', $major->id) }}" class="btn btn-warning">update</a>
                        <a href="{{ route('major.show', $major->id) }}" class="btn btn-primary">show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-major').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
