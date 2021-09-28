var toggleOn = document.getElementById("toggle-on");
var toggleOff = document.getElementById("toggle-off");

var middleOneImage = document.getElementById("middleOneImage");

toggleOn.addEventListener('click', myfunction1);
toggleOff.addEventListener('click', myfunction2);

function myfunction1(e){
    var navLinks=document.getElementById("navLinks");
    // middleOneImage.style.display = "none";
    // middleOneImage.style.overflow = "visible";
    navLinks.classList.toggle('active');
    // toggleOff.style.display = "unset";
    // toggleOn.style.display = "none";

}

// function myfunction2(e){
//     var navLinks=document.getElementById("navLinks");
//     middleOneImage.style.display = "unset";
//     navLinks.classList.toggle('active');
//     toggleOff.style.display = "none";
//     toggleOn.style.display = "block";

// }