## Installation

- clone this repo
- update your database credentials
- run `composer install` (or `composer install --ignore-platform-req=ext-pcntl --ignore-platform-req=ext-posix` in Windows)
- run `npm install`
- run `npm run dev`
- run `php artisan serve` or your prefer webserver (Laragon, etc)

## Installation of Vue 3, Vite with Tailwind and configuration

 - run `npm install vue@next vue-loader@next`
 - run `npm i @vitejs/plugin-vue`

 - run `npm install -D tailwindcss postcss autoprefixer`
 - run `npx tailwindcss init -p`
 
## Larastan (PHPStan)

- run `vendor/bin/phpstan analyse source` (or `vendor\bin\phpstan analyse source` in Windows)