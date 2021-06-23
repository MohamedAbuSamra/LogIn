<?php 

session_start();

//Receive the request from the index.php form
if(!isset($_POST['submitted'])) header('Location: ' . $_SERVER['HTTP_REFERER']);
$flagttesst =0 ;
//The vaild user info
$userInfo = [
    'user_Name' => 'AbuSamra',
    'user_Password' => '501432'
];

//Displaying username in homepage
$_SESSION['userName'] = $userInfo['user_Name'];


//in case of needs for password
$_SESSION['userPassword'] = $userInfo['user_Password'];


//Remember me Checkbox
$id=$userInfo['user_Name'];       
$pass=$userInfo['user_Password'];
if(isset($_POST['sumbitted']))	
{		
   	if($_POST['remember_ME']==true)			
    {			
        setcookie("cid",$id,time()+60*60);			
        setcookie("cpass",$pass,time()+60*60);			
    }
}


//invaild login
if($userInfo['user_Name'] !== $_POST['user_Name'] OR $userInfo['user_Password'] !== $_POST['user_Password'])
{ 
 header('Location: ' . '../index.php?error=1');
 exit;
 
}

//vaild login
else {
// Storing session data
$_SESSION["isLogged"] = "1";

exit(header('Location:' . '../home.php'));
}

?>