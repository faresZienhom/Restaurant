@extends('admin.layout.app')

@section('title','Sliders Page')

@section('content')
<a class="btn btn-warning mb-5" href="{{ route('slider.create') }}">Add slider</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>image</th>
            <th>status</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td><img src="{{ asset ( "images/slider/" .$slider->image) }}" width="50" height="50"></td>
                    <td>{{ $slider->status == 1 ?"معروضه" :"غير معروضه" }}</td>
                    <td>{{ $slider->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('slider.destroy', $slider->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-slider btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-warning">update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-slider').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
