@extends('admin.layout.app')

@section('title','Servantes Page')

@section('content')
<a class="btn btn-warning mb-5" href="{{ route('servantes.create') }}">Add Servant</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Adress</th>
            <th>Job</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($servantes as $servant)
                <tr>
                    <td>{{ $servant->id }}</td>
                    <td>{{ $servant->name }}</td>
                    <td>{{ $servant->address }}</td>
                    <td>{{ $servant->job }}</td>
                    <td>{{ $servant->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('servantes.destroy', $servant->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-servant btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('servantes.edit', $servant->id) }}" class="btn btn-warning">update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$servantes->links()}}
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-servant').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
