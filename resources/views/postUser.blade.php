
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form role="form" action="{{ route('postOneUser') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="username" />
        <input type="submit" value="submit">
    </form>
</body>
</html>