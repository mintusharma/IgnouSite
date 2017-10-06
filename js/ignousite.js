// Setting up the target time
var countDownDate = new Date("Oct 7, 2017 12:00:01").getTime();

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
