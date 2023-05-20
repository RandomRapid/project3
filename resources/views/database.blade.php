<?php $header = "Introduction page header";?>
<x-app-layout>
    <x-slot name="header">
        <h1>{{ $header }}</h1>
    </x-slot>
   
    <h1>Welcome to random pizza!</h1>
    <html>
         
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        </head>
        <body>
        <div id="container">
        <!-- zone de connexion -->
        <form method="post" action="{{ action('App\Http\Controllers\DbController@createPizzaForm') }}">
        @csrf
            <h1>View Pizza</h1>
            
            <label><b>Enter the pizza name</b></label>
            <input type="text" placeholder="Pizza name" name="pizzaname" required>

            <input type="submit" id='submit' value='Send' >
            <?php
            if(isset($_GET['erreur'])){
                
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            
            ?>
        </form>
        
        </div>
        </body>
    </html>
</x-app-layout>