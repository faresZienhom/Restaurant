@extends('adminlte::page')
@section('content')
    <form action="{{ route('doctor.update', $doctor->id) }}" method="post" enctype="multipart/form-data" class="py-2">
        @method('put')
        @csrf
        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="{{ $doctor->name }}" class="form-control w-25" name="name">
        </div>
        <div>
            <label for="name" class="form-label">City:</label>
            <input type="text" value="{{ $doctor->city }}" class="form-control w-25" name="city">
        </div>
        <div>
            <label for="name" class="form-label">Email:</label>
            <input type="text" value="{{ $doctor->email }}" class="form-control w-25" name="email">
        </div>

        <button class="btn btn-primary">save</button>
    </form>
@endsection
