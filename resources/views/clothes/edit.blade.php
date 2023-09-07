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
        <img src="{{ $cloth->image_url }}" alt="画像が読み込めません。"width="300" height="200"/>
    <div class="content">
        <form action="/clothes/{id}/update" method="POST">
            @csrf
            @method('PUT')
        <div class='clothes'>
                <div class='cloth_detail'>
                    <h3>カテゴリー</h3>
                    <select name="cloth[category_id]">
                        @foreach($categories as $category)
                        @if($category->id==$cloth->category_id)
                        <option value="{{$category->id}}" selected>{{$category->cloth_name}}</option>
                        @else
                        <option value="{{$category->id}}">{{$category->cloth_name}}</option>
                        @endif
                        @endforeach
                    </select>
                    <h3>気温</h3>
                    <select name="cloth[temperture_id]">
                        @foreach($temperatures as $temperature)
                        @if($temperature->id==$cloth->temperature_id)
                        <option value="{{$temperature->id}}" selected>{{$temperature->temperature}}</option>
                        @else
                        <option value="{{$temperature->id}}">{{$temperature->ctemperature}}</option>
                        @endif
                        @endforeach
                    </select>
                    <h3>色</h3>
                    <select name="cloth[color_id]">
                        @foreach($colors as $color)
                        @if($color->id==$cloth->color_id)
                        <option value="{{$color->id}}" selected>{{$color->color}}</option>
                        @else
                        <option value="{{$color->id}}">{{$color->color}}</option>
                        @endif
                        @endforeach
                    </select>
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
    