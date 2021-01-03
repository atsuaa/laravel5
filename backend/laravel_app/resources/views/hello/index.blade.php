<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hello</title>
    </head>
    <body>
        <p>{{$msg}}</p>
        @foreach($data as $line)
        <p>{{$line}}</p>
        @endforeach
    </body>
</html>
