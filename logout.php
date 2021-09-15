<?php
session_start();

//destroy the session data on disk
session_destroy();

//delete the session cookie
setcookie(session_name(), '', time()-0);

//destroy the $_SESSION array
$_SESSION = array();
$page_title = "Log Out";


?>
<div class="container wrapper">
 
    <h1 style="text-align: center;color:red;font-size:50px;">Thank You! Now You Log Out</h1>
</div>

<script type="text/javascript">
    	alert("Thank you! for visiting you. You are now logged out.");
    </script>
<?php
header( "Refresh:1; url=index.php", true, 303);
//header( "Refresh:3; url=home.php", true, 303);
