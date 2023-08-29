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
               <a href="/">日付変更</a>　
               <!--URL入れる<a href=“https://bing.com”>Bing</a>-->
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>