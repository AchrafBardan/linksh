<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LinkSH</title>
</head>
<body>
    <form action="{{ route('newlink') }}" method="post">
        @csrf
        <input name="link" type="text" placeholder="URL">
        
    </form>
</body>
</html>