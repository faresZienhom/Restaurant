@extends('admin.layout.app')

@section('title','Categories Page')

@section('content')


<a class="btn btn-warning mb-5" href="{{ route('categories.index') }}">categories list</a>


@if(session()->has('success'))
<div class=" alert alert-success">
   {{ session()->get('success') }}
</div>
@endif



    <form action="{{ route('categories.update', $categories->id) }}" method="post" class="py-2">
        @method('put')
        @csrf
        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="{{ $categories->name }}" class="form-control w-25" name="name">
        </div>

        @error('name')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <div>
            <label for="list" class="form-label">List:</label>
            <input type="text" value="{{ $categories->list }}" class="form-control w-25" name="list">
        </div>
        @error('list')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <button class="btn btn-primary">save</button>
    </form>
@endsection
