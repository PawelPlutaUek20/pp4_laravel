<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>

        <div>
            Create
            <form action="{{ route('create') }}" method="POST">
                @csrf

                <input name="opening_name"></input>
                <input name="name"></input>
                <input name="pgn"></input>

                <input type="submit"></input>

            </form>
        </div>

    </body>
</html>

