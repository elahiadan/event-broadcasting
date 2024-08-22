## notes

1.composer require beyondcode/laravel-websockets
2.php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
3.php artisan migrate
4.php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"
5.composer require pusher/pusher-php-server
6.chnage BROADCAST_DRIVER=log to BROADCAST_DRIVER=pusher
7.npm install --save-dev laravel-echo pusher-js
8.uncomments the code in resources/js/bootstraps.js
9.npm run dev
10.php artisan websockets:serve
11. npm run watch
12.create new blade file broadcast.blade.php
13.add vite Inline Assets code https://laravel.com/docs/10.x/vite
14.add ECHO code snipet to call event
15.http://127.0.0.1:8000/laravel-websockets - test event
