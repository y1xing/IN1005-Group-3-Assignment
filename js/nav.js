var prevScrollpos = window.pageYOffset;
document.getElementById("navbar").classList.remove("hidden");
document.getElementById("navbar").classList.add("top");


window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;

  // If the user have not scrolled and is at the top, the background will be transparent
  if (currentScrollPos === 0) {
    document.getElementById("navbar").classList.remove("hidden");
    document.getElementById("navbar").classList.add("top");
  } else if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").classList.remove("hidden");
    document.getElementById("navbar").classList.remove("top");
  } else {
    document.getElementById("navbar").classList.add("hidden");
  }
  prevScrollpos = currentScrollPos;
};
