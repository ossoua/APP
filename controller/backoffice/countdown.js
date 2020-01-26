function startTimer(duration, display) {
  var timer = duration, seconds;
  setInterval(function () {
    seconds = parseInt(timer % 60, 10);

    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.innerText = seconds;

    if (--timer < 0) {
      display.innerText = "Début";
    }
  }, 1000);
}

window.onload = function () {
  var time = 10,
      display = document.getElementById('count');
  startTimer(time, display);
};
