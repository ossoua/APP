var counter = 10;

setInterval(countDown(){
  counter--;
  if(counter == 0){
    id = document.getElementById("count");
    id.innerHTML = counter;
  }
  if(counter === 0){
    id.innerHTML = "Début du test";
  }
}, 1000);
