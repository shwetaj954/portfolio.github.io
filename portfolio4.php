<?php
require_once('conn.php');
//if (isset($GET['id'])) {
  $id=$_GET['id'];
    $sql1 = "SELECT * FROM $usertable WHERE id=" . $id;
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
    <title><?php echo $row['name']; ?> Portfolio</title>
  </head>
  <body>
    <section id="homesection">
    <div class="portfolio-cover-4">
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom border-3">
  <div class="container">
    <a class="navbar-brand" href="#">Your Portfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#homesection">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#summarysection">Summary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skillssection">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projectsection">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
<div class="portfolio1-contain">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      <img src="<?php echo $row['profilephoto']; ?>" height="300px" width="100%">
        <h1 class="profolio-head1 text-capitalize"><?php echo $row['name']; ?> </h1>

      </div>
     
        <div class="col-sm-6">
        <h4 class="head1-portinto">Phone No. <strong><?php echo $row['phone']; ?></strong> </h4>
  <span class="head1-portinto">Email Id. <strong><?php echo $row['email']; ?></strong></span><br>
  <span class="head1-portinto">Address. <strong><?php echo $row['address']; ?></strong></span>

        </div>
</div>

</div>
</section>


<section id="summarysection">
<div class="row" style="background-color: while;">
       <div class="col-12">
           <h2 style="color:#002953;">Summary</h2>
           <p class="contain-p text-white"><?php echo $row['summary']; ?></p>
         
       </div>
       <div class="col-12"  style="margin:0;padding:0">
       </div>
     </div> 
</section>
<hr>
<section id="skillssection">
    
     <div class="row" style="background-color: while;margin:0;padding:0;">
       <div class="col-12">
           <h2 style="color:#002953">Skills & Hobbies</h2>
           <p class="contain-p"><?php echo $row['skills']; ?> </p>  
           <p class="contain-p"><?php echo $row['hobbies']; ?> </p>       
         </div>      
     </div> 
     <div class="container">
    <div class="row">
      <div class="col-sm-4 g-3 column">
      <img src="./images/person-people-girl-woman-camera-photography-948941-pxhere.com.jpg" height="300px" width="100%">
     
      
      </div>
      <div class="col-sm-4 g-3 column">
      <img src="./images/hand-sport-play-boy-kid-pattern-918813-pxhere.com.jpg" height="300px" width="100%">
     
      </div>
      <div class="col-sm-4 g-3 column">
      <img src="./images/grass-person-people-girl-woman-sunset-500242-pxhere.com.jpg" height="300px" width="100%">
     
      </div>
    </div>
    
    </div>
</section>
<section id="projectsection">
    <div style="background-color: white;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#002953" fill-opacity="1" d="M0,192L40,186.7C80,181,160,171,240,144C320,117,400,75,480,53.3C560,32,640,32,720,69.3C800,107,880,181,960,197.3C1040,213,1120,171,1200,176C1280,181,1360,235,1400,261.3L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg> </div>
    <div class="row" style="background-color: white;margin:0;padding:0;">
       <div class="col-12">
           <h2 style="color:#002953;">Your Project</h2>
           <p class="contain-p">This Web Site for creating a portfolio.</p>          
       </div> 
            
     </div> 
     <div class="container">
     <div class="row" style="background-color: white;margin:0;padding:0;">
       <div class="col-6 column g-2">
           <h3 style="color:#002953;"><?php echo $row['project1']; ?></h3>
           <p class="contain-p">This Web Site for creating a portfolio.<br><a href="<?php echo $row['project1link']; ?>" target="_blank">Link</a></p>          
        </div>      
       <div class="col-6 column g-2">
           <h3 style="color:#002953;"><?php echo $row['project2']; ?> </h3>
           <p class="contain-p">This Web Site for creating a portfolio.<br><a href="<?php echo $row['project2link']; ?>" target="_blank">Link</a></p>          
       </div> 
     </div> 
    </div>
</section>
    <div style="background-color: white;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#002953" fill-opacity="1" d="M0,32L16,53.3C32,75,64,117,96,149.3C128,181,160,203,192,186.7C224,171,256,117,288,85.3C320,53,352,43,384,37.3C416,32,448,32,480,69.3C512,107,544,181,576,176C608,171,640,85,672,90.7C704,96,736,192,768,240C800,288,832,288,864,261.3C896,235,928,181,960,154.7C992,128,1024,128,1056,122.7C1088,117,1120,107,1152,138.7C1184,171,1216,245,1248,256C1280,267,1312,213,1344,181.3C1376,149,1408,139,1424,133.3L1440,128L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path></svg></div>
   <div class="row"  style="background-color: #002953;">
    <div class="col-sm-12 text-center">
    <a href="<?php echo $row['linkedin']; ?>" target="_blank">
        <img src="./images/linkedin.png" height="30px" width="30px"></a>
        <a href="<?php echo $row['instagram']; ?>" target="_blank">
        <img src="./images/instagram.png" height="30px" width="30px"></a>
        <a href="<?php echo $row['facebook']; ?>" target="_blank">
        <img src="./images/facebook.png" height="30px" width="30px"></a>
        <a href="<?php echo $row['github']; ?>" target="_blank">
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
<?php
        }
    }
//}
?>