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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="index.css" rel="stylesheet">
    <title><?php echo $row['name']; ?> Portfolio</title>
  </head>
  <body>
    <section id="homesection">
    <div class="portfolio-cover-1">
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
      <div class="col-sm-4">
        <img src="<?php echo $row['profilephoto']; ?>" height="300px"  width="100%">
        <h1 class="profolio-head1 text-capitalize"><?php echo $row['name']; ?> </h1>

      </div>
      <div class="col-sm-4">

</div>
<div class="col-sm-4">
  <h4 class="head1-portinto">Phone No. <strong><?php echo $row['phone']; ?></strong> </h4>
  <span class="head1-portinto">Email Id. <strong><?php echo $row['email']; ?></strong></span><br>
  <span class="head1-portinto">Address. <strong><?php echo $row['address']; ?></strong></span>

</div>
</div>

  </div>

</div>
</div>
</section>

<div style="background-color: white;">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#122348" fill-opacity="1" d="M0,224L48,224C96,224,192,224,288,234.7C384,245,480,267,576,245.3C672,224,768,160,864,160C960,160,1056,224,1152,240C1248,256,1344,224,1392,208L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

</div>
<section id="summarysection">
<div class="row" style="background-color: while;margin:0;padding:0;">
       <div class="col-12">
           <h2>Summary</h2>
           <p class="contain-p"><?php echo $row['summary']; ?> </p>
          
       </div>
       <div class="col-12"  style="margin:0;padding:0">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#122348" fill-opacity="1" d="M0,224L48,224C96,224,192,224,288,234.7C384,245,480,267,576,245.3C672,224,768,160,864,160C960,160,1056,224,1152,240C1248,256,1344,224,1392,208L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

       </div>
     </div> 
</section>
<section id="skillssection">
     <div style="background-color: white;">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#122348" fill-opacity="1" d="M0,224L48,224C96,224,192,224,288,234.7C384,245,480,267,576,245.3C672,224,768,160,864,160C960,160,1056,224,1152,240C1248,256,1344,224,1392,208L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

</div>
     <div class="row" style="background-color: while;margin:0;padding:0;">
       <div class="col-12">
           <h2>Skills & Hobbies</h2>
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#122348" fill-opacity="1" d="M0,288L20,272C40,256,80,224,120,186.7C160,149,200,107,240,122.7C280,139,320,213,360,208C400,203,440,117,480,96C520,75,560,117,600,144C640,171,680,181,720,202.7C760,224,800,256,840,229.3C880,203,920,117,960,101.3C1000,85,1040,139,1080,133.3C1120,128,1160,64,1200,32C1240,0,1280,0,1320,5.3C1360,11,1400,21,1420,26.7L1440,32L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>
    </div>
    <div class="row" style="background-color: white;margin:0;padding:0;">
       <div class="col-12">
           <h2>Your Project</h2>
           <p class="contain-p">This Web Site for creating a portfolio.</p>          
       </div> 
            
     </div> 
     <div class="container">
     <div class="row" style="background-color: white;margin:0;padding:0;">
       <div class="col-6 column g-2">
           <h3><?php echo $row['project1']; ?> </h3>
           <p class="contain-p">This Web Site for creating a portfolio.<br><a href="<?php echo $row['project1link']; ?>" target="_blank">Link</a></p>          
       </div>      
       <div class="col-6 column g-2">
           <h3><?php echo $row['project2']; ?> </h3>
           <p class="contain-p">This Web Site for creating a portfolio.<br><a href="<?php echo $row['project2link']; ?>" target="_blank">Link</a></p>          
       </div> 
     </div> 
    </div>
</section>
    <div style="background-color: white;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#122348" fill-opacity="1" d="M0,288L20,272C40,256,80,224,120,186.7C160,149,200,107,240,122.7C280,139,320,213,360,208C400,203,440,117,480,96C520,75,560,117,600,144C640,171,680,181,720,202.7C760,224,800,256,840,229.3C880,203,920,117,960,101.3C1000,85,1040,139,1080,133.3C1120,128,1160,64,1200,32C1240,0,1280,0,1320,5.3C1360,11,1400,21,1420,26.7L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg> </div>
    <div class="row" style="background-color: #122348;margin:0;padding:0;">
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