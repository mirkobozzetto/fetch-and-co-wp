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
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText) {
        try {
          let text = JSON.parse(this.responseText);
          document.getElementById("titre").innerHTML =
            text.pays + " " + text.capitale;
        } catch (e) {
          console.error("Erreur lors de l'analyse du JSON : ", e);
        }
      }
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

function loadAjaxJQ() {
  // $('#titre').load(chemin+"/data.php");
  $.post(
    mainParams.chemin + "/data.php",
    {
      prenom: "Will",
      nom: "Smith",
    },
    function (data, status) {
      var infos = JSON.parse(data);
      console.log(infos);
      // document.getElementById("titre").innerHTML = data;
    }
  );
}

$(document).ready(() => {
  // loadAjaxTxt();
  // loadAjaxJson();
  // loadAjaxPhp();
});
