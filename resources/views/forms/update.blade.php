<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="app">
    <h1>{{$title}}</h1>
    <form action="{{$action}}" method="post">
        @csrf
        <input type="hidden" name="id" :value="{{$values->id}}">
        <{{$template}} contents="{{json_encode($contents, TRUE)}}" values="{{json_encode($values, TRUE)}}"></{{$template}}>
        <input type="submit" value="Modifier">
    </form>
</body>
</html>