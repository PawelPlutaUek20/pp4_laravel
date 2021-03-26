<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000000" />
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">

    </head>
    <body>
        @include('sidebar')
        <h1>Chess Openings</h1><br><br>
        
        <div class="cards">
        @foreach($opening as $opening_name)
            <a class="card" href="{{ route('opening', ['opening' => $opening_name->id]) }}">
                <div>
                    {{$opening_name->name}}
                    <div>
                        <ul>
                        @foreach($opening_name->variations as $variation_name)

                            <li>{{$variation_name->name}}</li>

                        @endforeach
                        </ul>
                    </div>
                </div>
            </a>
        @endforeach
        </div>

    </body>
</html>

