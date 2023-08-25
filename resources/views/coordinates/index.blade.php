<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Closet</title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>保存したコーデ一覧</h1>
        <div class='coordinates'>
            @foreach ($coordinates as $coordinate)
                <div class='coordinate'>
                    <p class='coordinate_name'>{{ $coordinate->wear_cloth}}</p><br>
                </div>
            @endforeach
        </div>
    </body>
</html>