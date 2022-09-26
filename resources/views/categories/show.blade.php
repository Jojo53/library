<html>
    <head>
        <title>Affichage des Categories</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <h1>Affichage des Categories</h1>
    @csrf
    <div id="app">
    <selectform content="Categorie : " fname="category" :table="{{$categories}}"></selectform>
    </div>
</html>