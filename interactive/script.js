'use strict'

const storage = localStorage;

if(!storage.getItem('theme')) {
  document.body.className = 'default';
} else {
  setStyles();
}

const themes = document.querySelectorAll('#theme input');
for (const theme of themes) {
  theme.addEventListener('change', function() {
    storage.setItem('theme', theme.value);
    setStyles();
  });
};

function setStyles() {
  document.body.className = storage.getItem('theme');
}


// Click #openButton button open the <dialog> modally
const dialogModal = document.querySelector('#modal');
const openModal = document.querySelector('#openModal');

openModal.addEventListener('click', function onModal() {
  if (typeof dialogModal.showModal === "function") {
    dialogModal.showModal();
  } else {
    alert("The <dialog> API is not supported by this browser");
  }
});

// Click #closeButton button close the <dialog> modally
const closeButton = document.querySelector('#closeButton');
closeButton.addEventListener('click', () => {
  dialogModal.close();
});
