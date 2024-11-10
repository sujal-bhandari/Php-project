<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="public/adopt.css">
    <title>Document</title>
    
</head>
<body style="background-color: #9A616D;">
        <!-- Navbar Section Start -->
<nav class="navbar navbar-expand-sm scroll">
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
<br>

<!-- Navbar Section End -->
    <section>
        <br>
        <div class="container py-2 h-80">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem; height: 650px;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="public/l1.avif"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 650px;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                        <?php
                        // print_r($_POST);
                        if(isset($_POST["submit"])){
                            $fname=$_POST["fname"];
                            $email=$_POST["email"];
                            $password=$_POST["password"];
                            $passwordhash=password_hash($password,PASSWORD_DEFAULT);
                            $errors=array();
                            if(empty($fname) OR empty($email) OR empty($password)){
                                array_push($errors,"All fields are required");
                            }
                            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                array_push($errors,"Email is not valid");
                            }
                            if(strlen($password)<8){
                                array_push($errors,"password is short");
                            }
                            require_once "database.php";
                            $sql="SELECT * FROM users WHERE fname='$fname' ";
                            $result=mysqli_query($conn,$sql);
                            $rowcount=mysqli_num_rows($result);
                            if($rowcount>0){
                                array_push($errors,"usrname already exist");

                            }

                            if(count($errors)>0){
                                foreach($errors as $error){
                                    echo "<div class ='alert alert-danger'>$error</div>";
                                }
                            }
                            else{
                                // require_once "database.php";
                                $sql="INSERT INTO users(fname,email,password) values(?,?,?)";
                                $stmt=mysqli_stmt_init($conn);
                                $preStmt=mysqli_stmt_prepare($stmt,$sql);
                                if($preStmt){
                                    mysqli_stmt_bind_param($stmt,"sss",$fname,$email,$passwordhash);
                                    mysqli_stmt_execute($stmt);
                                    echo "<div class='alert alert-success'>You have registered successfully.</div>";
                                }
                                else{
                                    die("something went wrong");
                                }

                            }
                        }
                        
                        ?>
      
                      <form action="registration.php" method="post" >
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">Pet Care</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your account.</h5>
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="text" id="fname" name="fname" required class="form-control form-control-lg" />
                          <label for="fname">Username</label>
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="text" id="email" name="email" required class="form-control form-control-lg" />
                          <label for="email">Email</label>
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" id="password" name="password" required class="form-control form-control-lg" />
                          <label for="password">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <input data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Sign Up">
                        </div>
                        <p class="mb-5 pb-lg-2" id="signup" style="color: #393f81;">Already have an account? <a href="login.php"
                            style="color: #393f81;">Login here</a></p>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>