<?php 
require_once('conn.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <title>Portfolio Maker</title>
  </head>
  <body>
      
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand align-middle" href="#" class="port-topic">PortfolioMaker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active align-middle" aria-current="page" href="#homepagesection">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link align-middle" href="#aboutpage">About Us</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link align-middle" href="#templatepage">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link align-middle" href="#registraion">Registration</a>
        </li>
        <li class="nav-item ">
        <button type="button" class="btn btncrt text-end" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Login</button>

        </li>
    
    
      </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LogIn</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="common.php">
          <div class="mb-3">
            <label for="useremail1" class="col-form-label">Email Id</label>
            <input type="mail" class="form-control" id="useremail1" name="useremail1">
          </div>
          <div class="mb-3">
          <label for="userpassword1" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="userpassword1" name="userpassword1">
          </div>
          <div class="mb-3">
          <button type="submit" class="btn btncrt" name="loginbtnnm">Login</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<section id="homepagesection">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">    
 
    <div class="carousel-item active" data-bs-interval="3000" style="height: 90vh;">
      <img src="./images/pcover2.jpg" class="d-block w-100" alt="..." height="100%" >
      
      
      <div class="carousel-caption d-none d-md-block">          
        <h1>Create Your Portfolio WebSite</h1>
        <p>Some representative placeholder content for the first slide.</p>
        <a class="btn btncrt">Create Your Blog</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000"  style="height: 90vh;">
      <img src="./images/cover.jpg" class="d-block w-100" alt="..."  height="100%" >
      <div class="carousel-caption d-none d-md-block">
        <h1>Like Me</h1>
        <p>Some representative placeholder content for the second slide.</p>
        <a class="btn btncrt">Create Your Blog</a>
      </div>
    </div>
    <div class="carousel-item"  style="height: 90vh;" >
      <img src="./images/pcover2 (2).jpg" class="d-block w-100" alt="..."  height="100%">
      <div class="carousel-caption d-none d-md-block">
        <h1>Show Your Work</h1>
        <p>Some representative placeholder content for the third slide.</p>
        <a class="btn btncrt">Create Your Blog</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<section id="aboutpage">
   <div class="row" style="background-color: white;margin:0;">
       <div class="col-12">
           <h2>About Us</h2>
           <p class="contain-p">This Web Site for creating a portfolio.</p>
       </div>
   </div> 
   <div class="row" style="background-color: white;margin:0;">
       <div class="col-sm-7 contain-img"  >
           <img src="./images/light-girl-sunshine-sun-woman-sunset-7835-pxhere.com.jpg" class="img-conatin" width="100%" height="400px">
       </div>
       <div class="col-sm-5 pard">
           <h3>Your Data Your Blog Your Portfolio</h3>
           <p class="contain-p2">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.

</p>
       </div>
   </div>
</section>
<section id="templatepage">
   <div class="row" style="background-color: white;margin:0;">
       <div class="col-12">
           <h2>Templates</h2>
           <p class="contain-p">This Web Site for creating a portfolio.</p>
       </div>
   </div> 
   <div class="row" style="background-color: white;margin:0;">
       <div class="col-sm-3 contain-img g-2">
           <img src="./images/template1.png" height="300" width="100%"></img>

       </div>
       <div class="col-sm-3 contain-img g-2">
       <img src="./images/template2.png" height="300" width="100%"></img>
       </div>

       <div class="col-sm-3 contain-img g-2">
       <img src="./images/template3.png" height="300" width="100%"></img>
       </div>
       <div class="col-sm-3 contain-img g-2">
       <img src="./images/template4.png" height="300" width="100%"></img>
       </div>


   </div>
</section>
<section id="registraion">
   <div class="row" style="background-color: while;margin:0;">
       <div class="col-12">
           <h2>Fill This Form and Create Your Portfolio</h2>
           <p class="contain-p">This Web Site for creating a portfolio.</p>
       </div>
   </div> 
   <div class="row" style="background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );padding-bottom:20px;padding-top:20px;">
       <div class="col-12">
           <div class="container">
       <form class="row g-3" method="POST" action="common.php" enctype="multipart/form-data">
  <div class="col-md-4">
    <label for="inputname" class="form-label">Full Name<span style="color:red">*</span></label>
    <input type="text" class="form-control" id="inputname" name="username" placeholder="Your Full Name" required>
  </div>
  <div class="col-md-4">
    <label for="inputphone" class="form-label">Phone No.<span style="color:red">*</span></label>
    <input type="number" class="form-control" id="inputphone" name="userphone" placeholder="yourphone-no." required>
  </div>
  <div class="col-md-4">
    <label for="inputemail" class="form-label">Email Id<span style="color:red">*</span></label>
    <input type="mail" class="form-control" id="inputemail" name="useremail" placeholder="YourEmailId@gmail.com" required>
  </div>
  <div class="col-6">
    <label for="inputpassword" class="form-label">Create Password <span style="color:red">*</span></label>
    <input type="password" class="form-control" id="inputpassword" name="userpassword" placeholder="Create Password" required>
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="useraddress" placeholder="Your Address" required>
  </div>
  <div class="col-12">
    <label for="inputsummary" class="form-label">Summary <span style="color:red">*</span></label>    
    <input type="text" class="form-control" id="inputsummary" name="usersummary" placeholder="Summary.." required>
  </div>
  <div class="col-6">
    <label for="inputskills" class="form-label">Skills <span style="color:red">*</span></label>    
    <input type="text" class="form-control" id="inputsummary" name="userskills" placeholder="Write Your Skills.." required>
  </div>
  <div class="col-6">
    <label for="inputhobbies" class="form-label">Hobbies</label>    
    <input type="text" class="form-control" id="inputhobbies" name="userhobbies" placeholder="Write Your Hobbie">
  </div>
  <div class="col-4">
    <label for="inputlinkedin" class="form-label">Linkedin link</label>    
    <input type="text" class="form-control" id="inputlinkedin" name="userlinkedin" placeholder="Linkedin">
    
  </div>
  <div class="col-4">
    <label for="inputgithub" class="form-label">Github link</label>    
    <input type="text" class="form-control" id="inputgithub" name="usergithub" placeholder="Github">
    
  </div>
  <div class="col-4">
    <label for="inputinsta" class="form-label">Instagram link</label>    
    <input type="text" class="form-control" id="inputinsta" name="userinsta" placeholder="Instagram">    
  </div>
  <div class="col-6">
    <label for="inputproject1" class="form-label">Your Project1</label>    
    <input type="text" class="form-control" id="inputproject1" name="userproject1" placeholder="Your Project Name">
  </div>
  <div class="col-6">
    <label for="inputpro1link" class="form-label">Project1 Link</label>    
    <input type="text" class="form-control" id="inputpro1link" name="linkproject1" placeholder="Paste Your Project Link">
  </div>
  <div class="col-6">
    <label for="inputproject2" class="form-label">Your Project2</label>    
    <input type="text" class="form-control" id="inputproject2" name="userproject2" placeholder="Your Project Name">
  </div>
  <div class="col-6">
    <label for="inputpro2link" class="form-label">Project2 Link</label>    
    <input type="text" class="form-control" id="inputpro2link" name="linkproject2" placeholder="Paste Your Project Link...">
  </div>
  <div class="col-6">
    <label for="inputimagef" class="form-label">Profile Photo <span style="color:red">*</span></label>    
    <input type="file" class="form-control" id="inputimagef" name="userphoto" placeholder="Your Photo" required>
  </div>
  <div class="col-6">
    <label for="inputresume" class="form-label">Resume link</label>    
    <input type="text" class="form-control" id="inputresume" name="userresume" placeholder="Add Resume google link">
  </div>
 
 
  <div class="col-12">
    <button type="submit" class="btn btncrt" name="registrationbtn">Create Portfolio</button>
  </div>
</form>

       </div>
   </div>
   </div>
</section>
   <div class="row"  style="background-color: #002953;padding-top:20px;padding-bottom:10px;line-height:1.9em;">
    <div class="col-sm-12 text-center">
        <a href="#">
        <img src="./images/linkedin.png" height="30px" width="30px"></a>
        <a href="#">
        <img src="./images/instagram.png" height="30px" width="30px"></a>
        <a href="#">
        <img src="./images/facebook.png" height="30px" width="30px"></a>
        <a href="#">
        <img src="./images/github-logo-silhouette-in-a-square.png" height="30px" width="30px"></a>

      </div>
      <div class="col-sm-12 text-center text-light">
       2021

      </div>
     
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>