@extends('admin.layout.app')

@section('title','Banners Page')

@section('content')
<a href="{{ route('banner.create') }}" class="btn btn-primary">create</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>image</th>
            <th>status</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td><img src="{{ $banner->image }}" width="50" height="50"></td>
                    <td>{{ $banner->status == 1 ?"معروضه" :"غير معروضه" }}</td>
                    <td>{{ $banner->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-banner btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-warning">update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-banner').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
