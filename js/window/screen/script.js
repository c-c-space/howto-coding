window.addEventListener("DOMContentLoaded", function () {
  windowScreen();
}, false);

window.onresize = tmResize;
function tmResize() {
  if (typeof pageResize == "function") {
    pageResize();
  }
}

function pageOnload() {
  windowScreen();
}
function pageResize() {
  windowScreen();
}

function windowScreen() {
  const outScreenWidth = document.getElementById("outScreenWidth")
  outScreenWidth.innerText = screen.width;

  const outScreenheight = document.getElementById("outScreenheight")
  outScreenheight.innerText = screen.height;

  const outAvailWidth = document.getElementById("outAvailWidth")
  outAvailWidth.innerText = screen.availWidth;

  const outAvailHeight = document.getElementById("outAvailHeight")
  outAvailHeight.innerText = screen.availHeight;

  const colorDepth = document.getElementById("colorDepth")
  colorDepth.innerText = screen.colorDepth;

  const pixelDepth = document.getElementById("pixelDepth")
  pixelDepth.innerText = screen.pixelDepth;

  const orientation = document.getElementById("orientation")
  orientation.innerText = screen.orientation;
}
