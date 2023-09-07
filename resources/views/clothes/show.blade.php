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
            {{ $cloth->category->cloth_name }}
        </h1>
                <div>
                    <img src="{{ $cloth->image_url }}" alt="画像が読み込めません。"width="300" height="200"/>
                </div>
        <div class='clothes'>
                <div class='cloth_detail'>
                    <h3>気温</h3>
                    <p>{{ $cloth->temperature->temperature }}</p>
                    <h3>色</h3>
                    <p>{{ $cloth->color->color }} </p>
                    <h3>コメント</h3>
                    <p>{{ $cloth->comment }}</p>
                </div>
                <div class='favorite'>
                   <h3>お気に入り</h3> @if($cloth->favorite == 1) 
                   <p>お気に入りに登録されています</p> @else 
                   <p>お気に入りに登録されていません</p> @endif
                </div>
        </div>
        <div class="edit"><a href="/clothes/{{ $cloth->id }}/edit">編集</a><br><br></div>
        <div class="footer">
        <form action="/clothes/{{ $cloth->id }}" id="form_{{ $cloth->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $cloth->id }})">削除</button><br><br> 
        </form>
            <a href="/clothes">戻る</a>
        </div>
     </body>
     <script>
        function deletePost(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
     </script>
</html>
        
        