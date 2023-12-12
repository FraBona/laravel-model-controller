<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        </head>

        <body>
          @foreach ($movies as $movie)
              <h1>{{ $movie->title}}</h1>
              <p>{{$movie->original_title}}</p>
              <p>{{$movie->nationality}}</p>
              <p>{{$movie->date}}</p>
              <p>{{$movie->vote}}</p>
          @endforeach
        </body>

        </html>