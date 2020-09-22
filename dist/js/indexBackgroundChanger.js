window.onload= function () {
var num = Math.floor((Math.random() * 4) + 1);
//console.log("value of num "+ num);
document.body.style.background = "url(./images/indexBackgrounds/"+num+".jpg)";
document.body.style.backgroundAttachment = "fixed";
document.body.style.backgroundPosition = "center";
document.body.style.backgroundRepeat = "no-repeat";
document.body.style.backgroundSize = "cover";
}
