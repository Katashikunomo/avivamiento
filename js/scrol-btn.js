// window.onscroll = function() { scrollFunction() };

// function scrollFunction() {
//   var scrollButton = document.getElementById("scrollButton");
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     scrollButton.classList.add("show");
//   } else {
//     scrollButton.classList.remove("show");
//   }
// }

// function scrollToTop() {
//   document.body.scrollTop = 0; // Para Safari
//   document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
// }


window.onscroll = function() {
  scrollFunction();
};

window.addEventListener("touchmove", function() {
  scrollFunction();
});

function scrollFunction() {
  var scrollButton = document.getElementById("scrollButton");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollButton.classList.add("show");
  } else {
    scrollButton.classList.remove("show");
  }
}

function scrollToTop() {
  document.body.scrollTop = 0; // Para Safari
  document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
}