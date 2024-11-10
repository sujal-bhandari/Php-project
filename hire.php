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
<link rel="stylesheet" href="public/hire.css">
<link href="img/favicon.ico" rel="icon">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Google Web Fonts -->

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
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
                        <img src="public/carousel-2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="public/carousel-1.jpg" class="d-block w-100" alt="...">
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
        <div class="Content2">
            <h3>Best Pet Services</h3><br>
            <h1>Keep your Pet Happy
            </h1>
            <br>
            <a href="#content">

                <button class="btn1">Services</button>
             </a>
        </div>
    </div>
</section>
<section>
    <!-- Booking Start -->
    <?php
                if(isset($_POST["submit"])){
                    $fname=$_POST["fname"];
                    $date=$_POST["date"];
                    $email=$_POST["email"];
                    $address=$_POST["address"];
                    $service=$_POST["service"];
                    $errors=array();
                            if(empty($fname) OR empty($email) OR empty($address) OR empty($DOB) OR empty($allergies)){
                                array_push($errors,"All fields are required");
                            }
                            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                array_push($errors,"Email is not valid");
                            }
                            else{
                                require_once "database.php";
                                $sql="INSERT INTO Services(fname,email,address,service,date) values(?,?,?,?,?)";
                                $stmt=mysqli_stmt_init($conn);
                                $preStmt=mysqli_stmt_prepare($stmt,$sql);
                                if($preStmt){
                                    mysqli_stmt_bind_param($stmt,"sssss",$fname,$email,$address,$service,$date);
                                    mysqli_stmt_execute($stmt);
                                    echo "<div class='alert alert-success'>You have registered successfully.</div>";
                                }
                                else{
                                    die("something went wrong");
                                }

                            }
                }
                ?>
    <div class="container-fluid bg-light" id="container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5" id="bookingform" action="hire.php" method="post">
                            <div class="form-group">
                                <input type="text" id="fname" name="fname" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="daat" data-target-input="nearest">
                                    <input type="text" id="date" name="date" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservation Date(dd/mm/yyyy)" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                
                                    <input type="text" id="address" name="address" class="form-control border-0 p-4 datetimepicker-input" placeholder="Address" required="required" />
                                
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;" id="service" name="service">
                                    <option selected>Select A Service</option>
                                    <option value="Pet Grooming">Pet Grooming</option>
                                    <option value="Pet Feeding">Pet Feeding</option>
                                    <option value="Pet Boarding">Pet Boarding</option>
                                    <option value="Pet Exercise">Pet Exercise</option>
                                    <option value="Pet Training">Pet Training</option>
                                    <option value="Pet Treatment">Pet Treatment</option>
                                </select>
                            </div>
                            <div>
                                <input class="btn btn-dark btn-block border-0 py-3" type="submit" name="submit" value="Book Now">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Going for a Vacation?</h4>
                    <h1 class="display-4 mb-4">Book For <span class="text-primary" style="font-weight: bold;">Your Pet</span></h1>
                    <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="public/h1.png" class="img1" alt="">
                                    <h5 class="text-truncate m-0">Pet Boarding</h5>
                                </div>
                                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="public/f1.png" class="img2" alt="">
                                    <h5 class="text-truncate m-0">Pet Feeding</h5>
                                </div>
                                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="public/g1.png" class="img1" alt="">
                                    <h5 class="text-truncate m-0">Pet Grooming</h5>
                                </div>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="public/t1.png" class="img2" alt="">
                                    <h5 class="text-truncate m-0">Pet Tranning</h5>
                                </div>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Booking Start -->


    <!-- services -->
    <section>
        <div class="buy container">
            <div class="content" id="content">
                <h6><span>S</span>ervices</h6>
            </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/grooming.jpg" class="img-fluid" alt="">
                                    <h5>Pet Grooming</h5>
                                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>                                    
                                   <a href="#container"> <button class="btn1">Book Now</button></a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/petfeeding.jpg" class="img-fluid" alt="">
                                    <h5>Pet Feeding</h5>
                                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                                 <button class="btn1">Book Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/petboarding.jpg" class="img-fluid" alt="">
                                    <h5>Pet Boarding</h5>
                                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                                    <button class="btn1">Book Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/pettrain.jpg" class="img-fluid" alt="">
                                    <h5>Pet Training</h5>
                                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                                    <button class="btn1">Book Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/petexer.jpg" class="img-fluid" alt="">
                                    <h5>Pet Exercise</h5>
                                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                                    <button class="btn1">Book Now</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box">
                                    <img src="public/treatment.png" class="img-fluid" alt="">
                                    <h5>Pet Treatment</h5>
                                    <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Inventore.</p>
                                    <button class="btn1">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    <!-- services end -->
    <section>
        <div class="second_header">
            <div>
                <div class="img">
                    <img src="public/b3.png" alt="">
                </div>
                <div class="Overlay"></div>
            </div>
            <div class="Content">
                <h6 style="color: #fff;">"Our <span>Pets </span>are<br> our
                    <span>Family"</span>
                </h6>
            </div>
        </div>
    </section>
    <section>
        <div class="container adopt">
            <div class="content">
                <h6><span>C</span>aretakers</h6>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="box">
                        <img src="public/ct2.jpg" class="img-fluid" alt="">
                        <h5>Alex</h5>
                        <p>2 Years Experience <br> consectetur adipisicing elit. Inventore.</p>
                        <button class="btn1">Hire Now</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="public/ct1.jpg" class="img-fluid" alt="">
                        <h5>Andrew</h5>
                        <p>3 Years Experience <br> consectetur adipisicing elit. Inventore.</p>
                        <button class="btn1">Hire Now</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="public/ct3.jpg" class="img-fluid" alt="">
                        <h5>Elisa</h5>
                        <p>4 Years Experience <br> consectetur adipisicing elit. Inventore.</p>
                        <button class="btn1">Hire Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <a href="">Contact Us:9936173712<br>Email:abc@gmail.com</a>
    </footer>
    <!-- footer section end -->
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