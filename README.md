# About this application
This is personal repository to practice `Object Oriented PHP` concept. Resources are referenced from free online tutorial [Eduonix: Learn Object Oriented PHP](https://www.eduonix.com/courses/Web-Development/learn-object-oriented-php-by-building-a-complete-website)

This is simple application includes login/register and post/list/delete features.

I used `Object Oriented PHP` concept and `MVC pattern` to build it.

![MVC Pattern](https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2013/03/MVC-Process.png)

Routing is done by without using any existing frameworks. 

[Bootstrap of routing](https://github.com/reoim/Object-Oriented-PHP/blob/master/classes/Bootstrap.php)

ex>
```
http://mydomain.com/users/login

users = controller

login = action
```


# How to run
You need to install xampp/wamp or ampps to run this on your local server.

Once you install it, go to admin homepage, add domain.

Download or clone this repository under your domain name folder. 

The domain name folder should be under your `ampps installed path/www/`

ex> C:\Program Files\Ampps\www\mydomain

You also need to change following root path and root url code in configure.php file to your domain.

```php
// Define URL
define("ROOT_PATH", "/php.dev/");
define("ROOT_URL", "http://localhost/php.dev/");
```

Now you can open your domain on browser.

