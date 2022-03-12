<h1 align="center">FoodAPI</h1>

<h3><ins>Lancer l'API :</ins></h3>
<ol>
    <li>Allez dans le dossier "example-app"</li>
    <li>Tapez dans la console : <code>php artisan serve</code></li>
    <li>Dans l'URL d'un navigateur, tapez : <code>127.0.0.1:8000/food</code></li>
</ol>
<br/>
<hr/>
<br/>
<h2 align="center"><ins>Explications de l'API</ins><h2>
<h3><ins>Page principale :</ins></h3>
<p>Elle affiche des recettes prises sur <a target="_blank" href="https://spoonacular.com/food-api">spoonacular</a>.</p>
<br/>
<p>Champs dans la navigation :</p>
<ol>
    <li>Permet de rentrer un ingrédient (en anglais) afin de faire une recherche en fonction de celui-ci</li>
    <li>Permet d'afficher un nombre défini de recettes</li>
</ol>
<br/>
<hr/>
<hr/>
<br/>
<h3><ins>Page secondaire :</ins></h3>
<p>Lorsque l'utilisateur clique sur l'une des recettes, une seconde page s'ouvre pour afficher plusieurs informations qui sont :</p>
<ol>
    <li>Un sommaire de la recette</li>
    <li>Les ingredients nécessaires à la recette</li>
    <li>Les équipements nécessaires à la recette</li>
    <li>Les étapes de la recette</li>
</ol>
<br/>
<hr/>
<hr/>
<br/>
<h3><ins>Structure :</ins></h3>
<pre>
foodapi
└───www
    └───example-app
        ├───app
        │   ├───Http
        │   │   └───Controllers
        |   |       └───FoodController.php
        ├───resources
        │   └───views
        │       ├───errors
        |       |   └───500.blade.php
        |       ├───food.blade.php
        │       ├───fooddetails.blade.php
        |       └───welcome.blade.php
        └───routes
            └───web.php
</pre>
<br/>
<p>MVC :</p>
<ul>
    <li><code>web.php</code> : Modèle - Traite ce que l'utilisateur a rentré directement ou indirectement dans l'URL</li>
    <li><code>FoodController.php</code> : Contrôleur - Traite les infos reçues par le modèle (<code>web.php</code>). C'est là que l'API est appelée</li>
    <li><code>welcome.blade.php</code> : Vue - Affiche la page de base de laravel</li>
    <li><code>food.blade.php</code> : Vue - Affiche les recettes suivant ce que l'utilisateur a rentré</li>
    <li><code>fooddetails.blade.php</code> : Vue - Affiche la recette cliquée sur la page "<code>food.blade.php</code>"</li>
    <li><code>500.blade.php</code> : Vue - Affiche les erreurs liées à celle de la 500</li>
</ul>
