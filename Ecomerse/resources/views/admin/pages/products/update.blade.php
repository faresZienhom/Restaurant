@extends('admin.layout.app')

@section('title','Update Pruducts')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div>
            <label for="title" class="form-label">Title:</label>
            <input type="text" value="{{ $product->title }}" class="form-control w-50" name="title" id="title">
        </div>
            <label for="exampleInputFile">Image</label>
            <div class="input-group w-50">
                <div class="custom-file">
                    <input type="file" value="{{ $product->image }}"class="custom-file-input" name="image" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Upload</label>
                </div>
            </div>
        <div>
            <label for="author" class="form-label">Author:</label>
            <input type="text" class="form-control w-50" name="author" value="{{ $product->author }}" id="author">
        </div>
        <div>
            <label for="" class="form-label">Page_number:</label>
            <input type="page_number" class="form-control w-50" value="{{ $product->page_number }}" name="page_number" id="email">
        </div>
        <div>
            <label for="name" class="form-label">Price:</label>
            <input type="text" value="{{ $product->price }}" class="form-control w-50" name="price" id="price">
        </div>
        <div>
            <label for="name" class="form-label">Discount:</label>
            <input type="text" value="{{ $product->discount }}"class="form-control w-50" name="discount" id="discount">
        </div>
        <div>
            <label for="name" class="form-label">priceafterdiscount:</label>
            <input type="text" value="{{ $product->priceafterdiscount }}" class="form-control w-50" name="priceafterdiscount" id="priceafterdiscount">
        </div>
        <div>
            <label for="name" class="form-label">Count:</label>
            <input type="text" value="{{ $product->count }}" class="form-control w-50" name="count" id="count">
        </div>
        <select class="custom-select w-50" aria-label="Default select example" name="categories_id">
            @foreach ($categories as $category)
                <option @if (old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}
                </option>
            @endforeach
        </select>


        <input type="submit" class="btn btn-primary" />
    </form>
@endsection
