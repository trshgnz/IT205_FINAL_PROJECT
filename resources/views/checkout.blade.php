
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glitzy Hoopz - Checkout</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-family: "Raleway", sans-serif;
            color: black;
        }

        .product {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 8px;
        }

        .product img {
            max-width: 200px;
            margin-right: 20px;
        }

        .product-info {
            flex: 1;
            text-align: center;
            margin-bottom: 30px;
            font-family: "Raleway", sans-serif;
            color: black;
        }

        .product-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 25px;
            font-family: "Raleway", sans-serif;
            
        }

        .product-price {
            font-size: 20px;
            padding:2px;
            color: black;
            margin-bottom: 10px;
        }

        .quantity-input {
            width: 60px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            text-align: center;
            margin-right: 10px;
        }

        .checkout-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #FF99CD;
            color: #fff;
            border: none;
            font-family: "Raleway", sans-serif;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .checkout-button:hover {
            background-color:#FF99CD;
            font-family: "Raleway", sans-serif;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Shopping Bag</h1>
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            @if (is_null($cart))
                <div class="product">
                    <div class="product-info">
                        <div class="product-title">No products in cart</div>
                    </div>
                </div>
            @else
            @foreach($cart->products as $cartProducts)
            <div class="product">
                <img src="{{ asset($cartProducts->image) }}" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">{{ $cartProducts->name }}</div>
                    <div class="product-price">{{ number_format($cartProducts->price,2,'.') }}</div>
                    <input type="number" class="quantity-input" name="product_id[]" value="{{ $cartProducts->id }}" hidden>
                    <input type="number" class="quantity-input" name="quantity[]" value="{{ $cartProducts->pivot->quantity }}" min="1">
                </div>
            </div>
            @endforeach
            @endif
            
            <button type="submit" class="checkout-button">Checkout</button>
        </form>
    </div>
    </div>
</body>

</html>


