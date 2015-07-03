<html>
    <head>
        <meta charset="utf-8" />
        <title>Article {{ $article->getTitle() }}</title>
    </head>

    <body>
        <h1>{{ $article->getTitle() }}</h1>
        <p>{{ $article->getContent() }}</p>
    </body>
</html>