function getStream(){
  var xhr = new XMLHttpRequest();
xhr.open('GET', '/start-stream', true);
xhr.onload = function(e) {
  if (this.status == 200) {
    console.log('Connection made!');
  }
};
xhr.send();
}

function stopStream(){
  var xhr = new XMLHttpRequest();
xhr.open('GET', '/stop-stream', true);
xhr.onload = function(e) {
  if (this.status == 200) {
    console.log('Connection made!');
  }
};
xhr.send();
}
