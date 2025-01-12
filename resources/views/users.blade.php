<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job</title>
</head>
<body>
    @foreach ($users as $user)
        <p>{{$user["first_name"]}}</p>
    @endforeach
</body>
</html>
