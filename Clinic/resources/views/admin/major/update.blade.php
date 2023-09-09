@extends('adminlte::page')
@section('content')
    <form action="{{ route('major.update', $major->id) }}" method="post" class="py-2">
        @method('put')
        @csrf
        <input type="text" value="{{ $major->title }}" class="form-control w-25" name="title">
        <button class="btn btn-primary">save</button>
    </form>
@endsection
