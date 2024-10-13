<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!DOCTYPE html>
    <html>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

    <body>

        <h2>Emaillist for admin</h2>

        <table style="width:100%">
            <tr>
                <th>Name</th>
                <th>Email</th>

            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name}}</td>
                <td>{{$user->email}}</td>

            </tr>
            @endforeach


    </body>

    </html>



</body>

</html>