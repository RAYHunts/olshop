const menu = document.getElementById("menu");
const nav = document.getElementById("nav");
const dark = document.getElementById("dark");
const currentLocation = location.href;
const menuItem = document.querySelectorAll("a");
const menuLength = menuItem.length;

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

function displayImage(e) {
  if (e.files[0]) {
    let reader = new FileReader();
    reader.onload = function (e) {
      document.getElementById("imageDisplay").setAttribute("src", e.target.result);
    };
    reader.readAsDataURL(e.files[0]);
  }
}

for (let i = 0; i < menuLength; i++) {
  if (menuItem[i].href === currentLocation) {
    menuItem[i].classList.add("active");
  }
}
