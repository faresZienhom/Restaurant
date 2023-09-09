@extends('adminlte::page')
@section('content')
    <form action="{{ route('major.store') }}" method="post" class="py-2">
        @csrf
        <input type="text" class="form-control w-25" name="title">
        <button class="btn btn-primary">save</button>
    </form>
@endsection
