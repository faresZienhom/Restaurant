@extends('admin.layout.app')

@section('title','Categories Page')

@section('content')
<a href="{{ route('categories.create') }}" class="btn btn-primary">create</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-category btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories->links()}}
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-category').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
