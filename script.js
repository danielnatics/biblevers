const sidebar = document.querySelector(".sidebar");
const closebtn = document.getElementById("closebtn");
const menuIcon = document.querySelector(".menu-icon");
const aboutPage = document.querySelector(".about-page");
const contactPage = document.querySelector(".contact-page");
const pop = document.querySelector(".pop");
const popbtn = document.querySelector("#pop");
const homeButton = document.querySelector(".home");
const removepop = document.getElementById("removepopbody");
const body = document.getElementById("bodi");
const sec = document.getElementById("home");

removepop.addEventListener("click", () => {
  pop.classList.remove("diplay-pop");
  body.style.backgroundColor = "";
  sec.style.backgroundColor.opacity = ".3";
});

const x = getElementById("demo");
function getLocation() {
  alert("working");
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geologication not supported";
  }
}
setTimeout(getLocation(), 3000);
function showPop() {
  // alert("welcome");
  pop.classList.add("diplay-pop");
  body.style.backgroundColor = "";
  sec.style.backgroundColor = "";
}
setTimeout(showPop, 5000);

function requestPermission() {
  Notification.requestPermission().then((perm) => {
    alert(perm);
  });
}
const not = new Notification("Hello There");

// menuIcon.addEventListener("click", openMenu);
// function openMenu() {
//   sidebar.classList.add("translate");
// }
// closebtn.addEventListener("click", closeMenu);
// function closeMenu() {
//   sidebar.classList.remove("translate");
// }
function openBar() {
  sidebar.classList.add("translate");
}
function closeBar() {
  sidebar.classList.remove("translate");
}

// About section
function openAbout() {
  aboutPage.classList.add("vision");
  sidebar.classList.remove("translate");
  document.body.style.visibility = "hidden";
}
function removeAbout() {
  aboutPage.classList.remove("vision");
  sidebar.classList.remove("translate");
  document.body.style.visibility = "visible";
}

//Contact Section
function openContact() {
  contactPage.classList.add("vision");
  sidebar.classList.remove("translate");
  document.body.style.visibility = "hidden";
}
function removeContact() {
  contactPage.classList.remove("vision");
  sidebar.classList.remove("translate");
  document.body.style.visibility = "visible";
}
