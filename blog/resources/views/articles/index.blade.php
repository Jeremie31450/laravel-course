<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
</head>
<body>
    
    @forelse ($articles as $article)
        <h2>{{ $article['title'] }}</h2>
        <p>{{ $article['content'] }}<p>
    @empty
        <p>No users</p>
    @endforelse
</body>
</html>