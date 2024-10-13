<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        h1 {
            text-align: center;
        }

        .action {
            text-align: center;
        }

        .action a button {
            background-color: #04AA6D;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;



        }
    </style>


</head>

<body>
    <h1>Welcome To our Subsciption System</h1>

    <div class="action">
        <a href="{{route('log_in')}}"><button type="button">Log In</button></a>

        <a href="{{route('form')}}"><button type="button">Register</button></a>

    </div>

</body>

</html>