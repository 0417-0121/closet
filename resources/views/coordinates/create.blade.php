<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Closet</title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <h1>服を選んでください</h1>
        <form action="/coordinates" method="POST">
            @csrf
            <div class="wear_cloth">
                <h2>Name</h2>
                <input type="text" name="coordinate[wear_cloth]" placeholder="コーディネート名"/><br><br>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>