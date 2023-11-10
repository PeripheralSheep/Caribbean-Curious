

// There were errors when it came from the menu changing from pc screen to MOBILE
// The functions my function1 and 2  solve this, if you want details
// message me buttttt don't touch these two functions or the event handlers that follow
// (size1 and size2)
function myFunction1(size) {
  if (size.matches) { // If media query matches
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

var open = false;

function openClose(){
  if(open==false)
    {
      document.getElementById('options').style.visibility="visible";
      open=true;
      var x = document.getElementsByClassName('option');
      for (i=0;i<x.length;i++) {
        x[i].style.height="25%";
        x[i].style.backgroundColor="#058ED9";
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
