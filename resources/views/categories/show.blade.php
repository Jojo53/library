<html>
    <head>
        <title>Affichage des Categories</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <h1>Affichage des Categories</h1>
    @csrf
    <div id="app">
    <test content="Categorie :" fname="category"></test>
    </div>
    <table>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
            </tr>
        @endforeach
    </table>
</html>