var setState = 10;

function countdown() {
	setState--;
	document.getElementById("count").setState = timeleft;
	if (timeleft > 0) {
		setTimeout(countdown, 1000);
	}
};

setTimeout(countdown, 1000);

//var counter = document.getElementById("count").textContent;

//var countdown = setTimeout(function() {
//  counter--;
//  document.getElementById("count").textContent = counter;
//  if(counter <= 0) clearInterval(countdown);
//}, 1000);

//setInterval(countDown(){
//  counter--;
//  if(counter == 0){
//    id = document.getElementById("count");
//    id.innerHTML = counter;
//  }
//  if(counter === 0){
//    id.innerHTML = "Début du test";
//  }
//}, 1000);
