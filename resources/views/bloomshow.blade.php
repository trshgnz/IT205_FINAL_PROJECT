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
    </style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/hoops1.jpg') }}" class="product-image" alt="Product Image">
        </div>
        <div class="col-md-6 description">
            <h1 class="text-danger">Bloom Hoop Earrings</h1>
            <h2 class="text-danger">₱199.00</h2><br>
            <p>
                Discover your new go-to earrings with our Bloom Hoop Earrings. Pairing a cute flower design with a classic gold hoops, this earrings is the perfect blend of simple and stylish.<br>
            </p>
            <ul>
                <br><li>14k gold plated brass hoops with plastic charm.\</li>
                <li>Hoop size: 0.7 inches.</li>
                <li>Flower charm: 0.7 inches.</li>       
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
