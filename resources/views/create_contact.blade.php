
<?php $header = "Introduction";?>
<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>
   
    <h2>Contact form</h2>
    <form method="POST" action="introduction">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="phone">Phone number:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="adress">Adress:</label>
            <input type="text" class="form-control" id="adress" name="adress">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-app-layout>



