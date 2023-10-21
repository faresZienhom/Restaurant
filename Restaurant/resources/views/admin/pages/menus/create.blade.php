@extends('admin.layout.app')

@section('title','Create Menus')
@section('content')


<a class="btn btn-warning mb-5" href="{{ route('menus.index') }}">menus list</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="{{ old('name') }}" class="form-control w-50" name="name" id="name">
        </div>
        <div>
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control w-50" name="description" value="{{ old('description') }}" id="description">
        </div>
            <label for="exampleInputFile">Image</label>
            <div class="input-group w-50">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Upload</label>
                </div>
            </div>
        <div>
            <label for="name" class="form-label">Price:</label>
            <input type="text" value="{{ old('price') }}" class="form-control w-50" name="price" id="price">
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



        <input type="submit" class="btn btn-primary" />
    </form>
@endsection
