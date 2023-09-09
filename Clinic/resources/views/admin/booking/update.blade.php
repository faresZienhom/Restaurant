@extends('adminlte::page')
@section('content')
    <form action="{{ route('booking.update', $booking->id) }}" method="post" class="py-2">
        @method('put')
        @csrf

        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="{{ $booking->name }}" class="form-control w-25" name="name">
        </div>
        <div>
            <label for="name" class="form-label">Email:</label>
            <input type="text" value="{{ $booking->email }}" class="form-control w-25" name="email">
        </div>
        <div>
            <label for="name" class="form-label">Phone:</label>
            <input type="text" value="{{ $booking->phone }}" class="form-control w-25" name="phone">
        </div>


        <button class="btn btn-primary">save</button>
    </form>
@endsection
