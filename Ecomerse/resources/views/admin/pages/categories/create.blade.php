@extends('admin.layout.app')

@section('title','Create Categories')

@section('content')
@if(session()->has('success'))
<div class=" alert alert-success">
   {{ session()->get('success') }}
</div>
@endif


    <form action="{{ route('categories.store') }}" method="post" class="py-2">
        @csrf
        <input type="text" class="form-control w-25" name="name">
        @error('name')
        <div class=" alert alert-danger">
                 {{ $message }}
        </div>

        @enderror

        <button class="btn btn-primary">save</button>
    </form>
@endsection
