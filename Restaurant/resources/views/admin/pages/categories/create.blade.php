@extends('admin.layout.app')

@section('title','Create Categories')

@section('content')

<a class="btn btn-warning mb-5" href="{{ route('categories.index') }}">categories list</a>


   @if(session()->has('success'))
  <div class=" alert alert-success">
   {{ session()->get('success') }}
  </div>
  @endif


    <form action="{{ route('categories.store') }}" method="post" class="py-2">
        @csrf

        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text"  class="form-control w-50" name="name" id="name">
        </div>

        @error('name')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <div>
            <label for="list" class="form-label">list:</label>
            <input type="text" class="form-control w-50" name="list"  id="city">
        </div>
        @error('list')
        <div class=" alert alert-danger">
                 {{ $message }}

        </div>

        @enderror
        <button class="btn btn-primary">save</button>
    </form>
@endsection
