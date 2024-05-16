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
    
     
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#summercollection">Summer Collection</a></li>
        <li><a class="nav-link scrollto" href="#best_sellers">Best Sellers</a></li>
        <li><a class="nav-link scrollto" href="#shop">Shop</a></li>
        <li><a class="nav-link scrollto" href="{{route('login')}}">Log In</a></li>
        <li><a class="nav-link scrollto" href="{{route('register')}}">Register</a></li>


      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    
      <nav class="navbar bg-body-tertiary">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light"type="submit">Search</button>
        </form>
      </nav>
    </div>
    

  </header>
  <div>
  <section id="hero">
    <div class="hero-container">
      <div class="container">
        <div class="text-center mb-4">
            <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid">
        </div>
       
      <a href="#summercollection" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
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
                <div class="col">
                  <div class="card" style="width: 18rem;">
                      <img src="{{asset('img/jelly (2).jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-black">Jellypop Necklace</h5>
                        {{-- <a href="{{ route('jellypopshow') }}" class="text-decoration-none text-dark"> Jellypop Necklace <br></a> --}}

                        <p class="card-text text-black">₱299.00</p>
                        <button type="button" class="btn btn-outline-danger">
                          <a href="{{ route('jellypopshow') }}" class="text-decoration-none text-dark">View Product<br></a>
                        </button>
                    </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 18rem;">
                      <img src="{{asset('img/hoops1.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-black">Bloom Hoop Earrings</h5>
                        <p class="card-text text-black">₱199.00</p>
                        <button type="button" class="btn btn-outline-danger">
                        <a href="{{ route('bloomshow') }}" class="text-decoration-none text-dark">View Product<br></a>
                      </button>
                    </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 18rem;">
                      <img src="{{asset('img/NA.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-black">Hibiscus Layered Necklace</h5>
                        <p class="card-text text-black">₱499.00</p>
                        <button type="button" class="btn btn-outline-danger">
                        <a href="{{ route('hibiscusshow') }}" class="text-decoration-none text-dark">View Product<br></a>
                      </button>
                    </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 18rem;">
                      <img src="{{asset('img/summer.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-black">Summer Ring Set</h5>
                        <p class="card-text text-black">₱399.00</p>
                        <button type="button" class="btn btn-outline-danger">
                          <a href="{{ route('summershow') }}" class="text-decoration-none text-dark">View Product<br></a>
                        </button>
                    </div>
      
                    </section>

    <section id="best_sellers" class="services">
      <div class="container">

        <div class="section-title text-black">
          <h2>♡ Best Sellers ♡</h2>
          <p>most-loved by our glitzy hoopz community from funky ring sets, hoop earrings, beaded necklaces and more</p>
        </div>

      </ul>

      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/western wed.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-black">Western Wed Necklace</h5>
                  <p class="card-text text-black">₱599.00</p>
                  <button type="button" class="btn btn-outline-danger">
                    <a href="{{ route('westernshow') }}" class="text-decoration-none text-dark">View Product<br></a>
                  </button>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/11.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-black">Everyday Ring Set</h5>
                  <p class="card-text text-black">₱399.00</p>
                  <button type="button" class="btn btn-outline-danger">
                    <a href="{{ route('everydayshow') }}" class="text-decoration-none text-dark">View Product<br></a>
                  </button>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/fairy.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-black">Pink Fairy Earrings Set</h5>
                  <p class="card-text text-black">₱499.00</p>
                  <button type="button" class="btn btn-outline-danger">
                    <a href="{{ route('pinkshow') }}" class="text-decoration-none text-dark">View Product<br></a>
                  </button>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/full of love1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-black">Full of Love Bracelet</h5>
                  <p class="card-text text-black">₱299.00</p>
                  <button type="button" class="btn btn-outline-danger">
                    <a href="{{ route('loveshow') }}" class="text-decoration-none text-dark">View Product<br></a>
                  </button>
                </div>

              </section>
    <section id="shop" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>♡ Shop ♡</h2>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('img/hoops.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Duo Hoop Earrings</h4>
              <p>₱299.00</p>
              <button type="button" class="btn btn-danger">
              <a href="{{ route('duoshow') }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('img/bubble.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Marble Bubble Stack</h4>
              <p>₱399.00</p>
              <button type="button" class="btn btn-danger">
                <a href="{{ route('marbleshow') }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('img/ribb.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bow Ear Huggie</h4>
              <p>₱299.00</p>
              <button type="button" class="btn btn-danger">
                <a href="{{ route('bowshow') }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('img/flashy.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Flashy Ring Set</h4>
              <p>₱599.00</p>
              <button type="button" class="btn btn-danger">
                <a href="{{ route('flashyshow') }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('img/charm.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Friendship Charm Bracelet</h4>
              <p>₱599.00</p>
              <button type="button" class="btn btn-danger">
                <a href="{{ route('friendshow') }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>

          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('img/blooming.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Spring Is Here Ring Set</h4>
              <p>₱399.00</p>
              <button type="button" class="btn btn-danger">
                <a href="{{ route('springshow') }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>

          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('img/bh.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bear Hug Necklace</h4>
              <p>₱699.00</p>
              <button type="button" class="btn btn-danger">
                <a href="{{ route('bearshow') }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>

          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('img/sum.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bad Blood Necklace</h4>
              <p>₱999.00</p>
              <button type="button" class="btn btn-danger">
                <a href="{{ route('bloodshow') }}" class="text-decoration-none text-dark">View Product<br></a>
              <a href="portfolio-details.html" class="details-link" title="More Details">
            </div>
          </div>

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