// Setting up the target time
var countDownDate = new Date("Oct 8, 2017 12:00:01").getTime();

var x = setInterval(function() {  //This function updates the date every second

  // Getting current time and difference of current time and target time
  var currentDate = new Date().getTime();
  var difference  = countDownDate - currentDate;

  // Converting to specify the correct values
  var days    = Math.floor(difference / (1000 * 60 * 60 * 24));
  var hours   = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((difference % (1000 * 60)) / 1000);

  document.getElementById("doomsDay").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

  if(hours < 1){
    clearInterval(x);
    document.getElementById("doomsDay").innerHTML = "DOOMSDAY!";
  }
}, 1000); // value for I second


// Checking for Gradecard's actions
var action1 = "https://webservices.ignou.ac.in/GradecardM/Result.asp";
var action2 = "https://gradecard.ignou.ac.in/gradecardB/Result.asp";
var action3 = "https://webservices.ignou.ac.in/GradecardR/Result.asp";

function checkProgramValue() {
 var firstFormTag = document.forms[0];
 var program = firstFormTag.elements[0].value;
 if (program == "BCA" || program == "MCA" || program == "MP" || program == "MPB") {
   document.getElementsByTagName("form")[0].setAttribute("action", action1);
 }else if (program == "ASSO" || program == "BA" || program == "BCOM" || program == "BDP" || program == "BSC") {
   document.getElementsByTagName("form")[0].setAttribute("action", action2);
 }else {
   document.getElementsByTagName("form")[0].setAttribute("action", action3);
 }
}


// ToolTip code completion, Fixing the tooltip position in the code
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
