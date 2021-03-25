<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        
        <div>
        @foreach($opening as $opening_name)
            <a href="{{ route('opening', ['opening' => $opening_name->id]) }}">
                <div>
                    <h3>{{$opening_name->name}}</h3>
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

