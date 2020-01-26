var counter = document.getElementById("count").textContent;

var countdown = setInterval(function() {
  counter--;
  document.getElementById("count").textContent = counter;
  if(counter <= 0) clearInterval(countdown);
}, 1000);

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
