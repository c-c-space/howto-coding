window.addEventListener("DOMContentLoaded", function () {
  orientation();
}, false);

screen.orientation.addEventListener( "change", function () {
	orientation();
}, false);

function orientation() {
  const screenOrientation= document.getElementById("orientation")
  const angle= document.getElementById("angle")

  let orientationType = (screen.orientation || {}).type || screen.mozOrientation || screen.msOrientation;
  if (orientationType === "landscape-secondary" || orientationType === "landscape-primary") {
    screenOrientation.innerText = 'Type: ' + orientationType;
    angle.innerText = 'Angle: ' + screen.orientation.angle;
  } else if (orientationType === "portrait-secondary" || orientationType === "portrait-primary") {
    screenOrientation.innerText = 'Type: ' + orientationType;
    angle.innerText = 'Angle: ' + screen.orientation.angle;
  } else if (orientationType === undefined) {
    screenOrientation.innerText = "画面方向 API に対応していません";
    angle.innerText = "";
  }
}
