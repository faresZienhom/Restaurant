@extends('admin.layout.app')

@section('title','Gallery Page')

@section('content')
<a class="btn btn-warning mb-5" href="{{ route('gallerys.create') }}">Add gallery</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>image</th>
            <th>Name</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($gallerys as $gallery)
                <tr>
                    <td>{{ $gallery->id }}</td>
                    <td><img src="{{ asset ( "images/gallery/" .$gallery->image) }}" width="50" height="50"></td>
                    <td>{{ $gallery->name }}</td>
                    <td>{{ $gallery->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('gallerys.destroy', $gallery->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-gallery btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('gallerys.edit', $gallery->id) }}" class="btn btn-warning">update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-gallery').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
