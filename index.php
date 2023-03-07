<?php
//cookies
//cookies is a piece of information iside our system ,we should never store a user name or passwprd inside a cookie
//maximum size of a cookie is 4kb
//information stored in the cookies in not safe
//scenario *-storing youtube serach history *-users's cart items *-language of the web browser

//syntax
//setcookie(name,value,expires,path,domain,secure,httponly)
## name-this is like the key that will be used to ccess the value
## value-this is the cookie value itself
## expires -this is the ctime when the cookies expires
## expires -this is the ctime when the cookies expires if not set the cookie expires at the end of the session when the browser closses
## path -this is the path in whitch the cookie will be available on '/'-will be available within the entire domain '/page/' will be available in this page only
## domain -this is the domain that the cookies will be available to. such as 'www.example.com'
## secure  -this is indicates that the cookie should only be transmitted over a secure https connection when set to true
## httponly  -when set to true the cookie will be made assesible only through http protocal
$category_name='Food';
$category_value='Ugali';
//to update a cookie all you have to do is update the value
setcookie($category_name,$category_value,time()+3000,"/");
echo "Cookie is set";
//getting the cookies
print_r($_COOKIE);
echo $_COOKIE['Food'];
//deleteing a cookie
##set the expiration date in the past
//session 
//are use to store the information on th server to be used across multiple pages of the website.
//we set sessions using global variable $_SESSION
//DEFAULT TIME OF EXPIRATION IS 24 MINUTES
session_start();
$_SESSION['name']="Jackon";
$_SESSION['lname']="shiundu";

//to modift a session just rename it
//deleting a session
unset($_SESSION['fname']);
session_destroy();

//session scenarios *-when a user requires to log in a website to view his account *-notification or alert messages whena aaform is submitted *-
//both sessions and cookies are useefull  for they hold information about users and visiting a website for various purposes
//the main diffrence between cookies ans sessions is that session is kept on the server side while the cookies is kept on the client side or browser
//sessions can store any datatype while cookies only tsores strings
//sessions are more secure as they are stored in binnaryform and can be encrypted at the server
//sessions can be used as an alternative to cookies for browser that dont support cookies to store variables ina a more secure way

?>
<html>
    <body>
        <?php
        echo "F name is ".$_SESSION['fname'].'</br>';
        echo "Last name is ".$_SESSION['lname'].'</br>';
        ?>
    </body>
</html>