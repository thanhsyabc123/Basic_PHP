<?php
// Cookies: save data in remote browser
// You can retrieve it when the user visit the site again
    echo "Cookies in PHP.<br/>";
//save data to cookie
setcookie('name','Sy',time()+24*3600);
//check the existing cookies
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}
setcookie('name','', time()-24*3600);
?>