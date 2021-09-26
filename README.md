<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# About Project

A Rest API implemented on laravel that includ a CRUD.
The project include the following models:

<div align="center">
    <a href="https://github.com/peixecozid0">
        <img alt="GamesTable" src="https://i.imgur.com/E32Zmmm.png">
        <img align="top" alt="GenresTable" src="https://i.imgur.com/7khyPsL.png">
        <img align="top" alt="PlatformTable" src="https://i.imgur.com/vDr8nwp.png">
        <img alt="PlatformTable" src="https://i.imgur.com/EDjp0NV.png">
    </a>
</div>

# How to install the project

```bash
cp .env.example .env
composer install
php artisan migrate:fresh --seed
```
Don´t forget to insert your DB_DATABASE name on .env file



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
