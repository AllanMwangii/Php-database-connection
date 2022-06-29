<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

if( isset($_POST["subscribe"]))
{
    //1. fetch form data
    $email =$_POST["email"];
    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO 
    subscribers(email)
    VALUES('$email')");

    if($insertData)
    {
        echo "Data Submitted Successfully";
    }
    else{
        echo "Error Occured";
    }
  }
   
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOTSTRAP</title>
</head>
<body>
     <!--navigation bar her-->
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
         <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
            <div class="navbar-nav">
                <a href="index.php" class="nav-link ">Home</a>
                <a href="about.php" class="nav-link active">About Us</a>
                <a href="register.php"class="nav-link btn btn-primary">Register now</a>
            </div>
         </div>
        </div>
     </nav>
     <!--End navigation bar-->
     <main class="p-5 mb-4 bg-secondary rounded-8 mt-4">
        <h1>About Us</h1>
       <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa cum omnis et ab corporis, modi animi accusamus eligendi culpa fugit assumenda ducimus sapiente autem quibusdam eius esse quam reiciendis minima non consequatur id dolorum officiis harum aperiam. Illo fuga quibusdam quos alias nesciunt quam at!</p>
    </main>
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
              <h1>Our Program</h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit dolores eveniet molestiae quam voluptas eaque vitae dolorum amet iure similique, repellendus, reiciendis odit, quaerat tempore omnis numquam. Ut maxime, qui animi obcaecati dolorum nostrum porro ipsa accusantium perspiciatis deserunt tempore numquam officia illum cumque adipisci quaerat consequuntur beatae iusto ullam?</p>
            </div>
            <div class="col-lg-6">
                <img src="images/photo-1603302576837-37561b2e2302.avif" class="rounded mx-auto d-block" alt="">
            </div>
            <div class="row" >
              <h1 class="pt-2 pb-3">The Program</h1>
                <div class="col-lg-4 p-5 ">
                    <div class="card text-center">
                      <div class="card-body shadow">
                        <h5 class="card-title p-3">Skill Discovery</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt reprehenderit, aut nobis voluptate minima nostrum.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 p-5 ">
                    <div class="card text-center">
                      <div class="card-body shadow">
                        <h5 class="card-title p-3">Upskilling Program</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae velit suscipit eaque nihil eum accusantium!.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 p-5 ">
                    <div class="card text-center">
                      <div class="card-body shadow">
                        <h5 class="card-title p-3">Path finding Program</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ducimus dolore vero similique et praesentium!.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                      </div>
                    </div>
                  </div>
            </div>
            <form action="about.php" method="POST">
                <div class="row d-flex justify-content-center pb-3 mx-auto">
                  <p class="fw-lighter fs-4 text-center">Subscribe to get information, latest news about <br>Zalego Academy</p>
                  <div class=" col-lg-4 justify-content-center pl-5 ml-5 align-items-center ">
                      <label for="email" class="form-label ">E-mail</label>
                      <input type="email" class="form-control " name="email"placeholder="Enter your e-mail address please">     
                  </div>
                  <div class=" mt-4 p-2 col-lg-3 pb-5">
                      <button name="subscribe" class="btn btn-primary">Subscribe</button>  
                  </div>   
                    </div>
             </form>       
                  </div>
            

             

                <hr>
                <footer>
                    &copy;Company 2022
                </footer>
               
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
                 <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
                    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>

</body>
</html>