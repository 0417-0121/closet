<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Clothes</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>保存した服一覧</h1>
        <a href='/clothes/create'>服の保存</a>
        <div class='clothes'>
            @foreach ($clothes as $cloth)
                <div class='cloth'>
                    <h2 class='title'>
                        <a href="/clothes/{{ $cloth->id }}">{{ $cloth->category_id }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
    </body>
</html>

