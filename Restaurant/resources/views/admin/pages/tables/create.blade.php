@extends('admin.layout.app')

@section('title','Create Tables')

@section('content')


<a class="btn btn-warning mb-5" href="{{ route('tables.index') }}">Tables list</a>


   @if(session()->has('success'))
  <div class=" alert alert-success">
   {{ session()->get('success') }}
  </div>
  @endif


    <form action="{{ route('tables.store') }}" method="post" class="py-2">
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
            <label for="guest_number" class="form-label">Guest_Number:</label>
            <input type="text" class="form-control w-50" name="guest_number"  id="city">
        </div>
        @error('guest_number')
        <div class=" alert alert-danger">
                 {{ $message }}
       </div>
        @enderror
        <div class="custom-file">
        <select name="status"  class="custom-select w-50" >
            <option selected disabled > Choose Status</option>
             <option value = "1"  > Avaliable</option>
            <option value = "0"  >  Not Avaliable</option>
                </select>

        @error('status')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        </div>
        <button class="btn btn-primary">save</button>
    </form>
@endsection
