<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Clothes</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">服の詳細の編集</h1>
    <div class="content">
        <form action="/clothes/{id}/update" method="POST">
            @csrf
            @method('PUT')
        <div class='clothes'>
                <div class='cloth_detail'>
                    <h3>カテゴリー</h3>
　　　　　　　　　   <option value="{{$category->id}}" @if($category->id == $cloth->cloth_name) selected @endif>{{$category->cloth_name}}</option>
                    <h3>気温</h3>
                     <option value="{{$temperature->id}}" @if($temperature->id == $cloth->temperature_id) selected @endif>{{$temperature->temperature}}</option>
                    <h3>色</h3>
                    <option value="{{$color->id}}" @if($color->id == $cloth->color_id) selected @endif>{{$color->color}}</option>
                    <h3>コメント</h3>
                    <input type="text" name="comment" value="{{ $cloth->comment }}">
                </div>
                <div class="favorite">
                <h2>お気に入り</h2>
                <input type="radio" name="cloth[favorite]" value="1" checked />お気に入りする
                <input type="radio" name="cloth[favorite]" value="0" />お気に入りにしない
            </div>
        </div>
        </div>
                <input type="submit" value="保存">
        </div>
        </form>
</html>
    