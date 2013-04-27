#Whoops bundle for Laravel

This bundle replaces the default Laravel 3 error handler with the awesome
Whoops library created by Filipe Dobreira.
https://github.com/filp/whoops

And is based on the Laravel 3 integration by Hugo Dias.
https://gist.github.com/hdias/5169713#file-start-php

NOTE: This is the very first Laravel Bundle I'm publishing so if you find something
wrong or the bundle isn't working for you: please let me know.


##Composer Setup
Install composer inside your project directory  

	$ curl -s http://getcomposer.org/installer | php

Create a composer.json file at the root of your project
  
	{
	    "require": {
	        "php": ">=5.3.0",
	        "filp/whoops": "1.*"
	    }
	}
  
Install your composer packages  

	php composer.phar install  

    

##Bundle Setup
Install the Whoops bundle

	$ php artisan bundle:install whoops

Include it in application/bundles.php  

	return array(
		'whoops' => array('auto' => true)
	);
  

Now you should see some really cool error messages when you trip up.

