<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

This is a [Laravel](https://laravel.com/) web application framework with expressive, elegant syntax, project bootstrapped with [`composer create-project`](https://laravel.com/docs/9.x/releases).

## Getting Started

> 1. Pull in terminal

```
git clone https://github.com/bforbilly24/clientportal-laravel-fullstack-app.git
```

> 2. Installation

```bash
composer install
cp .env.example .env // setup database credentials
php artisan key:generate
php artisan migrate
php artisan storage:link

npm install
# or
yarn install
# or
pnpm install
# or
bun install
```

> 3. Compile

```bash
php artisan serve

npm run dev
# or
yarn dev
# or
pnpm dev
# or
bun dev
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) with your browser to see the result.

## File & Folder Structure

```bash
ix
│   ├── app
│   ├── bootstrap
│   ├── config
│   ├── database
│   ├── lang
│   ├── public
│   ├── resources/
│   │   └── css
│   │   └── js
│   │   └── sass
│   │   └── views
│   │       └── auth
│   │       └── error
│   │       └── includes
│   │       └── layouts
│   │       └── pages
│   │       └── vendor/comments
│   │       └── multiple folders having all pages, apps, etc
│   ├── routes
│   ├── storage
│   ├── tests
│   └── package.lock
│   ├── composer.json - Laravel php dependencies
│   ├── vite.config.js - Vite configuration File
│   ├── package.json
```

## Preview

<img alt="login" src="https://github.com/user-attachments/assets/03a21544-b53f-4c62-9301-64677727eb40">
<img alt="dashboard" src="https://github.com/user-attachments/assets/a85f5424-6c90-4b77-9a93-f306c825d113"> 
