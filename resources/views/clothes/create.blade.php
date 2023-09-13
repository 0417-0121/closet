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
        <form action="/clothes" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="image">
                <input type="file" name="image">
            </div>
            <div class="temperture">
                <h2>気温</h2>
                <select name="cloth[temperature_id]">
                    @foreach($temperatures as $temperature)
                    <option value="{{$temperature->id}}">{{$temperature->temperature}}</option>
                    @endforeach
                </select>
            </div>
            <div class="category">
                <h2>カテゴリー</h2>
                <select name="cloth[category_id]">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->cloth_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="color">
                <h2>色</h2>
                <select name="cloth[color_id]">
                    @foreach($colors as $color)
                    <option value="{{$color->id}}">{{$color->color}}</option>
                    @endforeach
                </select>
            </div>
            <div class="memo">
                <h2>メモ</h2>
                <textarea name="cloth[comment]" placeholder="メモしたいことを書き込んでください"></textarea><br><br>
            </div>
            <div class="favorite">
                <h2>お気に入り</h2>
                <input type="radio" name="cloth[favorite]" value="1" checked />お気に入りする
                <input type="radio" name="cloth[favorite]" value="0" />お気に入りにしない
            </div>
            <input type="submit" value="保存"/><br><br>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
    </body>
</html>
        
        