function menuOpen() {
  document.getElementById("body").style.overflow = "hidden";
  document.getElementById("header-megamenu").style.cssText = "display: flex; height: 80vh; padding: 5vh 5vw;";
  document.getElementById("menu-icon").onclick = menuClose;
  document.getElementById("menu-icon").src = "svg/close-menu.svg"
}

function menuClose() {
  document.getElementById("body").style.overflow = "visible";
  document.getElementById("header-megamenu").style.cssText = "display: flex; height: 0vh; padding: 0vh 5vw;";
  document.getElementById("menu-icon").onclick = menuOpen;
  document.getElementById("menu-icon").src = "svg/menu.svg"
}
