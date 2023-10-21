@extends('admin.layout.app')

@section('title','Servantes Page')


@section('content')

<a class="btn btn-warning mb-5" href="{{ route('servantes.index') }}">Servantes list</a>



@if(session()->has('success'))
<div class=" alert alert-success">
   {{ session()->get('success') }}
</div>
@endif



    <form action="{{ route('servantes.update', $servantes->id) }}" method="post" class="py-2">
        @method('put')
        @csrf
        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="{{ $servantes->name }}" class="form-control w-25" name="name">
        </div>

        @error('name')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <div>
            <label for="list" class="form-label">Address:</label>
            <input type="text" value="{{ $servantes->address }}" class="form-control w-25" name="address">
        </div>
        @error('address')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <div>
            <label for="job" class="form-label">Job:</label>
            <input type="text" value="{{ $servantes->job }}" class="form-control w-25" name="job">
        </div>

        @error('job')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <button class="btn btn-primary">save</button>
    </form>
@endsection
