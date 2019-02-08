function calcBMI(){
  let alert = document.getElementById('alert');
  let text = document.getElementById('userBMI');
  if (document.getElementById('m').checked || document.getElementById('w').checked) {
    document.getElementById('alert').style.display = "none";
    let weight = document.getElementById('weight').value;
    let growth = document.getElementById('growth').value;
    console.log(growth);
    if (weight == "" || growth == "") {
         document.getElementById('alert').style.display = "block";
    } else {
       document.getElementById('alert').style.display = "none";
      let bmi = (weight / Math.pow(growth,2))*10000;
      let x = Math.round(bmi*100)/100;
      console.log(x);

      if (x <= 18.5) {
        text.innerHTML = "Twoje BMI wynosi: "+x+". Wskaźnik wskazuje niedowagę.";
      } else if (x>18.5 && x<=26) {
        text.innerHTML = "Twoje BMI wynosi: "+x+". Wskaźnik wskazuje wagę prawidłową.";
      } else if (x>26 && x<30) {
        text.innerHTML = "Twoje BMI wynosi: "+x+". Wskaźnik wskazuje wagę nadwagę.";
      } else if (x>=30 && x<35) {
        text.innerHTML = "Twoje BMI wynosi: "+x+". Wskaźnik wskazuje wagę otyłość I stopnia.";
      } else if (x>=35 && x<40) {
        text.innerHTML = "Twoje BMI wynosi: "+x+". Wskaźnik wskazuje wagę otyłość II stopnia.";
      } else if (x>=40) {
        text.innerHTML = "Twoje BMI wynosi: "+x+". Wskaźnik wskazuje wagę otyłość olbrzymią.";
      }
    }
  } else {
     document.getElementById('alert').style.display = "block";
  }

}
