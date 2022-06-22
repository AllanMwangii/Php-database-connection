<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

if( isset($_POST['submitbutton']))
{
    //1. fetch form data
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $phonenumber =$_POST['phonenumber'];
    $message =$_POST['message'];
    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO 
    contactus(firstname,lastname,email,phonenumber,message)
    VALUES('$firstname','$lastname','$email','$phonenumber','$message')");

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Grid Layout</title>
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
               <a href="index.php" class="nav-link active">Home</a>
               <a href="about.php" class="nav-link">About Us</a>
               <a href="#" class="nav-link">Contact Us</a>
           </div>
        </div>
       </div>
    </nav> 
    <!--End navigation bar-->
<main class="p-5 mb-4 bg-warning rounded-8 mt-4">
    <h1>Welcome, Allan Mwangi</h1>
   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla inventore neque quidem vitae illum hic autem unde mollitia blanditiis molestias. Officia, assumenda ipsa? Adipisci quis dignissimos officiis ipsa placeat iure neque illo harum architecto, veritatis ab ex. Optio ipsum nobis quisquam maiores sapiente quos! Dolorum in minus voluptate explicabo doloremque rerum quaerat natus dolore rem, at numquam nisi deleniti voluptatibus similique quisquam, maiores maxime nulla distinctio adipisci ratione, est minima qui optio reiciendis? Consequatur similique laudantium temporibus, ea unde placeat cupiditate animi ut asperiores est consequuntur sit cumque dolorem eaque doloribus? Ad aspernatur incidunt, odit modi magnam mollitia quo eaque.</p>
<button class="btn btn-primary">learn more</button>
</main>
    <div class="container">
        <div class="row">
          <div class="col-lg-4">
              <h1> Header 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis, vel velit quidem iure accusantium delectus praesentium et voluptates animi odit nam dolores, magni dolorum? Accusamus distinctio perspiciatis amet aliquid voluptas. Magnam sapiente ad expedita nisi, provident corrupti esse iste, explicabo velit repellendus neque quaerat?</p>
          <button class="btn btn-primary">learn more</button>
            </div>
            <div class="col-lg-4">
                <h1> Header 2</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis, vel velit quidem iure accusantium delectus praesentium et voluptates animi odit nam dolores, magni dolorum? Accusamus distinctio perspiciatis amet aliquid voluptas. Magnam sapiente ad expedita nisi, provident corrupti esse iste, explicabo velit repellendus neque quaerat?</p>
            <button class="btn btn-primary">learn more</button>
              </div>
              <div class="col-lg-4">
                <h1> Header 3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis, vel velit quidem iure accusantium delectus praesentium et voluptates animi odit nam dolores, magni dolorum? Accusamus distinctio perspiciatis amet aliquid voluptas. Magnam sapiente ad expedita nisi, provident corrupti esse iste, explicabo velit repellendus neque quaerat?</p>
            <button class="btn btn-primary">learn more</button>
              </div>
        </div>

        <!--contact us page here-->
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur neque praesentium veritatis laboriosam eveniet vitae tempore dicta iste eum rem delectus quia quae consequatur, suscipit aperiam ipsum molestiae quidem similique necessitatibus cum id voluptatibus fugiat. Cum saepe culpa officia quia doloribus quod itaque labore exercitationem?   </p>
            <form action="index.php" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstname" class="FormLabel">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="lastname" class="FormLabel">Last Name</label>
                    <input type="text" name="lastname"class="form-control" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="email" class="FormLabel">Email</label>
                    <input type="text"name="email" class="form-control" placeholder="Enter Your Email Address">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="phonenumber" class="FormLabel">Phone Number</label>
                    <input type="text"name="phonenumber" class="form-control" placeholder="Enter Your Phone Number">
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <label for="Message" class="Form-label">Your Message</label>
                <textarea cols="30" rows="5" class="form-control" name="message"></textarea>
            </div>
        </div>
       
        <div class="pt-5">
            <button type="submit" name="submitbutton" class="btn btn-primary">Send a Message</button>
        </div>
    </form>
        </div>
<hr>
<footer>
    &copy;Company 2022
</footer>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>

