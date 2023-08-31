<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Clothes</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>服の情報を入力</h1>
        <form action="/clothes" method="POST">
            @csrf
            <div class="temperture">
                <h2>気温</h2>
                <input type="number" name="cloth[temp_id]" placeholder="気温を入力"/>
                <a href="/clothes">＞</a>
            </div>
            <div class="category">
                <h2>カテゴリー</h2>
                <input type="text" name="cloth[category_id]" placeholder="カテゴリーを入力"/>
                <a href="/clothes">＞</a>
            </div>
            <div class="color">
                <h2>色</h2>
                <input type="text" name="cloth[color_id]" placeholder="色を入力"/>
                <a href="/clothes">＞</a> 
                <!-- URL変える -->
            </div>
            <div class="memo">
                <h2>メモ</h2>
                <textarea name="cloth[comment]" placeholder="メモしたいことを書き込んでください"></textarea><br><br>
            </div>
            <input type="submit" value="保存"/><br><br>
        </form>
        <div class="footer">
            <a href="/clothes">戻る</a>
        </div>
    </body>
</html>
        
        