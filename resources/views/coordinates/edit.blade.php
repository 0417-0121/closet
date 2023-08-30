<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Closet</title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <h1>編集画面</h1>
         <form action="/coordinates/{{ $coordinate->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="wear_cloth">
                <h2>Name</h2>
                <input type="text" name="coordinate[wear_cloth]" value="{{ $coordinate->wear_cloth }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </body>
</html>
