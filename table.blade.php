<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <table border="1">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Operations</th>

        </tr>
    </thead>
        <tr>
            @foreach ($users as $item )
                <tr>
                    <td>{{ $item['id']}}</td>
                    <td>{{ $item['username'] }}</td>
                    <td>{{ $item["email"] }}</td>
                    <td>{{ $item['age']}}</td>
                    <td>
                        <a href="{{ route("delete",$item['id']) }}">Delete</a>
                        <a href="{{ route("edit",$item['id']) }}">Update</a>
                    </td>
                </tr>
            @endforeach
        </tr>
    </table>
    {{ $users->links() }}
</body>
</html>

<style>
    .w-5{
        display: none;

    }

    span a{
        background: black;
        color: white;
        padding: 10px;
        margin-right: 5px;
    }
</style>


