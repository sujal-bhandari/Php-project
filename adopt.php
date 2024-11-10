<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> -->
<!-- Link Style CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="public/adopt.css">
<title>website1</title>
</head>
<body>
    <!-- Navbar Section Start -->
<nav class="navbar navbar-expand-sm fixed-top">
    <a href="" class="navbar-brand"><span>F</span>ilozoos</a>
    <div>
    <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="adopt.php" class="nav-link">Adopt</a></li>
            <li class="nav-item"><a href="hire.php" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="apply.php" class="nav-link">Apply</a></li>
        </ul>
    </div>
</nav>
<!-- Navbar Section End -->
<section>
    <div class="header">
        <div>
            <div class="img">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="public/bg1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="public/bg2.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="Overlay"></div>
        </div>
        <div class="Content">
            <input type="text" class="font-weight-bold" placeholder="Search your Pet">
        </div>
    </div>
</section>

<!-- Adobt Section Start -->

<section>
    <div class="container adopt">
        <div class="content">
            <h6><span>A</span>dopt Now</h6>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="box">
                    <img src="public/c1.jpg" class="img-fluid" alt="">
                    <h5>Catiii</h5>
                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                    <button class="btn1">Adopt Now</button>
                </div>
            </div>
            <div class="col-sm-4 mid">
                <div class="box">
                    <img src="public/r1.jpg" class="img-fluid" alt="">
                    <h5>Rabiii</h5>
                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                    <button class="btn1">Adopt Now</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box">
                    <img src="public/d1.jpg" class="img-fluid" alt="">
                    <h5>dawgsiii</h5>
                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                    <button class="btn1">Adopt Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <!-- Adobt Section End -->


    <!-- second header section start -->

    <section>
        <div class="second_header">
            <div>
                <div class="img">
                    <img src="public/bg1.jpg" alt="">
                </div>
                <div class="Overlay"></div>
            </div>
            <div class="Content">
                <h6>Life Without <br> <span>Pets</span> is not Life!
                    <br><span>it's Waste.</span>
                </h6>
            </div>
        </div>
    </section>
    <!-- Second Header Section End -->
    <!-- buy now section strt -->
    <section>
        <div class="buy container">
            <div class="content">
                <h6><span>B</span>uy Now</h6>
            </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/buy1.jpg" class="img-fluid" alt="">
                                    <h5>Munchkin Cat</h5>
                                    <p>Dwarf Cat  <br> Not Just a Trend</p>
                                    <button class="btn1">Buy Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/buy2.jpg" class="img-fluid" alt="">
                                    <h5>Shiba Inus</h5>
                                    <p>Japanese Dog Breed is<br> More than a Cute Face </p>
                                    <button class="btn1">Buy Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/buy3.jpg" class="img-fluid" alt="">
                                    <h5>Pembroke Welsh Corgi</h5>
                                    <br>
                                    <p>A Royal Favourite.</p>
                                    <button class="btn1">Buy Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/buy4.jpg" class="img-fluid" alt="">
                                    <h5>Jack Russell Terriers</h5>
                                    <p>Bred to Be  <br> Fearless and Feisty</p>
                                    <button class="btn1">Buy Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/buy5.jpg" class="img-fluid" alt="">
                                    <h5> Scottish Fold Cats</h5>
                                    <p>Popular Breed  <br> Surprises.</p>
                                    <button class="btn1">Buy Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/buy6.jpg" class="img-fluid" alt="">
                                    <h5>Canaries</h5>
                                    <p>These Songbirds are a<br> Top Choice for Bird Owners </p>
                                    <button class="btn1">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        <!-- buy now section end -->
<!-- lost pet section -->
        <section>
            <div class="buy lost container">
                <div class="content">
                    <h6><span>L</span>ost Pets</h6>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="box">
                            <img src="public/lost1avif.avif" class="img-fluid" alt="">
                            <h5>Billie</h5>
                            <p>Missing for 5 days <br> If seen somewhere please contact</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <img src="public/lost2.png" class="img-fluid" alt="">
                            <h5>Tigger</h5>
                            <p>Missing for two weeks.<br>If you see her please contact.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- lost pet section end -->
<!-- footer section start -->
<footer>
    <a href="">Contact Us:9936173712<br>Email:abc@gmail.com</a>
</footer>
<!-- footer section end -->
<!-- Script For Jquery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/ popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/ bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- custom script -->
<script>
    $(document).scroll(function(){
        $(".navbar").toggleClass("scroll",$(this).scrollTop() > $(".navbar").height())
    })
</script>
</body>
</html>