<?php 
require_once('conn.php');
if (isset($_POST['loginbtnnm'])) {
    $useremail1 ='';
    $userpassword1 = '';
    //$login_status = 2;

    if (isset($_POST['useremail1'])) {
        $useremail1 = trim($_POST['useremail1']);
    }
    if (isset($_POST['userpassword1'])) {
        $userpassword1 = trim($_POST['userpassword1']);
    }

    if (!empty($username)) {
            
     $query_stry = "SELECT * FROM $usertable WHERE email='$useremail1' AND password='$userpassword1'";

        $result = $conn->query($query_stry);
        if ($result -> num_rows) {
          while ($row = $result->fetch_assoc()) {
               session_start();
              $_SESSION['login'] = $useremail1;
             $_SESSION['id'] = $row['id'];              
             // $login_status=1;
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
                <title>Select any Templates</title>
              </head>
              <body class="common">
              
                  <div class="container">
                 
                  <div class="row">
                    <div class="col-12"> <a class="nav-link text-danger btn bg-white" href="logout.php">Logout</a></div>
                      <div class="col-sm-6 g-3">
                      <a href="portfolio1.php?id=<?php echo $_SESSION['id']; ?>" target="_blank">    
                          <img src="./images/template1.png" height="300px" width="100%"></a>
                        

                      </div>
                      <div class="col-sm-6 g-3"> 
                      <a href="portfolio2.php?id=<?php echo $_SESSION['id']; ?>" target="_blank">     
                        <img src="./images/template2.png" height="300px" width="100%"></a>
                        
                  </div>
                      <div class="col-sm-6 g-3"> 
                      <a href="portfolio3.php?id=<?php echo $_SESSION['id']; ?>" target="_blank">
                        <img src="./images/template3.png" height="300px" width="100%"></a>
                     
                  </div>
                      <div class="col-sm-6 g-3">  
                      <a href="portfolio4.php?id=<?php echo $_SESSION['id']; ?>" target="blank">  
                          <img src="./images/template4.png" height="300px" width="100%"></a>
                        
                  </div>
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
                    else{
                      echo"Not Match Your Email Id And Password.. " . $conn->error;
                      header( "Location: index.php");
                    }
                    // header( "Location: login.php?ls=$login_status&email=$useremail");
                //  $conn->close();
                }
            }
            //update statement

            if(isset($_POST['registrationbtn']))
            {

              $username=$_REQUEST['username'];
              $userphone=$_REQUEST['userphone'];
              $useremail=$_REQUEST['useremail'];
              $userpassword=$_REQUEST['userpassword'];
              $useraddress=$_REQUEST['useraddress'];
              $usersummary=$_REQUEST['usersummary'];
              $userskills=$_REQUEST['userskills'];
              $userhobbies=$_REQUEST['userhobbies'];
              $userlinkedin=$_REQUEST['userlinkedin'];
              $usergithub=$_REQUEST['usergithub'];
              $userinsta=$_REQUEST['userinsta'];
              $userproject1=$_REQUEST['userproject1'];
              $linkproject1=$_REQUEST['linkproject1'];
              $userproject2=$_REQUEST['userproject2'];
              $linkproject2=$_REQUEST['linkproject2'];

              $userphoto=$_FILES['userphoto']['name'];
              $tmp_name=$_FILES['userphoto']['tmp_name'];
              $folder="upload_photo/" .$userphoto;
              move_uploaded_file($tmp_name, $folder);

              $userresume=$_REQUEST['userresume'];
              

              $sql="INSERT INTO $usertable VALUES (NULL, '$username', '$userphone', '$useremail', '$userpassword', '$useraddress', '$usersummary', '$userskills', '$userhobbies', '$userlinkedin', '$usergithub', '$userinsta', '$userproject1', '$linkproject1', '$userproject2', '$linkproject2', '$folder', '$userresume')";

                if($conn->query($sql)===TRUE){

                echo "New Record Created Succesfully";
                

              }
              else
              {
                echo "Error:" .$sql . "<br>" . $conn->error;
                header( "Refresh:3; url=index.php", true, 303);
              }
              }
            ?>


