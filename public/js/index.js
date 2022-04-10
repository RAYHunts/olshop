// const produk = document.getElementsByName("produk");
const readMore = document.getElementById("readmore");
const deskripsi = document.getElementById("deskripsi");

// produk.forEach((el) => {
//   el.addEventListener("click", () => {
//     location = el.getAttribute("href");
//   });
// });

if (deskripsi.clientHeight < 156) {
  readMore.classList.add("hidden");
}

readMore.addEventListener("click", () => {
  deskripsi.classList.toggle("line-clamp-6");
  if (readMore.innerHTML != "Hide") {
    readMore.innerHTML = "Hide";
  } else {
    readMore.innerHTML = "Read More";
  }
});
