const openWindow = document.getElementsByClassName("action");
var i;

for (i = 0; i < openWindow.length; i++) {
    openWindow[i].addEventListener("click", function() {

      const actionTxt = this.nextElementSibling;
      if (actionTxt.classList.contains('hide')) {
        actionTxt.classList.remove('hide');
      } else {
        actionTxt.classList.add('hide');
      }
    });
  };