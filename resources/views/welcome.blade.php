<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Glitzy Hoopz</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <link href="{{ asset('css/style.css')  }}" rel="stylesheet">
 
 


</head>

<body>


  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">
    
     
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#summercollection">Summer Collection</a></li>
          <li><a class="nav-link scrollto" href="#best_sellers">Best Sellers</a></li>
          <li><a class="nav-link scrollto" href="#shop">Shop</a></li>
          <li><a class="nav-link scrollto" href="{{route('checkoutshow')}}">Cart</a></li>
         
  
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               More
              </a>
              <ul class="dropdown-menu">
                <li><a class="nav-link scrollto" href="{{route('login')}}">Log In</a></li>
                <li><a class="nav-link scrollto" href="{{route('register')}}">Register</a></li>
                
              </ul>
            </li>
          </ul>
            
    </nav>
    

  </header>
  <div>
  <section id="hero">
    <div class="hero-container">
      <div class="container">
        <div class="text-center mb-4">
            <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid">
        </div>
       
      
    </div>
  </section>

  <main id="main">


  

        <section id="summercollection" class="services">
            <div class="container">
      
              <div class="section-title text-black">
                <h2>♡ Summer Collection ♡</h2>
                <p>discover our newest funky and aesthetic pieces specially curated to make your summer a little brighter and colorful</p>
              </div>
      
            </ul>
            
            
            <div class="container text-center">
              <div class="row align-items-start">
                @foreach ($summerCollectionProducts as $summerCollectionProduct)
                <div class="col">
                  <div class="card" style="width: 18rem;">
                      <img src="{{asset($summerCollectionProduct->image)}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-black">{{ $summerCollectionProduct->name }}</h5>

                        <p class="card-text text-black">₱{{ number_format($summerCollectionProduct->price,2,'.') }}</p>
                        <button type="button" class="btn btn-outline-danger">
                          <a href="{{ route('product.show', $summerCollectionProduct->id) }}" class="text-decoration-none text-dark">View Product<br></a>
                        </button>
                    </div>
                    </div>
                </div>
                @endforeach
                
              </div>
            </div>
                    </section>

    <section id="best_sellers" class="services">
      <div class="container">

        <div class="section-title text-black">
          <h2>♡ Best Sellers ♡</h2>
          <p>most-loved by our glitzy hoopz community from funky ring sets, hoop earrings, beaded necklaces and more</p>
        </div>
        <div class="container text-center">
          <div class="row align-items-start">
            @foreach ($bestSellerProducts as $bestSellerProduct)
            <div class="col">
              <div class="card" style="width: 18rem;">
                  <img src="{{asset($bestSellerProduct->image)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-black">{{ $bestSellerProduct->name }}</h5>

                    <p class="card-text text-black">₱{{ number_format($bestSellerProduct->price,2,'.') }}</p>
                    <button type="button" class="btn btn-outline-danger">
                      <a href="{{ route('product.show', $bestSellerProduct->id) }}" class="text-decoration-none text-dark">View Product<br></a>
                    </button>
                </div>
                </div>
            </div>
            @endforeach
            
          </div>
        </div>
              </section>
    <section id="shop" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>♡ Shop ♡</h2>
        </div>

        <div class="row portfolio-container">
          @foreach ($complexGridProducts as $complexGridProduct)
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset($complexGridProduct->image)}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>{{ $complexGridProduct->name }}</h4>
              <p>₱{{ number_format($complexGridProduct->price,2,'.') }}</p>
              <button type="button" class="btn btn-danger">
              <a href="{{ route('product.show', $complexGridProduct->id) }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>

  </main>
  <footer id="footer">
    <div class="container">
      <h3>Glitzy Hoopz</h3>
      <p>Copyright © Glitzy Hoopz 2024   <br>
        All Right Reserved.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="credits">
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>