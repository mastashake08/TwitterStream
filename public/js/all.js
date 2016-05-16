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

//# sourceMappingURL=all.js.map
