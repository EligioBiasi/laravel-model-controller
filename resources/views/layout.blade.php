<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <h1 class="text-center my-4">
            My Movies
        </h1>
        <div class="d-flex flex-wrap container">
            @foreach ($movies as $movie)
                <div class="card text-center me-2 mb-2">
                    <div class="card-body">
                    <h2 class="card-title">{{$movie->title}}</h2>
                    <h5 class="card-title">{{$movie->original_title}}</h5>
                    <p class="card-text">{{$movie->natinality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text">{{$movie->vote}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        @vite('resources/js/app.js')
    </body>
</html>