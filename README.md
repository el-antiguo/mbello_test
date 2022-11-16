<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## construir projecto

El proyecto está construido usado laravel sail. Por lo tanto, es posible levantarlo correctamente usando el comando `sail up -d`

también es posible levantarlo de forma manual al configurar el ambiente correspondiente
 - MySQL 8
 - PHP 8.0

 # migraciones y seeders

Para correr los seeders iniciales basta con correr `sail artisan db:seed`, pero si se necesitan más usuarios o productos los seeders `ProductoSeeder` y `UserSeeder` están disponibles

# usuarios de prueba 
## admins
 - email: admin@test.com password: password

# users

 - user1@test.com password: password
 - user2@test.com password: password
 - user3@test.com password: password
 - user4@test.com password: password
 - user5@test.com password: password