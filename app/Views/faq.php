<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
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
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('faq') ?>">FAQ</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Frequently Asked Questions (FAQ)</h1>
        <br>

        <div class="accordion" id="faqAccordion">

            <!-- FAQ Item 1 -->
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        <div class="card-body">
                            What are your opening hours?
                        </div>
                    </h3>
                </div>

                <div class="card-body">
                    Our bakery is open from Monday to Saturday, from 9:00 AM to 6:00 PM. We are closed on Sundays.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="card">
                <div class="card-header" id="faqHeading1">
                    <h3 class="mb-0">
                        <div class="card-body">
                            Do you offer gluten-free options?
                        </div>
                    </h3>
                </div>

                <div class="card-body">
                    Yes, we do offer gluten-free options. Please ask our staff for the available gluten-free products.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="card">
                <div class="card-header" id="faqHeading1">
                    <h3 class="mb-0">
                        <div class="card-body">
                            Can I place a custom order for a special occasion?
                        </div>
                    </h3>
                </div>

                <div class="card-body">
                    Absolutely! We accept custom orders for special occasions. Please contact us in advance to discuss your specific requirements.
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>