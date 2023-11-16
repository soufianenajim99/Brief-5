let hamme = document.querySelector(".toggle-menu");
let menuu = document.querySelector(".right-nav");
hamme.addEventListener("click", () => {
  console.log("first-test");
  menuu.classList.toggle("active");
});

console.log("bello");
