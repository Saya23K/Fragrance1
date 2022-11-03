<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>管理者ページ</title>
    </head>
    <body>
        
        <h2>管理者ページ</h2>
        
        <a href="{{ url('/admin/fragrances') }}"> 登録香水一覧 </a>
        
        <a href="{{ url('/admin/brands') }}"> ブランドマスター </a>
        
        <a href="{{ url('/admin/components') }}"> 成分マスター </a>
    </body>
</html>