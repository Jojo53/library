<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Affichage des Sous-Categories</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <h1>Affichage des Sous-Categories</h1>
    @csrf
    <div id="app">
    <selectform content="Sous-Categories : " fname="subcategory" :table="{{$subcategories}}"/>
    </div>
</html>