<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
</head>
<style>
    body{
        padding-top: -10px;
        padding-bottom: 100px;
        width: 100px;
        background-color: #fff;
        font-family: "Raleway", sans-serif;
        }
     .product-image{
        width:500px;
        height:500px;
        border-radius: 15px;
        object-fit: contain;
        padding-right: 50px;
        margin-top: -100px;
    }

    .button-group {
        display: flex;
        align-items: center;
        padding: 1em;
        position: absolute;
        top: 300px;
        right: 100px;
    }

    .logo {
        width: 400px; 
        margin-left: 20px;
        margin-bottom: 10px;
        
        
    }

    .description{
        text-align: left;
        justify-content: left;
        margin: auto;
        margin-top: -100px;
        font-family: "Raleway", sans-serif;
        text-align: justify;
       

    }


</style>

<body class="container">
<div class="header">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
        
           
        </form>
    </div>
  
    <br>
    <section class="container mt-4">
        <div class="d-flex flex-item align-items-center">
            <div>
                <img src="{{ asset('img/11.jpg') }}" class="product-image" alt="...">
            </div>
            
            <div class="description">
       <br> <h1 class="text-danger">Everyday Ring Set</h1> <br>
        <h1 class="text-danger"> ₱399.00</h1> <br>
        {{-- <h3 class="text-danger-bg-subtle"> Details:</h3><br> --}}
        <h5>Step into the spotlight with this vibrant ring set, a riot of color and charm that’s as unique as you are! With funky shapes and a rainbow of hues, it’s your ticket to a style that’s all about fun and individuality.<br>

            
            <br> <li>Made with 14k gold-plated material</li>
            <li>Adjustable to fit sizes 5-9</li>
            <li>Waterproof and sweatproof</li> 
            
</h5>
    
</h5>
<br> <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-danger btn-lg" type="button">Add To Cart</br>
</div>
            
        </div>
    </div>


</section>
</body>
</html>