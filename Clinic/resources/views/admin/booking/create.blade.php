@extends('adminlte::page')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('booking.store') }}" method="post" >
        @csrf
        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="{{ old('name') }}" class="form-control w-50" name="name" id="name">
            <div>
                <label for="email" class="form-label">email:</label>
                <input type="email" class="form-control w-50" value="{{ old('email') }}" name="email" id="email">
            </div>
        </div>
        <div>
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control w-50" name="phone" value="{{ old('phone') }}" id="phone">
        </div>

        <select class="custom-select w-50" aria-label="Default select example" name="doctor_id">
            @foreach ($doctors as $doctor)
                <option @if (old('doctor_id') == $doctor->id) selected @endif value="{{ $doctor->id }}">{{ $doctor->name }}

                </option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-primary" />
    </form>
@endsection
