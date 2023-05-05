window.addEventListener("DOMContentLoaded", function () {
  orientation();
}, false);

screen.orientation.addEventListener( "change", function () {
  orientation();
}, false);

function orientation() {
  var screenOrientation = screen.orientation;
  const angle= document.getElementById("angle")

  let orientationType = (screen.orientation || {}).type || screen.mozOrientation || screen.msOrientation;
  if (orientationType === "landscape-secondary" || orientationType === "landscape-primary") {
    document.getElementById("orientation").innerText = "Type: " + orientationType;
    angle.innerText = 'Angle: ' + screenOrientation.angle + '°'
  } else if (orientationType === "portrait-secondary" || orientationType === "portrait-primary") {
    document.getElementById("orientation").innerText = "Type: " + orientationType;
    angle.innerText = 'Angle: ' + screenOrientation.angle + '°'
  } else if (orientationType === undefined) {
    document.getElementById("orientation").innerText = "not supported by your browser";
    angle.innerText = ""
  }
}
