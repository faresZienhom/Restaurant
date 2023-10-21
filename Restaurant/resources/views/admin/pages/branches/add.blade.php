
@extends('admin.layout.app')

@section('title','Branches page')
@section('content')

<a class="btn btn-warning mb-5" href="{{ route('branches.index') }}">Branches list</a>


@if (session('message'))
<div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
@endif
<form action="{{route('branches.store')}}" method="POST" class="w-75">
                @csrf
            <div class="form-group">
                <label>City:</label>
                <input class="form-control" type="text" name="city" placeholder="Type city"
                value="{{old('city')}}" >
                @error('city')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Street:</label>
                <input class="form-control" type="text" name="street" placeholder="Type street"
                value="{{old('street')}}" >
                @error('street')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Phone:</label>
                <input class="form-control" type="text" name="phone" placeholder="Type phone"
                value="{{old('phone')}}" >
                @error('phone')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" class="btn btn-primary" value="add">
            </form>


</div>

@endsection
