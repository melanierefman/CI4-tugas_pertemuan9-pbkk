<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">My Bakery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('home') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('faq') ?>">FAQ</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center">Welcome to My Bakery</h1>
        <p class="text-center">Discover the finest selection of freshly baked bread and pastries at My Bakery. Our commitment to quality and taste ensures that every bite is a delightful experience.</p>

        <h2>Our Specialties</h2>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artisan Sourdough</h5>
                        <p class="card-text">A classic sourdough with a crispy crust and a soft, airy interior. Perfect for any occasion. Perfect for any occasion or meal.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Croissant</h5>
                        <p class="card-text">Indulge in the rich flavors of our chocolate-filled croissants. A heavenly treat for chocolate lovers.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Red Velvet Cake</h5>
                        <p class="card-text">Celebrate special moments with our moist and decadent red velvet cake. A delightful dessert for any occasion.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cinnamon Rolls</h5>
                        <p class="card-text">Savor the sweetness and warmth of our freshly baked cinnamon rolls. An irresistible treat for cinnamon enthusiasts.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Blueberry Muffins</h5>
                        <p class="card-text">Enjoy the burst of blueberry goodness in every bite of our moist and flavorful blueberry muffins.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cheese Danish</h5>
                        <p class="card-text">Delight in the rich and creamy texture of our cheese danish pastry. A perfect choice for breakfast or a sweet snack.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>