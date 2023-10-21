

@extends('admin.layout.app')

@section('title','Branches page')
@section('content')
    <a href="{{ route('branches.create') }}" class="btn btn-primary">Add  Branches</a>
    <table class="table">
        <table class="table-bordered w-100">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>Street</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
                @forelse ($branches as $branch)
                    <tr>
                        <td>{{ $branch->id }}</td>
                        <td>{{ $branch->city }}</td>
                        <td>{{ $branch->street }}</td>
                        <td>{{ $branch->phone }}</td>
                        <td>
                        <a href="{{route('branches.edit', $branch->id)}}" class="btn btn-primary custom-btn"><i class="fa fa-close"></i>Edit</a>
                        <form action="{{route('branches.destroy', $branch->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">There is no branches yet</div>
                @endforelse





        </tbody>
        </table>
@endsection
