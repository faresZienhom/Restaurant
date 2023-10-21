@extends('admin.layout.app')

@section('title','Update menus')
@section('content')
    <div class="container">


        <a class="btn btn-warning mb-5" href="{{ route('menus.index') }}">menus list</a>



        <form action="{{route('menus.update', $menu->id)}}" method="POST" class="w-75" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name" placeholder="Type name"
            value="{{$menu->name}}" >
            @error('name')
                <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label>descreption:</label>
            <textarea class="form-control" name="description" type="text" rows="4" cols="50" placeholder="Type descreption"
            value ="{{ $menu->description }}"></textarea>

            @error('description')
            <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>image:</label>
            <input class="form-control" type="file" name="image">
            @error('image')
                <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label>price:</label>
            <input class="form-control" type="text" name="price" placeholder="Type price"
            value="{{$menu->price}}" >
            @error('price')
                <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
            @enderror
        </div>

        <select class="custom-select w-50" aria-label="Default select example" name="categories_id">
            @foreach ($categories as $category)
                <option @if (old('categories_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}
                </option>
            @endforeach
        </select>
        <select class="custom-select w-50" aria-label="Default select example" name="categories_id">
            @foreach ($categories as $category)
                <option @if (old('categories_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->list }}
                </option>
            @endforeach
        </select>





        <input type="submit" class="btn btn-primary" value="update">

        </form>


</div>
@endsection
