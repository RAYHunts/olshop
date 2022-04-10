const menu = document.getElementById("menu");
const nav = document.getElementById("nav");
const dark = document.getElementById("dark");

menu.addEventListener("click", () => {
  if (nav.classList.contains("-translate-x-full")) {
    menu.innerHTML = `<i class="fa-solid fa-x"></i>`;
  } else {
    menu.innerHTML = `<i class="fa-solid fa-bars"></i>`;
  }
  nav.classList.toggle("-translate-x-full");
});

dark.addEventListener("click", () => {
  if (dark.innerHTML == '<i class="fa-duotone fa-sun"></i>') {
    dark.innerHTML = '<i class="fa-solid fa-moon"></i>';
  } else {
    dark.innerHTML = '<i class="fa-duotone fa-sun"></i>';
  }
});
