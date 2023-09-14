@extends('admin.layout.app')

@section('title','products page')
@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-primary">create</a>
    <table class="table">
        <thead>
            <th>id</th>
            <th>title</th>
            <th>image</th>
            <th>author</th>
            <th>page_number</th>
            <th>price</th>
            <th>discount</th>
            <th>price after discount</th>
            <th>count</th>
            <th>categories_id</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td><img src="{{ $product->image }}" width="40"></td>
                    <td>{{ $product->author }}</td>
                    <td>{{ $product->page_number }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->priceafterdiscount }}</td>
                    <td>{{ $product->count }}</td>
                    <td>{{ $product->categories->name }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
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
@endsection
