@extends('admin.layout.app')

@section('title','Wishlist Page')

@section('content')

    <table class="table">
        <thead>
            <th>id</th>
            <th>Wishlist</th>
            <th>Product_id</th>
            <th>Product Title</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($wishlists as $wishlist)
                <tr>
                    <td>{{ $wishlist->id }}</td>
                    <td>{{ $wishlist->name }}</td>
                    <td>{{ $wishlist->product_id }}</td>
                    <td>{{ $wishlist->product->title }}</td>
                    <td>{{ $wishlist->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('wishlist.destroy', $wishlist->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-wishlist btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-wishlist').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
