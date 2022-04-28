var mousePressed = false;
var lastX, lastY;
var ctx;
var previousColour;

function InitThis() {
    ctx = document.getElementById('myCanvas').getContext("2d");

    $('#myCanvas').mousedown(function (e) {
        mousePressed = true;
        Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, false);
    });

    $('#myCanvas').mousemove(function (e) {
        if (mousePressed) {
            Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, true);
        }
    });

    $('#myCanvas').mouseup(function (e) {
        mousePressed = false;
    });
	    $('#myCanvas').mouseleave(function (e) {
        mousePressed = false;
    });
}
function erase(){
    ctx.globalCompositeOperation = 'destination-out';
}

function changeColour(){
    ctx.strokeStyle = previousColour;
    ctx.globalCompositeOperation = 'source-over';
}
function Draw(x, y, isDown) {
    if (isDown) {
        previousColour=$('#selColor').val()
        ctx.beginPath();
        ctx.strokeStyle = previousColour;
        ctx.lineWidth = $('#selWidth').val();
        ctx.lineJoin = "round";
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(x, y);
        ctx.closePath();
        ctx.stroke();
    }
    lastX = x; lastY = y;
}