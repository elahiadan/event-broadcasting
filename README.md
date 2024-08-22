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

16.add in .env file - 

    PUSHER_APP_ID=anyid

    PUSHER_APP_KEY=anykey

    PUSHER_APP_SECRET=anysecret

    PUSHER_HOST=127.0.0.1

    PUSHER_PORT=6001

    PUSHER_SCHEME=http

    PUSHER_APP_CLUSTER=mt1



    ## PUSHER

    1.create app on pusher.com
    
    2.added 
    
        PUSHER_APP_ID=from_pushetr
    
        PUSHER_APP_KEY=from_pushetr
    
        PUSHER_APP_SECRET=from_pushetr
    
        PUSHER_APP_CLUSTER=ap2
    
    3. added template for html rendering from pusher
