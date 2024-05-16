<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
    <style>
        body {
            font-family: "Raleway", sans-serif;
            background-color: #fff;
        }

        .navbar-brand img {
            width: 220px; 
        margin-left: 20px;
        margin-bottom: -70px;
        margin-top: -60px;
       
        

        }

        .product-image {
            width: 500px;
            height: auto;
            border-radius: 15px;
            object-fit: contain;
            margin-top: 20px;
        }

        .description {
        
        justify-content: left;
        margin: auto;
        margin-top: 50px;
        font-family: "Raleway", sans-serif;
        font-size: 19px;
        text-align: justify;
       
        }
    </style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/ribb.jpg') }}" class="product-image" alt="Product Image">
        </div>
        <div class="col-md-6 description">
            <h1 class="text-danger">Bow Ear Huggies</h1>
            <h2 class="text-danger">₱299.00</h2><br>
            <p>
                Elevate your style with our Bow Ear Huggies. This set includes two unique earrings: one with a bow design encrusted with sparkling gemstones, and the other a hoop with a heart-shaped pendant featuring a pink stone. Both gold earrings beautifully complement the glittering gemstones.<br>
            </p>
            <ul>
                <li>Made with 18k gold plated on brass</li>
                <li>Cubis zirconia bow</li>
                <li>6.5-7 inches</li><br>
            </ul>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-danger btn-lg" type="button">Add To Cart</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-HtDYry7Tnrv19at7yjC24GMpmw9kczm+Vo12gNQyjRS9hQq8z+nj6LcHd3mlxiL2" crossorigin="anonymous"></script>
</body>
</html>
