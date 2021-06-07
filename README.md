# Laravel Start App

### Laravel v8.45.1 (PHP v7.4.13)

---

Run in terminal

```
npm i
composer i
```

``` 
composer run-script post-autoload-dump
composer run-script post-root-package-install
composer run-script post-create-project-cmd
```

```
php artisan serve
php artisan serve --port=8080
```

```
php artisan config:clear
php artisan config:cache
php artisan optimize
php artisan cache:clear
php artisan route:cache
php artisan view:clear
```

Starting Laravel development server: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Errors

Check [log file](storage/logs/laravel.log)


----

## Requirements:

1) PHP 7.4
2) Composer
3) Node.js 16
4) MSQL Server, Apache Server (XAMPP) or alternatives

---

## Composer

1) install Composer - download & run installer

2) check composer version:

```
composer -V

Composer version 2.1.1 2021-06-04 08:46:46
```

3) init project

``` 
composer init
```

## Laravel

1) install Laravel - Installation Via Composer

``` 
composer create-project laravel/laravel laravel-start-app
```

2) edit [php.ini](php.ini) uncomment line => `;extension_dir = "ext"`, `;extension=fileinfo`, `;extension=openssl`

``` 
php --ini
extension_dir = "ext"
extension=fileinfo
extension=openssl
openssl.cafile=ext/php_openssl.dll
openssl.cafile=C:\Program Files\PHP\v7.4\ext\php_openssl.dll
```

## Deployment

* [Deploy to Hosting](https://www.ukraine.com.ua/wiki/hosting/frameworks/laravel/transfer-to-hosting/)
  using [SSH](https://www.ukraine.com.ua/wiki/hosting/ssh/connect/)

* [Video tutorial](https://youtu.be/h6CjHhZPQBI)

* [Documentation](https://laravel.com/docs/8.x/deployment)

---

# links:

* [Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine.](https://nodejs.org/)
* [Composer 2.0 - A Dependency Manager for PHP](https://getcomposer.org)
* [Download Composer](https://getcomposer.org/download/)
* [Download and run Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)
* [Laravel The Full Stack Framework](https://laravel.com)
* [Laravel Installation](https://laravel.com/docs/8.x/installation)
* [PHP Install](https://www.php.net/manual/ru/install.php)
* [XAMPP](https://www.apachefriends.org/ru/index.html)
* [Web Platform Installer](https://www.microsoft.com/web/downloads/platform.aspx):
    - PHP 8
    - MS Drivers 5.9 for PHP 8 for SQL Server
* []()
* []()

-----

# ERRORS

> ### Problem 1
>  - laravel/framework[v8.40.0, ..., 8.x-dev] require league/flysystem ^1.1 -> satisfiable by league/flysystem[1.1.0, ..., 1.x-dev].
>  - league/flysystem[1.1.0, ..., 1.x-dev] require ext-fileinfo * -> it is missing from your system. Install or enable PHP's fileinfo extension.
>  - Root composer.json requires laravel/framework ^8.40 -> satisfiable by laravel/framework[v8.40.0, ..., 8.x-dev].
>
>  You need to uncomment this line in the php.ini file located in your PHP installation folder:
>
>  ;extension=fileinfo
> Remove the semicolon and save the file.
>
>  extension=fileinfo
>
> ### Problem 2
>
> [Composer\Exception\NoSslException]                                                                                                                                                     
> The openssl extension is required for SSL/TLS protection but is not available. If you can not enable the openssl extension, you can disable this error, at your own risk, by setting t  
> he 'disable-tls' option to true.
>
> his issue occurs due to openssl and extension director so uncomment below extensions in php.ini file
>
> extension=php_openssl.dll
>
> extension_dir = "ext"


--------------

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and
creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in
many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache)
  storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all
modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video
tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging
into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in
becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in
the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by
the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell
via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
