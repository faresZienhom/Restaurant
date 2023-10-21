
@extends('admin.layout.app')

@section('title','Order page')
@section('content')


            <a class="btn btn-warning mb-5" href="{{ route('orders.index') }}">orders list</a>


            @if (session('message'))
                <div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
            @endif
            <form action="{{route('orders.store')}}" method="POST" class="w-75" enctype="multipart/form-data">
                @csrf

                <label for="exampleInputFile">Image</label>
                <div class="input-group w-50">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload</label>
                    </div>
                </div>
                @error('image')
                <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
            @enderror



            <div class="form-group">
                <label>price:</label>
                <input class="form-control" type="text" name="price" placeholder=" price"
                value="{{old('price')}}" >
                @error('price')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label>quantity:</label>
                <input class="form-control" type="text" name="quantity" placeholder=" quantity"
                value="{{old('quantity')}}" >
                @error('quantity')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>User:</label>
                <select name="user_id">
                        @forelse ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @empty
                            <option value="0" disabled>Nothing </option>
                        @endforelse
                </select>
            </div>

            <div class="form-group">
                <label>menu:</label>
                <select name="menu_id">
                        @forelse ($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                        @empty
                            <option value="0" disabled>Nothing </option>
                        @endforelse
                </select>
            </div>



            <input type="submit" class="btn btn-primary" value="add">
            </form>


</div>

@endsection
