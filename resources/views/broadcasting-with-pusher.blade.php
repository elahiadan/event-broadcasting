<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('7ce7f392facd7e1369cb', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('channel-name-broadcast-with-pusher');
    channel.bind('channel-name-broadcast-with-pusher', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>channel-name-broadcast-with-pusher</code>
    with event name <code>channel-name-broadcast-with-pusher</code>.
  </p>
</body>