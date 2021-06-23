<html>
<head>
    <title>LogIn page</title> 
    <link rel="stylesheet" type="text/css" media="screen" href="style.php"> 
</head>
<body>


<h1> Log page</h1> 

 
   
<form action = "auth/login.php" method = "post">

  <p> Please input those info to log in <br> username: AbuSamra <br> password: 501432 </p>

  <h2> Log in </h2> 

    <div>
          <label for="user_Name"> Username: </label> <input type = "text" name="user_Name" id = "user_Name" required> 
            <?php if($_GET['error'] == 1) { ?>
          <span class = "error"> Wrong Username</span>
          <?php } ?>
    </div>

    <div>
        <label for="user_Password"> Password: </label> <input type = "password" id = " user_Password" name="user_Password" required>    
    </div>

    <div>
        <label for = "remember_ME"> Rememeber me </label> <input type="checkbox" id = "remember_ME" name="remember_ME">
    </div>

    <div> 
         <input type="submit" value="login"> 
    </div>

    <!-- check for this value(if else php) when form is submitted -->
    <div>
        <input type="hidden" name="submitted" value="1">
    </div>

</form>
</body></html>