



function radio() {
  // body...
var m1 = document.getElementById("m1");
  var m2 = document.getElementById("m2");
  var m3 = document.getElementById("m3");
  var m4 = document.getElementById("m4");
  // Get the checkbox
  var checkBox = document.getElementById("r1");
  
  // Get the output text
  


  // If the checkbox is checked, display the output text
  if (r1.checked == true){
    document.getElementById("r2").disabled = true;
    document.getElementById("r3").disabled = true;
    document.getElementById("r4").disabled = true;
    m1.style.display = "block";
  }
  if (r2.checked == true){
    document.getElementById("r1").disabled = true;
    document.getElementById("r3").disabled = true;
    document.getElementById("r4").disabled = true;
    m1.style.display = "block";
    m2.style.display = "block";
  }
  if (r3.checked == true){
    document.getElementById("r1").disabled = true;
    document.getElementById("r2").disabled = true;
    document.getElementById("r4").disabled = true;
    m1.style.display = "block";
    m2.style.display = "block";
    m3.style.display = "block";
  }
  if (r4.checked == true){
    document.getElementById("r1").disabled = true;
    document.getElementById("r2").disabled = true;
    document.getElementById("r3").disabled = true;
    m1.style.display = "block";
    m2.style.display = "block";
    m3.style.display = "block";
    m4.style.display = "block";
  }
}
function refresh()
{

var m1 = document.getElementById("m1");
var m2 = document.getElementById("m2");
var m3 = document.getElementById("m3");
var m4 = document.getElementById("m4");
    document.getElementById("r1").disabled = false;
    document.getElementById("r3").disabled = false;
    document.getElementById("r4").disabled = false;
    document.getElementById("r2").disabled = false;

    document.getElementById("r1").checked = false;
    document.getElementById("r3").checked = false;
    document.getElementById("r4").checked = false;
    document.getElementById("r2").checked = false;
}