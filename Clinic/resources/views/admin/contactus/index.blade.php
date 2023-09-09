@extends('adminlte::page')
@section('content')
    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
             <th>Email</th>
             <th>Subject</th>
            <th>phone</th>
            <th>Message</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
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
@section('js')
    <script>
        document.querySelectorAll('.delete-contact').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
