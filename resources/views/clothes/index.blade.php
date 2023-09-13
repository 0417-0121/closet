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
        <?php $cloth = $clothes[0]; ?>
        <a href="/categories/{{ $cloth->category->id }}">{{ $cloth->category->name }}</a>
        <div class='clothes'>
            @foreach ($clothes as $cloth)
                <div class='cloth'>
                    <h2 class='title'>
                        <a href="/clothes/{{ $cloth->id }}">{{ $cloth->category->cloth_name }}</a>
                    </h2>
                </div>
                <div>
                    <img src="{{ $cloth->image_url }}" alt="画像が読み込めません。" width="200" height="200"/>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
    </body>
</html>

