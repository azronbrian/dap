// deadline
var countDownDate = new Date("Dec 7, 2020 00:00:00").getTime();

// update the count down every 1 second
var x = setInterval(function() {

  // today's date and time
  var now = new Date().getTime();

  // distance between today and deadline
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   document.querySelector('#days').innerHTML = days;
//   document.querySelector('#hrs').innerHTML = hours;
//   document.querySelector('#min').innerHTML = minutes;
//   document.querySelector('#sec').innerHTML = seconds;
  document.querySelector('#days').innerHTML = 0;
  document.querySelector('#hrs').innerHTML = 0;
  document.querySelector('#min').innerHTML = 0;
  document.querySelector('#sec').innerHTML = 0;

}, 1000);