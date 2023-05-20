<?php $header = "User page header";?>
<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>
    <!DOCTYPE html>
<html>
<head>
<title>MENU</title>
<style>.button-group p { margin-top: 10px; font-size: 16px; font-weight: bold; color: #333;} .button-group button img { width: 300px; height: 300px; } .button-group { display: flex; flex-wrap: wrap; margin-bottom: 20px; } .button-group button { width: calc(33.33% - 10px); margin-right: 10px; border: none; padding: 0; background-color: transparent; } .button-group button:nth-child(3n) { margin-right: 0; } .button-group img { width: 100%; height: auto; display: block; } .form { margin-top: 20px; } </style>
<body>
<h1>MENU</h1>
<p>Choose your Pizza:</p>
<div class="button-group">
<div>
<button id="Áfonyás">

            <img src="../img/pizza-1.jpg" alt="Rock">

            <p>Áfonyás King Size: 1250 Ft</p>

        </button>

        <button id="Babos">

            <img src="../img/pizza-2.jpg" alt="Paper">

            <p>Babos Knight Size: 1150 Ft</p>

        </button>

        <button id="Barbecue chicken">

            <img src="../img/pizza-3.jpg" alt="Scissors">

            <p>Barbecue Chicken Knight Size: 1150 Ft</p>

        </button>

        <button id="Betyáros">

            <img src="../img/pizza-4.jpg" alt="Paper">

            <p>Betyáros King Size: 1250 Ft</p>

        </button>

        <button id="Caribi">

            <img src="../img/pizza-5.jpg" alt="Paper">

            <p>Caribi Page Size: 850 Ft</p>

        </button>

        <button id="Country">

            <img src="../img/pizza-6.jpg" alt="Paper">

            <p>Country King Size: 1250 Ft</p>

        </button>

        <button id="Csabesz">

            <img src="../img/pizza-7.jpg" alt="Paper">

            <p>Csabesz King Size: 1250 Ft</p>

        </button>

        <button id="Csupa sajt">

            <img src="../img/pizza-8.jpg" alt="Paper">

            <p>Csupa Sajt (Vegetarian) Knight Size: 1150 Ft</p>

        </button>

        <button id="Erdő kapitánya">

            <img src="../img/pizza-9.jpg" alt="Paper">

            <p>Erdő Kapitánya Page Size: 850 Ft</p>

        </button>

        <button id="Erős János">

            <img src="../img/pizza-10.jpg" alt="Paper">

            <p>Erős János Knight Size: 1150 Ft</p>

        </button>
</div>
<div class="form">
<a href="">Go to Homepage</a>
</div>
</body>
</html>
</x-app-layout>
