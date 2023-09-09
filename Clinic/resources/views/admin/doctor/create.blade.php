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
    <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name" class="form-label">Name:</label>
            <input type="text" value="{{ old('name') }}" class="form-control w-50" name="name" id="name">
        </div>
        <div>
            <label for="city" class="form-label">city:</label>
            <input type="text" class="form-control w-50" name="city" value="{{ old('city') }}" id="city">
        </div>
        <div>
            <label for="city" class="form-label">email:</label>
            <input type="email" class="form-control w-50" value="{{ old('email') }}" name="email" id="email">
        </div>
        <div>
            <label for="password" class="form-label">password:</label>
            <input type="password" class="form-control w-50" name="password" id="password">
        </div>
        <label for="exampleInputFile">Image</label>
        <div class="input-group w-50">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Upload</label>
            </div>
        </div>
        <select class="custom-select w-50" aria-label="Default select example" name="major_id">
            @foreach ($majors as $major)
                <option @if (old('major_id') == $major->id) selected @endif value="{{ $major->id }}">{{ $major->title }}
                </option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-primary" />
    </form>
@endsection
