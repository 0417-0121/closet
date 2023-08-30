<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Clothes</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>登録した服一覧</h1>
        <div class='clothes'>
            @foreach ($clothes as $cloth)
                <div class='cloth'>
                    <h2 class='category'>{{ $cloth->category_id }}</h2>
                    <p class='temperture'>{{ $cloth->temp_id }}</p>
                    <p class='color'>{{ $cloth->color_id }}</p>
                    <p class='comment'>{{ $cloth->comment }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
    </body>
</html>