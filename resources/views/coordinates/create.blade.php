<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Closet</title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <h1>着たい服を写真から選んでください</h1>
        @foreach($clothes as $cloth)
        <figure>
            <img src="{{ $cloth->image_url }}" alt="画像が読み込めません。" width="250" height="250"/>
            <figcaption>{{$cloth->id}}</figcaption>
        </figure>   
        @endforeach
        <form action="/coordinates" method="POST">
            @csrf
            <div class="wear_cloth">
                <h2>Name</h2>
                <input type="text" name="coordinate[wear_cloth]" placeholder="コーディネート名"/>
            </div>
             <select name="coordinate_image[]" multiple> 
                @foreach($clothes as $cloth)
                    <option value="{{ $cloth->id }}">{{ $cloth->id }}</option>
                @endforeach
            </select>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
    </body>
</html>