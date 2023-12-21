# Vuejs-todo
Los ejemplos de codigo con Vue.js 

# Useful commands | Comandos últimos para programar

## installar vue.js en Laravel 
 0. sudo npm install -g npm@latest
 1. sudo composer require laravel/ui
 2. php artisan ui vue
 3. sudo npm run dev | sudo npm run watch 

## crear base de datos
CREATE DATABASE mydatabase CHARACTER SET utf8 COLLATE utf8_general_ci;

## installar Laravel 
`$ composer create-project laravel/laravel your-site-name --prefer-dist`

## git pull con algun código
`$ sudo git pull origin master --allow-unrelated-histories`

## git config sslverify
`$ sudo git config --global http.sslverify false`

`$ sudo git config --global --list` 

`$ sudo git config --list`

`$ sudo git config --global user.name "Alexander Kuziv"`

`$ sudo git config --global user.email alexander.kuziv@gmail.com`

`$ sudo git config user.name "Alexander"`

`$ sudo git config user.email alexander.kuziv@gmail.com`

## Test in Laravel 

`php artisan make:test MyTestFunc` 
/tests/Feature/MyTestFunc.php 

`vendor/bin/phpunit --filter=MyTestFunc`

`vendor/bin/phpunit ./tests/MyTestFunc`

## Install Laravel 10 

`composer create-project laravel/laravel:10.0 my-site-name`

`composer install`

`composer require laravel/ui`

### Generate basic scaffolding...

`php artisan ui bootstrap`

`php artisan ui vue`

`php artisan ui react`

### Generate login / registration scaffolding...

`php artisan ui bootstrap --auth`

`php artisan ui vue --auth`

`php artisan ui react --auth`

### and 

`npm install`

`npm run dev`

required: { node: '^14.18.0 || >=16.0.0' },

#### por eso  

`nvm install 18.1.0`

`nvm use 18.1.0`

## FOR ERROR: 
##### insufficient permission for adding an object to repository database

For Ubuntu (or any Linux)

From project root,

`cd .git/objects`

`ls -al`

`sudo chown -R yourname:yourgroup * `





