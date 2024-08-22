<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broadcasting</title>
    <style>
        {!! Vite::content('resources/css/app.css') !!}
    </style>
    <script>
        {!! Vite::content('resources/js/app.js') !!}
    </script>
</head>

<body>
    <h1>Broadcasting message</h1>
    <script>
        Echo.channel('channel-name-broadcast')
            .listen('BroadcastEvent', (e) => {
                console.log(e);
            });
    </script>

</body>

</html>