To setup Laravel

Step01: Goto "https://getcomposer.org/download/" and download Composer-Setup.exe for windows version
	
Step02: Goto "http://laravel.com/docs/5.1/installation" and find out installation Via Composer. After that open cmd prompt and past this line "composer create-project laravel/laravel --prefer-dist"

Step03: Goto "http://localhost/blog/public/" and to check laravel installed correctly or not.


To Setup Laravel in Ubuntu 16.04

Make sure composer is install in your ubuntu 16.04

Goto html folder

moin@moin-VirtualBox:~$ cd /var/www/html/
moin@moin-VirtualBox:/var/www/html$

Log in as super user

moin@moin-VirtualBox:/var/www/html$ sudo su

Then run this command

root@moin-VirtualBox:/var/www/html# sudo sh -c "echo 'precedence ::ffff:0:0/96 100' >> /etc/gai.conf"

you may also install Laravel by issuing the Composer create-project command in your terminal:

root@moin-VirtualBox:/var/www/html# composer create-project --prefer-dist laravel/laravel blog

After that go inside into blog folder and type

root@moin-VirtualBox:/var/www/html/blog# composer update

All done!

To shrtenup 

doskey pa=php artisan $*
