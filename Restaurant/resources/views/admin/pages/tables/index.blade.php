@extends('admin.layout.app')

@section('title','Tables Page')

@section('content')
<a class="btn btn-warning mb-5" href="{{ route('tables.create') }}">Add Table</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Guest_Number</th>
            <th>Status</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($tables as $table)
                <tr>
                    <td>{{ $table->id }}</td>
                    <td>{{ $table->name }}</td>
                    <td>{{ $table->guest_number }}</td>
                    <td>{{ $table->status== 1 ?"Avaliable" :"Not Avaliable " }}</td>
                    <td>{{ $table->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('tables.destroy', $table->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-table btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-warning">update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$tables->links()}}
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-table').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
