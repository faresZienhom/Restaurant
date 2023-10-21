@extends('admin.layout.app')

@section('title','menus page')
@section('content')

<a class="btn btn-warning mb-5" href="{{ route('menus.index') }}">menus list</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Description</th>
            <th>image</th>
            <th>price</th>
            <th>NameCategory</th>
            <th>CategoryList</th>
            <th>actions</th>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->description }}</td>
                    <td><img src="{{ asset ( "images/menu/" .$menu->image) }}" width="50" height="50"></td>
                    <td>{{ $menu->price }}</td>
                    <td>{{ $menu->category->name }}</td>
                    <td>{{ $menu->category->list }}</td>
                    <td class="d-flex">
                        <form action="{{ route('menus.destroy', $menu->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-major btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
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
