@extends('admin.layout.app')

@section('title','menus page')
@section('content')
<a class="btn btn-warning mb-5" href="{{ route('menus.create') }}">Add menu</a>


    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Description</th>
            <th>image</th>
            <th>price</th>
            <th>categories_id</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->description }}</td>
                    <td><img src="{{ asset ( "images/menu/" .$menu->image) }}" width="50" height="50"></td>
                    <td>{{ $menu->price }}</td>
                    <td>{{ $menu-> categories_id}}</td>
                    <td>{{ $menu->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('menus.destroy', $menu->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-major btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning">update</a>
                        <a href="{{ route('menus.show', $menu->id) }}" class="btn btn-primary">show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$menus->links()}}

@endsection
