<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Archivio Comics</title>
</head>

<body>
    @foreach ($comics as $comic)
        <div>
            {{ $comic->title }}
            <p>test ciao</p>
        </div>
    @endforeach
</body>

</html>
