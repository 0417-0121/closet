<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Clothes</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="cloth_name">
            {{ $cloth->category_id }}
        </h1>
        <div class='clothes'>
                <div class='cloth_detail'>
                    <p>{{ $cloth->temp_id }}</p>
                    <p>{{ $cloth->category_id }}</p>
                    <p>{{ $cloth->color_id }} </p>
                    <p>{{ $cloth->comment }}</p>
                </div>
        </div>
        <div class="footer">
            <a href="/clothes">戻る</a>
        </div>
    </body>
</html>
        
        