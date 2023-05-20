    <?php $header = "Introduction page header";?>
    <x-app-layout>
        <x-slot name="header">
            {{ $header }}
        </x-slot>
        <!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-container">
            <h1>Welcome, !</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <h2>About The Us</h2>
                        <p>Welcome to RandomPizza, your ultimate destination for mouthwatering, artisanal pizzas that will tantalize your taste buds and leave you craving for more. We are passionate about creating the perfect pizza experience, combining the finest ingredients, traditional recipes, and a commitment to exceptional quality.
                        At RandomPizza, we believe that pizza is not just a meal; it's a celebration of flavors and a time-honored tradition. Our dedicated team of expert chefs and pizza enthusiasts meticulously crafts each pizza, ensuring that every bite delivers a burst of deliciousness. From the moment you sink your teeth into our crust, you'll know you've found something truly special. </p>
                        <a href="{{ route('forum') }}" class="btn btn-primary">Comment</a>
                        <p><strong>Contact Information:</strong></p>
                        <p><strong>Name:</strong> RandomPizza </p>
                        <p><strong>Email:</strong> random.companyai@gmail.com </p>
                        <p><strong>Phone:</strong> (555) 555 555 55 55 </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h2>Location</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2727.0027916758263!2d19.643215075832504!3d46.88299363766619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743d0795a4cbfb7%3A0x1d6b1776878d61ae!2sHomokb%C3%A1nya%20Koll%C3%A9gium!5e0!3m2!1str!2shu!4v1683920955674!5m2!1str!2shu" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>Contact form</h2>
    <form method="POST" action="{{ url('create_contact') }}">
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

        <div class="card-footer">
            <button type="submit" class="btn btn-success"> Submit </button>
        </div>
       
    </form>
</body>
</html>
    </x-app-layout>
    <?php
    
