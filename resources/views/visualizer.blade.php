<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>

        <div>
            <h1>{{$opening->name}}</h1>
            <ul>
                @foreach($opening->variations as $variation)
                    <li>{{$variation->name}}</li>
                @endforeach
            </ul>
        </div>
        

    </body>
</html>

