'use strict'

// 2 つの値の間にある整数の乱数を返す
function random(min, max) {
  const num = Math.floor(Math.random() * (max - min + 1)) + min;
  return num;
}

// RGB それぞれの値を 1~255 のうちからランダムに返す
function randomRGB() {
  let getRGB = `rgb(${random(0, 255)},${random(0, 255)},${random(0, 255)})`;
  return getRGB;
}

document.body.onscroll = (event) => {
  setTimeout(() => {
    document.body.style.background = `${randomRGB()}`;
  }, 100);
};

document.querySelector('#scroolTop').addEventListener('click', event => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

let elm = document.documentElement;
let bottom = elm.scrollHeight - elm.clientHeight;

document.querySelector('#scroolBottom').addEventListener('click', event => {
  window.scrollTo({
    top: bottom,
    behavior: "smooth"
  });
});

document.querySelector('#scrollByplus').addEventListener('click', event => {
  window.scrollBy({
    top: window.innerHeight,
    behavior: "smooth"
  });
});

document.querySelector('#scrollByminus').addEventListener('click', event => {
  window.scrollBy({
    top: -window.innerHeight,
    behavior: "smooth"
  });
});

let scale = 1;
const wheel = document.querySelector('#three');
wheel.addEventListener('wheel', event => {
  event.preventDefault();
  scale += event.deltaY * -0.01;

  // Restrict scale
  scale = Math.min(Math.max(.75, scale), 1.25);

  // Apply scale transform
  wheel.style.transform = `scale(${scale})`;
});
