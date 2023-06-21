'use strict'

async function fetchHTML(url = '', query = '') {
  fetch(url)
  .then(response => response.text())
  .then(html => {
    document.querySelector(query).innerHTML = html
  });
}

async function fetchText(url = '', query = '') {
  fetch(url)
  .then(response => response.text())
  .then(text => {
    document.querySelector(query).innerText = text
  });
}

async function indexJSON(requestURL = '') {
  const request = new Request(requestURL);
  const response = await fetch(request);
  const indexJson = await response.text();

  const index = JSON.parse(indexJson);
  indexHead(index);
  indexContents(index);
  indexLinks(index);
}

function indexHead(obj) {
  const head = document.querySelector('head');
  const indexTitle = document.createElement('title');
  const ogTitle = document.createElement('meta');
  const twittetTitle = document.createElement('meta');
  indexTitle.textContent = obj['title'] + ' | ' + obj['author'];
  ogTitle.setAttribute("property", "og:title");
  ogTitle.setAttribute("content", obj['title'] + ' | ' + obj['author']);
  twittetTitle.setAttribute("name", "twitter:title");
  twittetTitle.setAttribute("content", obj['title'] + ' | ' + obj['author']);
  head.appendChild(indexTitle);
  head.appendChild(ogTitle);
  head.appendChild(twittetTitle);

  const indexDescription = document.createElement('meta');
  const ogDescription = document.createElement('meta');
  const twitterDescription = document.createElement('meta');
  indexDescription.setAttribute("name", "description");
  indexDescription.setAttribute("content", obj['description']);
  ogDescription.setAttribute("property", "og:description");
  ogDescription.setAttribute("content", obj['description']);
  twitterDescription.setAttribute("name", "twitter:description");
  twitterDescription.setAttribute("content", obj['description']);
  head.appendChild(indexDescription);
  head.appendChild(ogDescription);
  head.appendChild(twitterDescription);

  const indexAuthor = document.createElement( "meta" );
  indexAuthor.setAttribute("name", "author");
  indexAuthor.setAttribute("content", obj['author']);
  head.appendChild(indexAuthor);

  const indexEmail = document.createElement( "meta" );
  indexEmail.setAttribute("name", "reply-to");
  indexEmail.setAttribute("content", obj['email']);
  head.appendChild(indexEmail);

  const ogType = document.createElement( "meta" );
  ogType.setAttribute("property", "og:type");
  ogType.setAttribute("content", obj['type']);
  head.appendChild(ogType);

  const twitter = document.createElement( "meta" );
  const twitterCard = document.createElement( "meta" );
  twitter.setAttribute("name", "twitter:site");
  twitter.setAttribute("content", obj['twitter']);
  twitterCard.setAttribute("name", "twitter:card");
  twitterCard.setAttribute("content", obj['card']);
  head.appendChild(twitter);
  head.appendChild(twitterCard);

  const ogIMG = document.createElement( "meta" );
  const twitterIMG = document.createElement( "meta" );
  ogIMG.setAttribute("property", "og:image");
  twitterIMG.setAttribute("name", "twitter:image");
  ogIMG.setAttribute("content", obj['src']);
  twitterIMG.setAttribute("content", obj['src']);
  head.appendChild(ogIMG);
  head.appendChild(twitterIMG);

  const ogSite = document.createElement( "meta" );
  ogSite.setAttribute("property", "og:site_name");
  ogSite.setAttribute("content", location.hostname);
  head.appendChild(ogSite);

  const ogURL = document.createElement( "meta" );
  ogURL.setAttribute("property", "og:url");
  ogURL.setAttribute("content", location.href);
  head.appendChild(ogURL);
}

function indexContents(obj) {
  const contentsID = document.querySelector('#contents');
  const contents = obj.contents;

  for (const content of contents) {
    const contentA = document.createElement('a');
    const contentI = document.createElement('i');
    const contentP = document.createElement('p');

    contentA.href = content.url;
    contentA.setAttribute("target", '_top');
    contentA.setAttribute("class", 'list_item');
    contentA.setAttribute("data-language", content.language);
    contentA.setAttribute("data-status", content.status);
    contentI.innerHTML = content.date;
    contentP.innerHTML = content.name;

    contentsID.appendChild(contentA);
    contentA.appendChild(contentI);
    contentA.appendChild(contentP);
  }
}

function indexLinks(obj) {
  const linksID = document.querySelector('#links');
  const links = obj.links;

  for (const link of links) {
    const linkA = document.createElement('a');
    const linkI = document.createElement('i');
    const linkP = document.createElement('p');

    linkA.href = link.url;
    linkA.setAttribute("target", '_blank');
    linkA.setAttribute("rel", 'noopener noreferrer');
    linkA.setAttribute("class", 'list_item');
    linkA.setAttribute("data-language", link.language);
    linkA.setAttribute("data-status", link.status);
    linkI.innerHTML = link.date;
    linkP.innerHTML = link.name;

    linksID.appendChild(linkA);
    linkA.appendChild(linkI);
    linkA.appendChild(linkP);
  }
}

/* Copyright (C) 2022 creative-community.space */
