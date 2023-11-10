
let x = 1;
function MobileOptions(){
  if(x==1)
    {
      document.getElementById('NavList').style.display="block"
      let color=document.getElementsByClassName('NavOption');
      // Creates an array called color which contains the elemetns with NavOption
      // as a class. In tis case it'll be the drop down menu from topics
      for(var s = 0;s<color.length;s++)
        {
          color[s].style.backgroundColor="black";
          // Changes all of their backgrounds to this color
          // Cahnge as you need
        }
      document.getElementById("activeBar").style.backgroundColor="grey";
      // The element with id active bar gets the selected color
      x=0;
    }
  else{
    // If x isn't equal to 1 the nav list disappears
    document.getElementById('NavList').style.display="none";
    x=1;
  }
}
// There were errors when it came from the menu changing from pc screen to MOBILE
// The functions my function1 and 2  solve this, if you want details
// message me buttttt don't touch these two functions or the event handlers that follow
// (size1 and size2)
function myFunction1(size) {
  if (size.matches) { // If media query matches
    document.getElementById('NavList').style.display="block";
    document.getElementById('logosection').style.width="25%";
    document.getElementById('optionsection').style.width="75%";
    var x = document.getElementsByClassName('option');
    for (i=0;i<x.length;i++) {
      x[i].style.height="100%";
    }
    document.getElementById('options').style.visibility="visible";
  }
}
function myFunction2(size){
  if (size.matches) { // If media query matches
    document.getElementById('NavList').style.display="none";
    document.getElementById('logosection').style.width="40%";
    document.getElementById('optionsection').style.width="60%";
    document.getElementById('options').style.visibility="hidden";
    var x = document.getElementsByClassName('option');
    for (i=0;i<x.length;i++) {
      x[i].style.height="0%";
    }
  }
}

var size1 = window.matchMedia("(min-width: 770px)");
myFunction1(size1) // Call listener function at run time
size1.addListener(myFunction1) // Attach listener function on state changes

var size2 = window.matchMedia("(max-width: 769px)");
myFunction2(size2)
size2.addListener(myFunction2)

//You can touch from below here but I don't recommend it

//Slideindex controls what slide shows
// var slideIndex = 1;
// showSlides(slideIndex);
// // Shows the initial slide
//
// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }
//
// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }
//
// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("Slide");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" activedot", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " activedot";
// }

var open = false;

function openClose(){
  if(open==false)
    {
      document.getElementById('options').style.visibility="visible";
      open=true;
      var x = document.getElementsByClassName('option');
      for (i=0;i<x.length;i++) {
        x[i].style.height="25%";
      }
      document.getElementById('buttonMobile').style.background="#D3D3D3";
    }
  else{
    document.getElementById('options').style.visibility="hidden";
    open=false;
    var x = document.getElementsByClassName('option');
    for (i=0;i<x.length;i++) {
      x[i].style.height="0%";
    }
    document.getElementById('buttonMobile').style.background="none";
  }
}
