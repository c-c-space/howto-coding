'use strict'

document.addEventListener('readystatechange', (event) => {
  if (event.target.readyState === 'complete') {
    $(function() {
      $(".data_show u").on("click", function() {
        let show = $(this).data("id")
        $("#" + show).show(1000)
      })
    })
  }
})

/* Copyright (C) 2021 creative-community.space */
