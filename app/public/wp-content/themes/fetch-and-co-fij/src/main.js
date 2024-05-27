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

function loadAjaxJson() {
  var charge = new XMLHttpRequest();
  charge.onreadystatechange = function () {
    let text = JSON.parse(this.responseText);
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("titre").innerHTML =
        text.pays + " " + text.capitale;
    }
  };
  charge.open("GET", mainParams.chemin + "/data.json", true);
  charge.send();
}

function loadAjaxPhp() {
  var charge = new XMLHttpRequest();
  charge.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log("ok" + this.responseText);
      document.getElementById("text").innerHTML = this.responseText;
    }
  };

  charge.open("GET", mainParams.chemin + "/data.php", true);
  charge.send();
}

$(document).ready(() => {
  // loadAjaxTxt();
  // loadAjaxJson();
  // loadAjaxPhp();
});
