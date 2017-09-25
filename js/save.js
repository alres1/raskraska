// JavaScript Document
var svg = document.querySelector('svg');
var canvas = document.createElement('canvas');
canvas.height = svg.getAttribute('height');
canvas.width = svg.getAttribute('width');
canvg(canvas, svg.parentNode.innerHTML.trim());
var dataURL = canvas.toDataURL('image/png');
var data = atob(dataURL.substring('data:image/png;base64,'.length)),
        asArray = new Uint8Array(data.length);

for (var i = 0, len = data.length; i < len; ++i) {
    asArray[i] = data.charCodeAt(i);
}

var blob = new Blob([asArray.buffer], {type: 'image/png'});
saveAs(blob, 'export_' + Date.now() + '.png');