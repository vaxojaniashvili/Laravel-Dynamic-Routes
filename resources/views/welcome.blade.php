<html>
<head>
    <title>welcome</title>
</head>
<body style="width: 100%;height: 100vh;display: flex;justify-content: center;align-items: center">
<form action="/greet" method="post" style="display: flex;flex-direction: column;width: 200px">
    @csrf
    <label for="text">Please enter your name</label>
    <input type="text" id="text" name="textInput">
{{--    <label for="number">Please enter your age</label>--}}
{{--    <input type="number" id="number">--}}
    <button type="submit">Click</button>
</form>
</body>
</html>
