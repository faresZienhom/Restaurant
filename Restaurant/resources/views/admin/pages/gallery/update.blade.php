@extends('admin.layout.app')

@section('title','Update Gallery')

@section('content')


<a class="btn btn-warning mb-5" href="{{ route('gallerys.index') }}"> Gallery list</a>


     @if(session()->has('success'))
     <div class=" alert alert-success">
        {{ session()->get('success') }}
</div>
     @endif


    <form action="{{ route('gallerys.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <label for="exampleInputFile">Image</label>
        <div class="input-group w-50">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
            </div>
            @error('image')
            <div class=" alert alert-danger">
                     {{ $message }}
            </div>

            @enderror
        </div>
        <br>
        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text"  class="form-control w-50" name="name" id="name">
        </div>

            @error('name')
            <div class=" alert alert-danger">
                     {{ $message }}
            </div>
            @enderror


        <br>

                <button type="submit" class="btn btn-primary"> save</button>
    </form>
@endsection

