<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Movies</title>
</head>
<body>
    <header>
        <h1>Movies</h1>
    </header>
    <div class="container">
        @foreach($movies as $movie)
            <div class="card">
                <h2>{{$movie['title']}}</h2>
                <h3>Original title: {{$movie['original_title']}}</h3>
                <h5>Nationality: {{$movie['nationality']}}</h5>
                <h5>Date: {{$movie['date']}}</h5>
                <h5>Vote: {{$movie['vote']}}</h5>
            </div>
        @endforeach
    </div>
</body>
</html>