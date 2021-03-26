<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000000" />
        <title>Laravel</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2"
                crossorigin="anonymous"></script>
        <script src="https://unpkg.com/@chrisoakman/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.js"
                integrity="sha384-8Vi8VHwn3vjQ9eUHUxex3JSN/NFqUg3QbPyX8kWyb93+8AC/pPWTzj+nHtbC5bxD"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chess.js/0.10.2/chess.js"></script>
        <link rel="stylesheet"
            href="https://unpkg.com/@chrisoakman/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.css"
            integrity="sha384-q94+BZtLrkL1/ohfjR8c6L+A6qzNH9R2hBLwyoAfu3i/WCvQjzL2RQJ3uNHDISdU"
            crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    </head>
    <body>
        
        <div class="container">
            @include('sidebar')
            <div class="header">
                <h1>{{$opening->name}}</h1>
            </div>
            <div class="main-content">
                <div class="readOnly" id="myBoard"></div>
            </div>
            <div class="navigation-menu">

                <div class="variation">
                    @foreach($opening->variations as $variation)

                        <div onclick="setBoard('{{ $variation->pgn }}')" class="row">
                            <span>1</span>
                            <h3>{{$variation->name}}</h3>
                        </div>
                            
                    @endforeach
                </div>
                <div class="moves">
                    <p class="pgn"></p>
                </div> 

                <div class="action">
                    <button class="previous round" onclick="previousMove()">&#8249;</button>
                    &nbsp&nbsp
                    <button  class="next round" onclick="nextMove()">&#8250;</button>
                </div>
            </div>
        </div>
        <script src="{{ URL::asset('js/visualizer.js') }}"></script>
        <noscript>Sorry, your browser does not support JavaScript!</noscript>
    </body>
</html>

