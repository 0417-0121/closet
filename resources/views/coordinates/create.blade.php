<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Closet</title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <h1>服を選んでください</h1>
        <form action="/coordinates" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="wear_cloth">
                <h2>Name</h2>
                <input type="text" name="coordinate[wear_cloth]" placeholder="コーディネート名"/>
                <p class="body__error" style="color:red">{{ $errors->first('wear_cloth') }}</p><br>
            </div>
            <div class="image">
                <input type="file" name="image"><br><br>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>