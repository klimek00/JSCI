function getXMLHttpRequest(){
	  try { return new XMLHttpRequest();} catch(err1) {
		try { return new ActiveXObject('Msxml2.XMLHTTP'); } catch(err2) {
		  try { return new ActiveXObject('Microsoft.XMLHTTP');} catch(err3) {
			alert("AJAX failed");
			return false; }
		}
	 }
}
let x;
let r = getXMLHttpRequest();
function calcBMI(){
  let alert = document.getElementById('alert');
  let text = document.getElementById('userBMI');
  if (document.getElementById('m').checked || document.getElementById('w').checked) {
    document.getElementById('alert').style.display = "none";
    let weight = document.getElementById('weight').value;
    let growth = document.getElementById('growth').value;
    if (weight == "" || growth == "") {
         document.getElementById('alert').style.display = "block";
         text.innerHTML = "";
         document.getElementById('infoSave').innerHTML = "";
         x = null;

    } else if ((weight < 20 || weight > 700) || (growth < 100 || growth > 300)) {
			document.getElementById('imbecyl').style.display = "block";
			text.innerHTML = "";
			document.getElementById('infoSave').innerHTML = "";
			x = null;
		} else {
       document.getElementById('alert').style.display = "none";
      let bmi = (weight / Math.pow(growth,2))*10000;
      x = Math.round(bmi*100)/100;

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
     text.innerHTML = "";
     document.getElementById('infoSave').innerHTML = "";
     x = null;
  }
  return x;
}
function showInfo() {
  document.getElementById('infoSave').innerHTML = r.responseText;
}
function saveBMI() {
  let bmi = calcBMI();
  console.log(bmi);
    r.open("GET", "saveBMI.php?bmi="+bmi);
    r.onreadystatechange = showInfo;
    r.send(null);
}
function clearBMI() {
  let weight = document.getElementById('weight').value = "";
  let growth = document.getElementById('growth').value = "";
  document.getElementById('w').checked = false;
  document.getElementById('m').checked = false;
  document.getElementById('alert').style.display = "none";
  document.getElementById('userBMI').innerHTML = "";
  document.getElementById('infoSave').innerHTML = "";
}
