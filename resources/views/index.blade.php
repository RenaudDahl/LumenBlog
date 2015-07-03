<html>
    <head>
        <meta charset="utf-8" />
        <title>Liste des articles</title>
    </head>

    <body>
        <h1>Liste des articles</h1>
        <ul>
            @foreach($output as $array)
                <li><a href=$array[1];>{{ $array[0]; }}</a></li>
            @endforeach
        </ul>
    </body>
</html>