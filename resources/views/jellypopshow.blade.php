<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glitzy Hoopz - Summer Collection</title>
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
    
    .collapse.navbar-collapse {
        display: flex;
        justify-content: center; 
    }

   
    .navbar-nav {
        display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 15px;
    color: #fff;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 12px;
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    }

    .nav-item {
    margin-right: 15px; 
    }

    .nav-link {
        position: cen;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 0 15px;
    }
    
</style>

    </style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <form method="POST" action="{{ route('welcome') }}" enctype="multipart/form-data">

            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>           
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/jelly (2).jpg') }}" class="product-image" alt="Product Image">
        </div>
        <div class="col-md-6 description">
            <h1 class="text-danger">Jellypop Necklace</h1>
            <h2 class="text-danger">₱299.00</h2><br>
            <p>
                Experience the magic of summer with this Jellypop Necklace! Adorned with multi-colored beads and charming butterfly pendants, this necklace is a playful addition to any summer outfit. It’s not just a piece of jewelry, it’s a statement of joy and color. Perfect for those who love to stand out and embrace their unique style.<br>
            </p>
            <ul>
                <br><li>Made with freshwater pearls and glass seed beads</li>
                <li>14 inch necklace with 2 inch extender</li>
                <li>Lobster clasp closure</li>     
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
