var app = require('http').createServer(handler);
var io = require('socket.io')(app);

var Redis = require('ioredis');
var redis = new Redis();
var Twit = require('twit')

var T = new Twit({
  consumer_key:         'sT4YaweyRxy6GFHEdJ2Q1PD39',
  consumer_secret:      'O9ZmPXKjV6D289mTUs839X4smQBSpz4Ya34WQqjdNVEfU213bb',
  access_token:         '3129675625-ilEr1AfGqUnUiKSfoRabtqdcQDjJxQEXki76lPN',
  access_token_secret:  'uVj8P18yTAn01t8uD0Hdqh18nvvgIFQOTt2FydQ5LcCr1',
  timeout_ms:           60*1000,  // optional HTTP request timeout to apply to all requests.
});
var stream = T.stream('user');
stream.stop();
app.listen(6001,'192.168.10.10', function() {
    console.log('Server is running!');
});

function handler(req, res) {
    res.writeHead(200);
    res.end('');
}

io.on('connection', function(socket) {
    //
    console.log('new connect');

});

redis.psubscribe('*', function(err, count) {
    //
});

redis.on('pmessage', function(subscribed, channel, message) {
    message = JSON.parse(message);
    console.log(message);
    console.log(channel);
    switch(channel){
      case 'start-stream':
      stream.start();
      stream.on('tweet', function(tweet){
        console.log(tweet.text);
      io.emit('tweet', tweet.text);
      });

      break;
      case 'stop-stream':
      stream.stop();
      break;
    }

});
