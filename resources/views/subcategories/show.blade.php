<html>
    <head>
        <title>Affichage des Sous-Categories</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <h1>Affichage des Sous-Categories</h1>
    @csrf
    <div id="app">
    <selectform content="Sous-Categories : " fname="subcategory" :table="{{$subcategories}}"></selectform>
    </div>
</html>