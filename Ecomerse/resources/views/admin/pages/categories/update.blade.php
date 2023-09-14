@extends('admin.layout.app')

@section('title','Categories Page')


@section('content')
@if(session()->has('success'))
<div class=" alert alert-success">
   {{ session()->get('success') }}
</div>
@endif



    <form action="{{ route('categories.update', s) }}" method="post" class="py-2">
        @method('put')
        @csrf
        <input type="text" value="{{ $categories->name }}" class="form-control w-25" name="name">
        <button class="btn btn-primary">save</button>
    </form>
@endsection
