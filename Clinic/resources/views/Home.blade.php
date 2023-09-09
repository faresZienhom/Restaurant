<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .dark {
            background: #273c4f;
        }
    </style>
</head>

<body>
    {{-- layout  --}}
    {{-- componants --}}
    {{-- add adminlte to our dashboard --}}
    {{-- complete crud --}}
    {{-- relations --}}
    <table>
        <thead>
            <th>id</th>
            <th>user_name</th>
            <th>salary</th>
            <th>email</th>
            <th>phone</th>
            <th>gender</th>
            <th>image</th>
            <th>created_at</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="{{ $loop->first ? 'dark' : '' }}">
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['user_name'] }}</td>
                    <td>{{ $user['salary'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['phone'] }}</td>
                    <td>{{ $user['gender'] }}</td>
                    <td>{{ $user['image'] }}</td>
                    <td>{{ $user['created_at'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
