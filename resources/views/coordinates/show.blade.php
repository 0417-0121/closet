<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Closet</title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="wear_cloth">
            {{$coordinate->wear_cloth}}
        </h1>
        <div class="detail">
            <div class="wear_date">
               <p class="date">{{$coordinate->created_at}}</p>
               <a href="/">日付変更</a><br>　
               <!--URL入れる<a href=“https://bing.com”>Bing</a>-->
            </div>
             <div class="edit">
                <a href="/coordinates/{{ $coordinate->id }}/edit">コーディネート名を変える</a><br><br>
            </div>
        </div>
         <form action="/coordinates/{{ $coordinate->id }}" id="form_{{ $coordinate->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $coordinate->id }})">削除</button> 
                    </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>