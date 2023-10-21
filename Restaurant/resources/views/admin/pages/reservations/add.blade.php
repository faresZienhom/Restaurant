
@extends('admin.layout.app')

@section('title','Reservations page')
@section('content')


            <a class="btn btn-warning mb-5" href="{{ route('resevation.index') }}">Reservations list</a>


            @if (session('message'))
                <div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
            @endif
            <form action="{{route('resevation.store')}}" method="POST" class="w-75" enctype="multipart/form-data">
                @csrf


            <div class="form-group">
                <label>name:</label>
                <input class="form-control" type="text" name="name" placeholder=" name"
                value="{{old('name')}}" >
                @error('name')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>email:</label>
                <input class="form-control" type="email" name="email" placeholder=" email"
                value="{{old('email')}}" >
                @error('email')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>phone:</label>
                <input class="form-control" type="text" name="phone" placeholder=" phone"
                value="{{old('phone')}}" >
                @error('phone')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Res_date:</label>
                <input class="form-control" type="date" name="res_date" placeholder=" res_date"
                value="{{old('res_date')}}" >
                @error('res_date')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label>guest_number:</label>
                <input class="form-control" type="number" name="guest_number" placeholder=" guest_number"
                value="{{old('guest_number')}}" >
                @error('guest_number')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label>table:</label>
                <select name="table_id">
                        @forelse ($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->name }}</option>
                        @empty
                            <option value="0" disabled>Nothing </option>
                        @endforelse
                </select>
            </div>



            <input type="submit" class="btn btn-primary" value="add">
            </form>


</div>

@endsection
