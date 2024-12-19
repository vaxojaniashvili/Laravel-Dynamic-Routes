<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>
<body>
    <h1>Jobs!</h1>
    <ul style="display: flex;flex-direction: column;gap: 15px">
        @foreach ($jobs as $job)
            <a style="text-decoration: none;color: #2d3748;width: 450px" href="/jobs/{{$job["id"]}}">
                <li style="border: 1px solid black;width: 450px;padding: 10px;cursor: pointer">
                    Title : <strong>{{ $job["title"] }}</strong>,  Salary: <strong>{{ $job["salary"] }}</strong>, Location: <strong>{{ $job["location"] }}</strong>
                </li>
            </a>
        @endforeach
    </ul>
</body>
</html>
