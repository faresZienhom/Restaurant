
@extends('admin.layout.app')

@section('title','Order page')
@section('content')


            <a class="btn btn-warning mb-5" href="{{ route('orders.index') }}">orders list</a>


            @if (session('message'))
                <div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
            @endif

            <form action="{{route('orders.update', $order->id)}}" method="POST" class="w-75" enctype="multipart/form-data">
                @csrf
                @method('PUT')

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
                <input class="form-control" type="text" name="price" placeholder="Type price"
                value="{{$order->price}}" >
                @error('price')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label>quantity:</label>
                <input class="form-control" type="text" name="quantity" placeholder="Type quantity"
                value="{{$order->quantity}}" >
                @error('quantity')
                    <div class="alert alert-danger m-2 mb-2 p-0">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>User:</label>
                <select name="user_id">
                    @isset($users)
                        @forelse ($users as $user)
                            <option  {{ $order->user->id == $user->id ? 'selected' : ''}} value="{{ $user->id }}">{{ $user->name }}</option>
                        @empty
                            <option value="0" disabled>Nothing </option>
                        @endforelse
                    @endisset
                </select>
            </div>

            <div class="form-group">
                <label>Menu:</label>
                <select name="menu_id">
                    @isset($menus)
                        @forelse ($menus as $menu)
                            <option  {{ $order->menu->id == $menu->id ? 'selected' : '' }}  value="{{ $menu->id }}">{{ $menu->name }}</option>
                        @empty
                            <option value="0" disabled>Nothing </option>
                        @endforelse
                    @endisset
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="edit">


            </form>


</div>

@endsection
