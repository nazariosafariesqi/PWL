<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NieR</title>
    <link rel="icon" type="image/x-icon" href="img/kepalaEmil.jpg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/landingPage.css" rel="stylesheet" />
    <link href="css/produk.css" rel="stylesheet" />
</head>

<body class="signup-section">

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Halaman Pembelian</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/home">Home</a></li>
                </ul>

        <ul class="navbar-nav mt-2 mt-lg-0">
        <li class="nav-item">
        <a href="/cart" class="nav-link">
        Cart(0)
        <svg xmlns="http://www.w3.org/2000/svg" 
        width="24" height="24" viewBox="0 0 24 24" fill="none" 
        stroke="currentColor" stroke-width="2" stroke-linecap="round" 
        stroke-linejoin="round" class="feather feather-shopping-cart">
        <circle cx="9" cy="21" r="1"></circle><circle cx="20" 
        cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
        </path></svg>
        
        </a>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
            </div>
        </div>
    </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">3 items</div>
                </div>
            </div>
            <div class="row border-top border-bottom">

                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="img/Yonah.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">PC</div>
                        <div class="row">Nier : Automata</div>
                    </div>
                    <div class="col"> 
                      <form method="post" action="">
                        @csrf
                        <input type="text" name="jumlah_pesan" class="form-control mt-2" required="">
                        <button type="submit" class="btn btn-primary mt-2">
                          <i class =fa fa-shopping-cart></i>Masukkan
                        </button>
                      </form>
                       
                    </div>
                    <div class="col">Rp.844.569 </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="img/Yonah.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Playstation</div>
                        <div class="row">Nier : Automata</div>
                    </div>
                    <div class="col"> 
                      <form method="post" action="">
                        @csrf
                        <input type="text" name="jumlah_pesan" class="form-control mt-2" required="">
                        <button type="submit" class="btn btn-primary mt-2">
                          <i class =fa fa-shopping-cart></i>Masukkan
                        </button>
                      </form>
                       
                    </div>
                    <div class="col">Rp.854.990 </div>
                </div>
            </div>
            <div class="row border-top border-bottom">
            <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="img/Yonah.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">XBOX</div>
                        <div class="row">Nier : Automata</div>
                    </div>
                    <div class="col"> 
                      <form method="post" action="">
                        @csrf
                        <input type="text" name="jumlah_pesan" class="form-control mt-2" required="">
                        <button type="submit" class="btn btn-primary mt-2">
                          <i class =fa fa-shopping-cart></i>Masukkan
                        </button>
                      </form>
                       
                    </div>
                    <div class="col">Rp.848.998 </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS</div>
                <div class="col text-right">RP. ...</div>
            </div>
            <form>
                <p>SHIPPING</p> <select>
                    <option class="text-muted">Standard-Delivery- Rp.50.000</option>
                    <option class="text-muted">SiCepat-Delivery- Rp.100.000</option>
                    <option class="text-muted">LangsungSampai- Rp.987.189.111.232.425.000</option>
                </select>
                <p>GIVE CODE</p> <input id="code" placeholder="Enter your code">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">RP. ...</div>
            </div> <button class="btn">CHECKOUT</button>
        </div>
    </div>
</div>
</html>