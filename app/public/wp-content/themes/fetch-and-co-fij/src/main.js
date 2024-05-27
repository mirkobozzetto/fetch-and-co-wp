function loadAjaxTxt() {
  var charge = new XMLHttpRequest();
  charge.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("titre").innerHTML = this.responseText;
    }
  };

  charge.open("GET", mainParams.chemin + "/data.txt", true);
  charge.send();
}

$(document).ready(() => {
  loadAjaxTxt();
});
