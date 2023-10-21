@extends('admin.layout.app')

@section('title','Reservations Page')

@section('content')

<a class="btn btn-warning mb-5" href="{{ route('resevation.create') }}">Add Reservation</a>

        @if (session('message'))
            <div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
        @endif

<table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
             <th>Email</th>
             <th>phone</th>
            <th>Res_date</th>
            <th>guest_number</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($reservation as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->res_date }}</td>
                    <td>{{ $contact->guest_number }}</td>
                    <td class="d-flex">

                        <a href="{{route('resevation.edit', $contact->id)}}" class="btn btn-primary custom-btn"><i class="fa fa-close"></i>Edit</a>

                        <form action="{{ route('resevation.destroy', $contact->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-contact btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
