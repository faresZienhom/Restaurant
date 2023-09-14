@extends('admin.layout.app')

@section('title','Create Slider')

@section('content')

     @if(session()->has('success'))
     <div class=" alert alert-success">
        {{ session()->get('success') }}
</div>
     @endif


    <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
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
        <div class="input-group w-50">
        <div class="custom-file">
        <select name="status"  class="custom-select w-50" >
            <option selected disabled > اختر الحاله</option>
             <option value="0"  > غير معروضه</option>
            <option value="1"  >  معروضه </option>
                </select>
            </div>
            @error('status')
            <div class=" alert alert-danger">
                     {{ $message }}
            </div>
            @enderror

        </div>
        <br>

                <button type="submit" class="btn btn-primary"> save</button>
    </form>
@endsection

