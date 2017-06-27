# Slim Tutorial

This is the companion source code for the Slim Framework [First Application Walkthrough][1] tutorial.

It is a very simple Slim project to serve as an example application of using Slim 3 with Monolog, Phinx, PHP views and Composer to manage dependencies.  In order to use the application as it stands:

* change the shell working directory to `src`
* run `php composer.phar install` to get the dependencies
* create database to use
* then run `php vendor/bin/phinx migrate` (or vendor\bin\phinx migrate on Windows 10) to get your database set up (the config is in `phinx.yml` so adjust as appropriate for your platform)
* adjust `$config['db']` in `public/index.php` too
* create `logs/app.log` and adjust permission as appropriate for your platform

Patches to both tutorial and code are welcome.


[1]: http://www.slimframework.com/docs/tutorial/first-app.html
