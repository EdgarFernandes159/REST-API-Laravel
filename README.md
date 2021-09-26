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

```json
[
    {
        "id" : 1,
        "title": "Resident evil 7",
        "released": "24 de janeiro de 2017",
        "director": "Koshi Nakanishi",
        "genres": [
        {
            "id": 1,
            "name": "Adventure",
            "created_at": "2021-01-17 16:23:31",
            "updated_at": "2021-01-17 16:23:31",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Drama",
            "created_at": "2021-01-17 16:23:31",
            "updated_at": "2021-01-17 16:23:31",
            "deleted_at": null
        }
        ],
        "platforms": [
        {
            "id": 1,
            "name": "XBOX One",
            "created_at": "2021-01-17 16:23:31",
            "updated_at": "2021-01-17 16:23:31",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "PS5",
            "created_at": "2021-01-17 16:23:31",
            "updated_at": "2021-01-17 16:23:31",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "PC",
            "created_at": "2021-01-17 16:23:31",
            "updated_at": "2021-01-17 16:23:31",
            "deleted_at": null
        }
        ],
        "critic_score": 771.332,
        "user_score": 771.332,
        "created_at": "2021-01-17 16:23:31",
        "updated_at": "2021-01-17 16:23:31",
        "deleted_at": null
    }
]
```


# How to install the project

```bash
cp .env.example .env
composer install
php artisan migrate:fresh --seed
```
Don´t forget to insert your DB_DATABASE name on .env file



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
