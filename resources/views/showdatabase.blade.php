<?php
$header = "Admin page header";
?>
<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php
    
    try {
        // Connect to MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=pizza', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        // Display error message and stop execution
        die('Erreur : ' . $e->getMessage());
    }

    if (isset($_POST["pizzaname"])) {
        $pizzaname = $_POST["pizzaname"];
        $requete = $bdd->prepare("SELECT * FROM pizza JOIN `order` ON pizza.pname=`order`.pname WHERE pizza.pname=:pizzaname");
        $requete->bindParam(':pizzaname', $pizzaname, PDO::PARAM_STR);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            echo "Pizza name: " . $resultat['pname'] . "<br>";
            echo "Category name: " . $resultat['categoryname'] . "<br>";
            echo "Vegetarian: " . $resultat['vegetarian'] . "<br>";
            echo "Order ID: " . $resultat['orderid'] . "<br>";
            echo "Amount: " . $resultat['amount'] . "<br>";
            echo "Taken: " . $resultat['taken'] . "<br>";
            echo "Dispatched: " . $resultat['dispatched'] . "<br>";
        } else {
            echo "No pizza found for this name";
        }

        $requete->closeCursor();
    } else {
        echo "Please provide a pizza name";
    }
    
    ?>
    <a href="{{ route('database') }}" class="btn btn-secondary">Back</a>
</x-app-layout>