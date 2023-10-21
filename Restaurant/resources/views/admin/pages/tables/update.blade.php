@extends('admin.layout.app')

@section('title','Tables Page')


@section('content')

<a class="btn btn-warning mb-5" href="{{ route('tables.index') }}">Tables list</a>

@if(session()->has('success'))
<div class=" alert alert-success">
   {{ session()->get('success') }}
</div>
@endif



    <form action="{{ route('tables.update', $tables->id) }}" method="post" class="py-2">
        @method('put')
        @csrf
        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="{{ $tables->name }}" class="form-control w-25" name="name">
        </div>

        @error('name')
        <div class=" alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <div>
            <label for="guest_number" class="form-label">Guest_Number:</label>
            <input type="text" value="{{ $tables->guest_number }}" class="form-control w-25" name="guest_number">
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
