<?php 

//line 4 to  closing many taps by loggin out.
require_once 'auth/sessman.php';

?>
<html>
    <body>
        <?php 
        echo '<h2>Welcome back, ', $_SESSION['userName'];
        ?> 
    
         <h6><a href = "auth/logout.php"> Logout </a></h6>
    </body>
</html>