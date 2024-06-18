<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## System Requirements

PHP: 8.1+

## Instalasi

-   Install [Composer](https://getcomposer.org/download) and [Npm](https://nodejs.org/en/download)
-   Clone the repository: `git clone --branch frontend https://github.com/AryaWibawaZulfiansyah/Layanan_web.git`
-   Install dependencies: `composer update; composer install ; npm install ; npm run dev`
-   Jalankan `cp .env.example .env` untuk mmbuat file .nv
-   Edit pada bagian `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`. Sesuai kan dengan database pada xampp/laragon.
-   Jalankan `php artisan key:generate`
-   Jalankan `php artisan migrate --seed --seeder=AdminSeeder` for migration database

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
