var error = decodeURIComponent(window.location.search.match(/(\?|&)error\=([^&]*)/)[2]);
if (error == "1"){
    var redBox = document.createElement("div");
    var redBoxText = document.createElement("h3");
    redBoxText.textContent = "Erreur d'utilisateur ou de mot de passe. Essayez saucisse31! ou jedetestelesAveyronais8131!";
    redBox.appendChild(redBoxText);
    document.getElementById("formAdmin").appendChild(redBox);
}
