'use strict'

document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'loading') {
    // 文書の読み込み中に実行する
  } else if (event.target.readyState === 'interactive') {
    const body = document.querySelector('body');
    const button = document.querySelector('#js-button');

    button.addEventListener('click', function () {
      button.classList.toggle('close');
      body.classList.toggle('open');
    });

    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

    anchorLinksArr.forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const targetId = link.hash;
        const targetElement = document.querySelector(targetId);
        const targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top;
        window.scrollTo({
          top: targetOffsetTop,
          behavior: "smooth"
        });
      });
    });
  } else if (event.target.readyState === 'complete') {
    const navContents = document.querySelectorAll("nav#contents a");
    const scrollSection = document.querySelectorAll(".scroll section");

    window.addEventListener("scroll", function() {
      for (let i = 0; i < scrollSection.length; i++) {
        const scrollActive = scrollSection[i].getBoundingClientRect().top;
        if (scrollActive < 1) {
          scrollSection[i].classList.add("active");
          navContents[i].classList.add("active");
          if (scrollSection [i-1]!=null) {
            scrollSection[i-1].classList.remove("active")
            navContents[i-1].classList.remove("active")
          }
        } else {
          scrollSection[i].classList.remove("active");
          navContents[i].classList.remove("active");
        }
      }
    });
  }
});
