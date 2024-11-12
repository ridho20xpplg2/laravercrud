<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
</head>
<body>
    <h1>Ini Berita</h1>
    @foreach($news as $row)
    <div>
        <img src="storage/{{ $row->picture }}"/>
        <h6>{{ $row->title }}</h6>
        <p>{{ $row->content }}</p>
    </div>
    @endforeach
</body>
</html>