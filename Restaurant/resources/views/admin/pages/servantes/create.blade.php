@extends('admin.layout.app')

@section('title','Create Servantes')

@section('content')

<a class="btn btn-warning mb-5" href="{{ route('servantes.index') }}">Servantes list</a>


   @if(session()->has('success'))
  <div class=" alert alert-success">
   {{ session()->get('success') }}
  </div>
  @endif


    <form action="{{ route('servantes.store') }}" method="post" class="py-2">
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
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control w-50" name="address"  id="city">
        </div>
        @error('address')
        <div class=" alert alert-danger">
                 {{ $message }}
       </div>
        @enderror

        <div>
            <label for="job" class="form-label">Job:</label>
            <input type="text"  class="form-control w-50" name="job" id="job">
        </div>

        @error('job')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <button class="btn btn-primary">save</button>
    </form>
@endsection
