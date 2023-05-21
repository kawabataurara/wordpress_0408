"use strict";
{
  // スライドショー
  const options = {
    perMove: 1,
    gap: 16,
    cover: true,
    heightRatio: 0.5,
    fixedHeight: "80vh",
    updateOnMove: true,
    pagination: false,
    arrows: false,
    autoplay: true,
    interval: 3000,
    type: "fade",
    rewind: true,
  };

  const splide = new Splide(".splide", options);
  splide.mount();

  // ハンバーガーメニュー
  const header = document.getElementById("js-header");
  const menu = document.getElementById("js-btn");
0
  menu.addEventListener("click", () => {
    header.classList.toggle("open");
  });


  // SP版アコーディオンメニュー
  const qa = document.querySelectorAll(".init-bottom");
  function acToggle() {
    const content = this.nextElementSibling;

    content.classList.toggle("is-open");

    const qa = this;
    qa.classList.toggle("is-open");
  }

  for (let i = 0; i < qa.length; i++) {
    qa[i].addEventListener("click", acToggle);
  }

}
