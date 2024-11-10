<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="public/adopt.css">
    <title>Document</title>
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
    </style>
    
</head>
<body>
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

<!-- Navbar Section End -->
<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="public/a1.jpg"
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%;" />
              </div>
              <div class="col-xl-6">
                <?php
                if(isset($_POST["apply"])){
                    $fname=$_POST["fname"];
                    $lname=$_POST["lname"];
                    $email=$_POST["email"];
                    $address=$_POST["address"];
                    $gender=$_POST["gender"];
                    $state=$_POST["state"];
                    $animal=$_POST["animal"];
                    $allergies=$_POST["allergies"];
                    $DOB=$_POST["DOB"];
                    $apply=$_POST["apply"];
                    $errors=array();
                            if(empty($fname) OR empty($email) OR empty($address) OR empty($DOB) OR empty($allergies)){
                                array_push($errors,"All fields are required");
                            }
                            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                array_push($errors,"Email is not valid");
                            }
                            else{
                                require_once "database.php";
                                $sql="INSERT INTO caretakers(fname,lname,email,address,gender,DOB,allergies,state,animal) values(?,?,?,?,?,?,?,?,?)";
                                $stmt=mysqli_stmt_init($conn);
                                $preStmt=mysqli_stmt_prepare($stmt,$sql);
                                if($preStmt){
                                    mysqli_stmt_bind_param($stmt,"sssssssss",$fname,$lname,$email,$address,$gender,$DOB,$allergies,$state,$animal);
                                    mysqli_stmt_execute($stmt);
                                    echo "<div class='alert alert-success'>You have registered successfully.</div>";
                                }
                                else{
                                    die("something went wrong");
                                }

                            }
                }
                ?>
                <form action="apply.php" method="post">
                    <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">Work As A CareTaker<br>Apply Now</h3>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="fname" name="fname" class="form-control form-control-lg" required />
                        <label for="fname">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="lname" name="lname" class="form-control form-control-lg" required />
                        <label for="lname">Last name</label>
                      </div>
                    </div>
                  </div>
  
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="address" name="address" class="form-control form-control-lg" required/>
                    <label for="address">Address</label>
                  </div>
  
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
  
                    <h6 class="mb-0 me-4">Gender: </h6>
  
                    <div class="form-check form-check-inline mb-0 me-4" >
                      <input class="form-check-input" type="radio" name="gender" id="gender"
                        value="Female"/>
                      <label for="gender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="gender" id="gender"
                        value="Male" />
                      <label for="gender">Male</label>
                    </div>
  
                    <div class="form-check form-check-inline mb-0">
                      <input class="form-check-input" type="radio" name="gender" id="gender"
                        value="Other" />
                      <label for="gender">Other</label>
                    </div>
  
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <select class="select" id="state" name="state">
                        <option value="State">State</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Delhi">Delhi</option>
                        <option value="UP">UP</option>
                      </select>
  
                    </div>
                    <div class="col-md-6 mb-4">
  
                      <select class="select" id="animal" name="animal">
                        <option value="Animal">Animal</option>
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                        <option value="Rabbit">Rabbit</option>
                      </select>
  
                    </div>
                  </div>
  
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="DOB" name="DOB" class="form-control form-control-lg" />
                    <label for="DOB">DOB</label>
                  </div>
  
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="email" name="email" class="form-control form-control-lg" required/>
                    <label for="email">Email ID</label>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="allergies" name="allergies" class="form-control form-control-lg" />
                    <label for="allergies">Any Allergies</label>
                  </div>
  
  
                  <div class="d-flex justify-content-end pt-3">
                    <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg ms-2" name="apply" Value="Apply now">
                  </div>
                </div>
            </form>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
      
    </div>
  </section>
</body>
</html>