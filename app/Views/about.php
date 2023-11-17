<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('home') ?>">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('about') ?>">About</a>
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

    <div class="container mt-4 text-center">
        <h1>About Us</h1>
        <p>Welcome to My Bakery, where passion meets flavor! At My Bakery, we take pride in delivering the finest and most delightful baked goods to our customers.</p>

        <h2>Our Story</h2>
        <p>Founded with a love for baking and a commitment to quality, My Bakery has become a beloved destination for those seeking mouthwatering treats. Our journey began with a simple goal - to create baked goods that not only satisfy the taste buds but also warm the heart.</p>

        <h2>Our Mission</h2>
        <p>At My Bakery, we strive to bring joy to every customer through our delicious creations. Our mission is to craft each pastry and loaf of bread with care, using only the finest ingredients. Whether you're here for a sweet indulgence or a daily bread, we aim to make your experience with us truly special.</p>

        <h2>Visit Us</h2>
        <p>We invite you to visit our bakery and experience the aroma of freshly baked goods. Feel free to explore our diverse menu and find your new favorite treat. Our friendly staff is here to assist you and ensure you leave with a smile.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>